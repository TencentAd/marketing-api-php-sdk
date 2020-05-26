<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建用户行为数据(User action)的简单示例
 */
class AddUserActions
{
    public static $tads;
    public static $ACCESS_TOKEN       = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID         = 'YOUR ACCOUNT ID';
    public static $USER_ACTION_SET_ID = 'YOUR USER ACTION SET ID'; // 数据源ID
    public static $USER_HASH_IMEI     = 'YOUR USER IMEI'; // 用户IMEI
    public static $USER_ACTION_TYPE   = 'CUSTOM'; // 自定义行为
    public static $USER_CUSTOM_ACTION = 'YOUR CUSTOM ACTION TYPE'; // 自定义行为类型

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

            $actions = [
                [
                    'action_time'   => time(),
                    'user_id'       => [
                        'hash_imei' => static::$USER_HASH_IMEI,
                    ],
                    'action_type'   => static::$USER_ACTION_TYPE,
                    'custom_action' => static::$USER_CUSTOM_ACTION,
                ],
            ];
            $response = $tads->userActions()
                             ->add([
                                 'account_id'         => static::$ACCOUNT_ID,
                                 'user_action_set_id' => static::$USER_ACTION_SET_ID,
                                 'actions'            => $actions,

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
        $example = new AddUserActions();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
