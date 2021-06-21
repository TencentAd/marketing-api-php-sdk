<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建微信服务商子客之间转账(Wechat fund transfer)的简单示例
 */
class AddWechatFundTransfer
{
    public static $tads;
    public static $ACCESS_TOKEN  = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID    = 'YOUR ACCOUNT ID';
    public static $FUND_TYPE     = 'FUND_CASH'; // 资金账户类型
    public static $AMOUNT        = 'YOUR TRANSFER AMOUNT'; // 转账金额(分)
    public static $TRANSFER_TYPE = 'AGENCY_TO_ADVERTISER'; // 转账类型

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

            $response = $tads->wechatFundTransfer()
                             ->add([
                                 'account_id'    => static::$ACCOUNT_ID,
                                 'fund_type'     => static::$FUND_TYPE,
                                 'amount'        => static::$AMOUNT,
                                 'transfer_type' => static::$TRANSFER_TYPE,
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
        $example = new AddWechatFundTransfer();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
