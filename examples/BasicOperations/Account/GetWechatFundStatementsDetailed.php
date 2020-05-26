<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取微信资金账户流水(Wechat fund statement detail)列表的简单示例
 */
class GetWechatFundStatementsDetailed
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $TRADE_TYPE   = 'ADVERTISER_CHARGE'; // 交易类型
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
                'trade_type', 'time', 'amount', 'wechat_account_id', 'wechat_account_name', 'fund_type',
                'external_bill_no', 'description', 'operator', 'bill_no', 'repayment_channel_type',
                'company_name', 'contact_name', 'contact_phone', 'status',
            ]; // 需要返回的字段
            $response = $tads->wechatFundStatementsDetailed()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'trade_type' => static::$TRADE_TYPE,
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
        $example = new GetWechatFundStatementsDetailed();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
