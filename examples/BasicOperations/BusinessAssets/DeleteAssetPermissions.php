<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个删除资产授权(Asset permission)的简单示例
 */
class DeleteAssetPermissions
{
    public static $tads;
    public static $ACCESS_TOKEN         = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID           = 'YOUR ACCOUNT ID';
    public static $WECHAT_PAGE_ID       = 'YOUR WECHAT PAGE ID'; // 微信原生页ID
    public static $LICENSING_ACCOUNT_ID = 'YOUR LICENSING ACCOUNT ID'; // 被授权账号ID

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

            $response = $tads->assetPermissions()
                             ->delete([
                                 'account_id'                  => static::$ACCOUNT_ID,
                                 'licensing_account_id'        => static::$LICENSING_ACCOUNT_ID,
                                 'asset_type'                  => 'ASSET_TYPE_CANVAS_WECHAT',
                                 'asset_permission_grant_type' => 'ASSET_PERMISSION_GRANT_TYPE_ASSET',
                                 'asset_id'                    => static::$WECHAT_PAGE_ID,
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
        $example = new DeleteAssetPermissions();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
