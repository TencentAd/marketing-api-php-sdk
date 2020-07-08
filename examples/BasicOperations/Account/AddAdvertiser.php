<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建广告主(Advertiser)的简单示例
 */
class AddAdvertiser
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $CORPORATION_NAME       = 'YOUR CORPORATION NAME'; // 企业名称
    public static $CERTIFICATION_IMAGE_ID = 'YOUR CERTIFICATION IMAGE ID'; // 营业执照图片ID
    public static $SYSTEM_INDUSTRY_ID     = 'YOUR INDUSTRY ID'; // 行业ID
    public static $INTRODUCTION_URL       = 'YOUR INTRODUCTION PAGE URL'; // 业务介绍页地址

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

            $response = $tads->advertiser()
                             ->add([
                                 'corporation_name'       => static::$CORPORATION_NAME,
                                 'certification_image_id' => static::$CERTIFICATION_IMAGE_ID,
                                 'system_industry_id'     => static::$SYSTEM_INDUSTRY_ID,
                                 'introduction_url'       => static::$INTRODUCTION_URL,
                             ]);
            $accountId = $response->getAccountId();

            return $accountId;
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
        $example = new AddAdvertiser();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
