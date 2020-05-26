<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建客户标签数据文件(Custom tag file)的简单示例
 */
class AddUserProperties
{
    public static $tads;
    public static $ACCESS_TOKEN             = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID               = 'YOUR ACCOUNT ID';
    public static $USER_PROPERTY_SET_ID     = 'YOUR USER PROPERTY SET ID'; // 数据源ID
    public static $WECHAT_APP_ID            = 'YOUR WECHAT APP ID'; // 微信APP ID
    public static $USER_ID                  = 'YOUR USER ID'; // 为用户分配的唯一ID
    public static $USER_WECHAT_OPENID       = 'YOUR USER WECHAT OPENID'; // 用户的微信OPENID
    public static $USER_PROPERTY_DATA_KEY   = 'YOUR DATA KEY'; // 用户数据键
    public static $USER_PROPERTY_DATA_VALUE = 'YOUR DATA VALUE'; // 用户数据值

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

            $property = [
                [
                    "outer_user_id" => static::$USER_ID,
                    "user_id"       => [
                        "wechat_openid" => static::$USER_WECHAT_OPENID,
                    ],
                    "property_data" => [
                        static::$USER_PROPERTY_DATA_KEY => static::$USER_PROPERTY_DATA_VALUE,
                    ],
                ],
            ];
            $response = $tads->userProperties()
                             ->add([
                                 'account_id'           => static::$ACCOUNT_ID,
                                 'user_property_set_id' => static::$USER_PROPERTY_SET_ID,
                                 'wechat_app_id'        => static::$WECHAT_APP_ID,
                                 'property'             => $property,

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
        $example = new AddUserProperties();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
