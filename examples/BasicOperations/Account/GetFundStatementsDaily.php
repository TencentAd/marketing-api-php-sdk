<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取资金账户明细(Fund statement)列表的简单示例
 */
class GetFundStatementsDaily
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $FUND_TYPE    = 'FUND_TYPE_GIFT'; // 资金账户类型
    public static $START_DATE   = 'REPORT START DATE'; // 报表开始日期
    public static $END_DATE     = 'REPORT END DATE'; // 报表结束日期

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
                'fund_type', 'trade_type', 'time', 'amount', 'description',
            ]; // 需要返回的字段
            $response = $tads->fundStatementsDaily()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'fund_type'  => static::$FUND_TYPE,
                                 'date_range' => [
                                     'start_date' => static::$START_DATE,
                                     'end_date'   => static::$END_DATE,
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
        $example = new GetFundStatementsDaily();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
