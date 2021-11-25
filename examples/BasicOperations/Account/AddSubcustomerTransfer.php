<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个同商务管家子客间转账(Subcustomer transfer)的简单示例
 */
class AddSubcustomerTransfer
{
    public static $tads;
    public static $ACCESS_TOKEN     = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID       = 'YOUR ACCOUNT ID';
    public static $AMOUNT           = 'YOUR TRANSFER AMOUNT'; // 转账金额(分)
    public static $TO_ACCOUNT_ID    = 'YOUR ACCOUNT ID TO'; // 子客推广账户ID
    public static $FUND_TYPE        = 'FUND_TYPE_GIFT'; // 资金账户类型
    public static $EXTERNAL_BILL_NO = 'YOUR BILL NO'; // 订单号

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

            $response = $tads->subcustomerTransfer()
                             ->add([
                                 'account_id'       => static::$ACCOUNT_ID,
                                 'amount'           => static::$AMOUNT,
                                 'to_account_id'    => static::$TO_ACCOUNT_ID,
                                 'fund_type'        => static::$FUND_TYPE,
                                 'external_bill_no' => static::$EXTERNAL_BILL_NO,
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
        $example = new AddSubcustomerTransfer();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
