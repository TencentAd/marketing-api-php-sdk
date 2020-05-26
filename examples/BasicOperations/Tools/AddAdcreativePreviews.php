<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建预览受众(Adcreative preview)的简单示例
 */
class AddAdcreativePreviews
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $ADGROUP_ID   = 'YOUR ADGROUP ID'; // 广告组ID
    public static $USER_ID_TYPE = 'USER_ID_TYPE_QQ_ID'; // 受众ID类型
    public static $USER_ID_QQ   = 'YOUR USER QQ'; // 受众ID

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

            $response = $tads->adcreativePreviews()
                             ->add([
                                 'account_id'   => static::$ACCOUNT_ID,
                                 'adgroup_id'   => static::$ADGROUP_ID,
                                 'user_id_type' => static::$USER_ID_TYPE,
                                 'user_id_list' => [static::$USER_ID_QQ],
                             ]);

            return true;
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
        $example = new AddAdcreativePreviews();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
