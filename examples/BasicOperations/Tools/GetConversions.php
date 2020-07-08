<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取转换归因(Conversion)列表的简单示例
 */
class GetConversions
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';

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
                'conversion_id', 'conversion_name', 'access_type', 'claim_type', 'feedback_url', 'self_attributed',
                'optimization_goal', 'deep_behavior_optimization_goal', 'deep_worth_optimization_goal',
                'user_action_set_id', 'site_set_enable', 'is_deleted', 'access_status',
            ]; // 需要返回的字段
            $response = $tads->conversions()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'fields'     => $fields,
                             ]);

            // 从返回里获得Async task信息
            foreach ($response->getList() as $conversionInfo) {
                // echo $conversionInfo . PHP_EOL;
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
        $example = new GetConversions();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
