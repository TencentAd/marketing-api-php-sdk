<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个修改广告组出价的简单示例
 */
class UpdateBidAmountAdgroups
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $ADGROUP_ID   = 'YOUR ADGROUP ID';
    public static $BID_AMOUNT   = 200; //出价修改为2元

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

            $response = $tads->adgroups()
                             ->updateBidAmount([
                                 'account_id'             => static::$ACCOUNT_ID,
                                 'update_bid_amount_spec' => [
                                     [
                                         'adgroup_id' => static::$ADGROUP_ID,
                                         'bid_amount' => static::$BID_AMOUNT,
                                     ],
                                 ],
                             ]);
            $responses = $response->getList();

            return $responses;
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
        $example = new UpdateBidAmountAdgroups();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
