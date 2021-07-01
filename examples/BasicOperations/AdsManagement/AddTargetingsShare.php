<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建定向包分享(Targetings share)的简单示例
 */
class AddTargetingsShare
{
    public static $tads;
    public static $ACCESS_TOKEN  = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID    = 'YOUR ACCOUNT ID';
    public static $TARGETING_ID  = 'YOUR TARGETING ID';
    public static $TO_ACCOUNT_ID = 'YOUR ACCOUNT ID SHARE TO'; // 分享的目标账户ID
    public static $SHARE_TYPE    = 'SHARE_TYPE_SAME_BUSINESS';

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

            $response = $tads->targetingsShare()
                             ->add([
                                 'account_id'          => static::$ACCOUNT_ID,
                                 'targeting_id'        => static::$TARGETING_ID,
                                 'share_to_account_id' => static::$TO_ACCOUNT_ID,
                                 'share_type'          => static::$SHARE_TYPE,
                             ]);
            $targetingId = $response->getTargetingId();

            return $targetingId;
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
        $example = new AddTargetingsShare();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
