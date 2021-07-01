<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建服务商(Agency)内部划账(Inner transfer)的简单示例
 */
class AddAgencyInnerTransfer
{
    public static $tads;
    public static $ACCESS_TOKEN     = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID       = 'YOUR ACCOUNT ID';
    public static $FUND_TYPE_FROM   = 'FUND_TYPE_GIFT'; // 转出资金账户类型
    public static $FUND_TYPE_TO     = 'FUND_TYPE_SHARED'; // 转入资金账户号类型
    public static $AMOUNT           = 'YOUR TRANSFER AMOUNT'; // 转账金额(分)
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

            $response = $tads->agencyInnerTransfer()
                             ->add([
                                 'account_id'       => static::$ACCOUNT_ID,
                                 'fund_type_from'   => static::$FUND_TYPE_FROM,
                                 'fund_type_to'     => static::$FUND_TYPE_TO,
                                 'amount'           => static::$AMOUNT,
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
        $example = new AddAgencyInnerTransfer();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
