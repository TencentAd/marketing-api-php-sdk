<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取附近推曝光预估数据(Local estimatedamount)的简单示例
 */
class GetLocalEstimatedamount
{
    public static $tads;
    public static $ACCESS_TOKEN  = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID    = 'YOUR ACCOUNT ID';
    public static $CITY_LEVEL    = 'CITY_LEVEL_FIRST'; // 城市级别
    public static $PACKAGE_LEVEL = 'PACKAGE_LEVEL_2000'; // 套餐等级
    public static $POI           = 'YOUR POI'; // 腾讯地图位置

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

            $response = $tads->localEstimatedamount()
                             ->get([
                                 'account_id'    => static::$ACCOUNT_ID,
                                 'city_level'    => static::$CITY_LEVEL,
                                 'package_level' => static::$PACKAGE_LEVEL,
                                 'poi_list'      => [static::$POI],
                             ]);

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
        $example = new GetLocalEstimatedamount();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
