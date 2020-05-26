<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个修改广告组(Adgroup)的简单示例
 */
class UpdateAdgroups
{
    public static $tads;
    public static $ACCESS_TOKEN      = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID        = 'YOUR ACCOUNT ID';
    public static $ADGROUP_ID        = 'YOUR ADGROUP ID'; // 要修改的广告组ID
    public static $BID_AMOUNT        = 300; // 出价修改为3元(300分)
    public static $BEGIN_DATE        = 'YOUR ADGROUP BEGIN DATE'; // 修改广告开始投放日期
    public static $END_DATE          = 'YOUR ADGROUP END DATE'; // 修改广告结束投放日期
    public static $CONFIGURED_STATUS = 'AD_STATUS_SUSPEND'; // 状态修改为暂停

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
                             ->update([
                                 'account_id'        => static::$ACCOUNT_ID,
                                 'adgroup_id'        => static::$ADGROUP_ID,
                                 'begin_date'        => static::$BEGIN_DATE,
                                 'end_date'          => static::$END_DATE,
                                 'bid_amount'        => static::$BID_AMOUNT,
                                 'configured_status' => static::$CONFIGURED_STATUS,
                             ]);
            $adgroupId = $response->getAdgroupId();

            return $adgroupId;
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
        $example = new UpdateAdgroups();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
