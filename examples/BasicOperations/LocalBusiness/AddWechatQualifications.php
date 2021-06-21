<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建附近推商家资质(Wechat qualification)的简单示例
 */
class AddWechatQualifications
{
    public static $tads;
    public static $ACCESS_TOKEN       = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID         = 'YOUR ACCOUNT ID';
    public static $QUALIFICATION_TYPE = 'STUFF_BUSINESS_LICENSE'; // 资质类型
    public static $QUALIFICATION_FILE = 'YOUR QUALIFICATION FILE PATH'; // 资质图片文件路径

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

            $signature = md5_file(static::$QUALIFICATION_FILE);

            $response = $tads->wechatQualifications()
                             ->add([
                                 'account_id'                          => static::$ACCOUNT_ID,
                                 'wechat_qualification_type'           => static::$QUALIFICATION_TYPE,
                                 'wechat_qualification_file'           => static::$QUALIFICATION_FILE,
                                 'wechat_qualification_file_signature' => $signature,
                             ]);
            $qualificationId = $response->getWechatQualificationId();

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
        $example = new AddWechatQualifications();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
