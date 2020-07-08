<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取安卓渠道包(Android channel package)的简单示例
 */
class GetAndroidUnionChannelPackages
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $APP_ID       = 'YOUR ANDROID APP ID';

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

            $fields = [
                'android_union_app_id', 'package_name', 'channel_package_id', 'version_code', 'version_name',
                'created_time', 'last_modified_time', 'system_status', 'system_message',
            ]; // 需要返回的字段
            $response = $tads->androidUnionChannelPackages()
                             ->get([
                                 'account_id'     => static::$ACCOUNT_ID,
                                 'android_union_app_id' => static::$APP_ID,
                                 'fields'         => $fields,
                             ]);

            // 从返回里获得Package信息
            foreach ($response->getList() as $packageInfo) {
                // echo $packageInfo . PHP_EOL;
            }

            return $response;
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
        $example = new GetAndroidUnionChannelPackages();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
