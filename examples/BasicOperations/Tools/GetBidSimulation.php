<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取出价模拟信息(Bid Simulation)的简单示例
 */
class GetBidSimulation
{
    public static $tads;
    public static $ACCESS_TOKEN            = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID              = 'YOUR ACCOUNT ID';
    public static $REQ_TYPE                = 0; // 0:小时级数据;1:天级数据
    public static $OPTIMIZATION_GOAL_LEVEL = 0; // 0:浅层转化出价;1:深层转化出价
    public static $ADGROUP_ID              = 'YOUR ADGROUP ID';
    public static $BID_LIST                = [100, 200, 500, 1000, 2000, 5000, 10000];

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

            $response = $tads->bidSimulation()
                             ->get([
                                 'account_id'              => static::$ACCOUNT_ID,
                                 'req_type'                => static::$REQ_TYPE,
                                 'optimization_goal_level' => static::$OPTIMIZATION_GOAL_LEVEL,
                                 'adgroup_id'              => static::$ADGROUP_ID,
                                 'bid_list'                => static::$BID_LIST,
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
        $example = new GetBidSimulation();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
