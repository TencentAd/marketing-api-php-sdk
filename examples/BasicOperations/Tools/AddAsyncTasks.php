<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建异步任务(Async task)的简单示例
 */
class AddAsyncTasks
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $TASK_TYPE    = 'TASK_TYPE_AD_HOURLY_REPORT'; // 广告小时报表数据
    public static $DATE         = 'REPORT DATE'; // 报表查询日期

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

            $taskName = 'SDK异步任务' . uniqid();
            $taskSpec = [
                'task_type_ad_hourly_report_spec' => [
                    'date' => static::$DATE,
                ],
            ];

            $response = $tads->asyncTasks()
                             ->add([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'task_name'  => $taskName,
                                 'task_type'  => static::$TASK_TYPE,
                                 'task_spec'  => $taskSpec,
                             ]);

            $taskId = $response->getTaskId();

            return $taskId;
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
        $example = new AddAsyncTasks();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
