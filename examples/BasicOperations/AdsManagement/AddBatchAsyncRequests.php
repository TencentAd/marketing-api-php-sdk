<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个批量异步任务操作(Batch async requests)的简单示例
 */
class AddBatchAsyncRequests
{
    public static $tads;
    public static $ACCESS_TOKEN   = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID     = 'YOUR ACCOUNT ID';
    public static $TASK_TYPE      = 'TASK_TYPE_UPDATE_TARGETING_ID'; // 批量修改广告定向包
    public static $ADGROUP_ID_1   = 'YOUR ADGROUP ID 1';
    public static $ADGROUP_ID_2   = 'YOUR ADGROUP ID 2';
    public static $TARGETING_ID_1 = 'YOUR TARGETING ID 1';
    public static $TARGETING_ID_2 = 'YOUR TARGETING ID 2';

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
                'update_targeting_id_spec' => [
                    [
                        'adgroup_id'   => static::$ADGROUP_ID_1,
                        'targeting_id' => static::$TARGETING_ID_1,
                    ],
                    [
                        'adgroup_id'   => static::$ADGROUP_ID_2,
                        'targeting_id' => static::$TARGETING_ID_2,
                    ],
                ],
            ];

            $response = $tads->batchAsyncRequests()
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
        $example = new AddBatchAsyncRequests();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
