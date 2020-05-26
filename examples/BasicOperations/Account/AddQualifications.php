<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建广告主资质(Qualification)的简单示例
 */
class AddQualifications
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID             = 'YOUR ACCOUNT ID';
    public static $QUALIFICATION_TYPE     = 'ADDITIONAL_INDUSTRY_QUALIFICATION'; // 附加行业资质
    public static $SYSTEM_INDUSTRY_ID     = 'YOUR INDUSTRY ID'; // 行业ID
    public static $QUALIFICATION_CODE     = 'YOUR QUALIFICATION CODE'; // 资质编码
    public static $QUALIFICATION_IMAGE_ID = 'YOUR QUALIFICATION IMAGE ID'; // 资质图片ID

    public function init()
    {
        $tads = TencentAds::init([
            'access_token' => static::$ACCESS_TOKEN,
            'is_debug'     => true,
        ]);
        $tads->useSandbox(); // 默认访问沙箱环境，如访问正式环境，请切换为$tads->useProduction()
        static::$tads = $tads;

        return $tads;
    }

    public function main()
    {
        try {
            /* @var TencentAds $tads */
            $tads = static::$tads;

            $qualificationSpec = [
                'additional_industry_spec' => [
                    'system_industry_id' => static::$SYSTEM_INDUSTRY_ID,
                    'qualification_code' => static::$QUALIFICATION_CODE,
                    'image_id_list'      => [static::$QUALIFICATION_IMAGE_ID],
                ],
            ];

            $response = $tads->qualifications()
                             ->add([
                                 'account_id'         => static::$ACCOUNT_ID,
                                 'qualification_type' => static::$QUALIFICATION_TYPE,
                                 'qualification_spec' => $qualificationSpec,
                             ]);
            $qualificationId = $response->getQualificationId();

            return $qualificationId;
        } catch (TencentAdsResponseException $e) {
            // When Api returns an error
            echo 'Tencent ads returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (TencentAdsSDKException $e) {
            // When validation fails or other local issues
            echo 'Tencent ads SDK returned an error: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        } catch (Exception $e) {
            echo 'Other exception: ' . $e->getMessage() . PHP_EOL;
            throw $e;
        }
    }
}

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    try {
        $example = new AddQualifications();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
