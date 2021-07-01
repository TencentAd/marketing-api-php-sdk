<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取待确认接收授权(Asset pre permission)列表的简单示例
 */
class GetAssetPrePermissions
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $ASSET_TYPE   = 'ASSET_TYPE_XIJING';
    public static $PATH_TYPE    = 'PATH_TYPE_POINT_TO_POINT';

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
                'account_id', 'owner_account_id', 'asset_id', 'asset_type', 'path_id', 'path_type', 'is_granted_all',
                'grant_time', 'permission_list',
            ]; // 需要返回的字段
            $response = $tads->assetPrePermissions()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'asset_type' => static::$ASSET_TYPE,
                                 'path_type'  => static::$PATH_TYPE,
                                 'fields'     => $fields,
                             ]);

            // 从返回里获得Asset信息
            foreach ($response->getList() as $assetInfo) {
                // echo $assetInfo . PHP_EOL;
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
        $example = new GetAssetPrePermissions();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
