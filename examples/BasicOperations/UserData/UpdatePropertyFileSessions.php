<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个提交属性数据文件上传会话(Property file session)的简单示例
 */
class UpdatePropertyFileSessions
{
    public static $tads;
    public static $ACCESS_TOKEN    = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID      = 'YOUR ACCOUNT ID';
    public static $PROPERTY_SET_ID = 'YOUR PROPERTY SET ID'; // 属性数据源ID
    public static $SESSION_ID      = 'YOUR SESSION ID'; // 属性数据文件上传会话ID

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

            $response = $tads->propertyFileSessions()
                             ->update([
                                 'account_id'      => static::$ACCOUNT_ID,
                                 'property_set_id' => static::$PROPERTY_SET_ID,
                                 'session_id'      => static::$SESSION_ID,
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
        $example = new UpdatePropertyFileSessions();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
