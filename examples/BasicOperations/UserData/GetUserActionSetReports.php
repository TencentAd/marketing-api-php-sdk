<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取用户行为数据源报表(User action set report)列表的简单示例
 */
class GetUserActionSetReports
{
    public static $tads;
    public static $ACCESS_TOKEN       = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID         = 'YOUR ACCOUNT ID';
    public static $USER_ACTION_SET_ID = 'YOUR USER ACTION SET ID'; // 数据源ID
    public static $START_DATE         = 'REPORT START DATE'; // 报表开始日期
    public static $END_DATE           = 'REPORT END DATE'; // 报表结束日期
    public static $TIME_GRANULARITY   = 'DAILY'; // 按日

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
                "date", "action_type", "custom_action", "raw_action_count", "identified_action_count",
                "identified_user_count",
            ]; // 需要返回的字段
            $response = $tads->userActionSetReports()
                             ->get([
                                 'account_id'         => static::$ACCOUNT_ID,
                                 'user_action_set_id' => static::$USER_ACTION_SET_ID,
                                 'date_range'         => [
                                     'start_date' => static::$START_DATE,
                                     'end_date'   => static::$END_DATE,
                                 ],
                                 'time_granularity'   => static::$TIME_GRANULARITY,
                                 'fields'             => $fields,
                             ]);

            // 从返回里获得Report信息
            foreach ($response->getList() as $report) {
                // echo $report . PHP_EOL;
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
        $example = new GetUserActionSetReports();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
