<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取微信广告关注信息(Wechat ad follower)列表的简单示例
 */
class GetWechatAdFollowers
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $START_TIME   = 'REPORT START TIMESTAMP'; // 报表开始时间戳
    public static $END_TIME     = 'REPORT END TIMESTAMP'; // 报表结束时间戳

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
                'openid', 'wechat_adgroup_id', 'wechat_campaign_id', 'wechat_account_id', 'wechat_agency_id',
                'subscribe_time', 'position_type',
            ]; // 需要返回的字段
            $response = $tads->wechatAdFollowers()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'time_range' => [
                                     'start_time' => static::$START_TIME,
                                     'end_time'   => static::$END_TIME,
                                 ],
                                 'fields'     => $fields,
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
        $example = new GetWechatAdFollowers();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
