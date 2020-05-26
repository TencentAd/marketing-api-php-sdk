<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取小时报表(Hourly report)列表的简单示例
 */
class GetHourlyReports
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $LEVEL        = 'REPORT_LEVEL_ADGROUP'; // 广告组级别报表
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

            $fields = [
                'hour', 'view_count', 'valid_click_count', 'ctr', 'cpc', 'cost',
            ]; // 需要返回的字段
            $response = $tads->hourlyReports()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'level'      => static::$LEVEL,
                                 'date_range' => [
                                     'start_date' => static::$DATE,
                                     'end_date'   => static::$DATE,
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
        $example = new GetHourlyReports();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
