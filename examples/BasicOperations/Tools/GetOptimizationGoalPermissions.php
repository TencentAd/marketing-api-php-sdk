<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取优化目标权限(Optimization Goal Permissions)的简单示例
 */
class GetOptimizationGoalPermissions
{
    public static $tads;
    public static $ACCESS_TOKEN         = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID           = 'YOUR ACCOUNT ID';
    public static $SITE_SET             = 'SITE_SET_MOMENTS';
    public static $PROMOTED_OBJECT_TYPE = 'PROMOTED_OBJECT_TYPE_APP_IOS';

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
                'optimization_goal_permission_list', 'deep_behavior_optimization_goal_permission_list',
                'deep_worth_optimization_goal_permission_list',
            ]; // 需要返回的字段
            $response = $tads->optimizationGoalPermissions()
                             ->get([
                                 'account_id'           => static::$ACCOUNT_ID,
                                 'site_set'             => [static::$SITE_SET],
                                 'promoted_object_type' => static::$PROMOTED_OBJECT_TYPE,
                                 'fields'               => $fields,
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
        $example = new GetOptimizationGoalPermissions();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
