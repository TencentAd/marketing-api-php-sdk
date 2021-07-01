<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个确认资产预授权(Asset pre permission)的简单示例
 */
class UpdateAssetPrePermissions
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $ASSET_ID     = 'YOUR ASSET ID';
    public static $ASSET_TYPE   = 'ASSET_PERMISSION_GRANT_TYPE_ASSET';

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

            $response = $tads->assetPrePermissions()
                             ->update([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'asset_type' => static::$ASSET_TYPE,
                                 'asset_id'   => static::$ASSET_ID,
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
        $example = new UpdateAssetPrePermissions();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
