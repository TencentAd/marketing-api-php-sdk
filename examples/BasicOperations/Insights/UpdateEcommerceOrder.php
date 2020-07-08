<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个更新订单(GetEcommerce order)的简单示例
 */
class UpdateEcommerceOrder
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $ORDER_ID     = 'YOUR ORDER ID'; // 订单ID
    public static $EXPRESS      = 'SF_EXPRESS'; // 快递公司
    public static $TRACKING_NO  = 'YOUR TRACKING NO'; // 快递单号

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

            $response = $tads->ecommerceOrder()
                             ->update([
                                 'account_id'               => static::$ACCOUNT_ID,
                                 'ecommerce_order_id'       => static::$ORDER_ID,
                                 'delivery_tracking_number' => static::$TRACKING_NO,
                                 'express_company'          => static::$EXPRESS,
                             ]);

            return true;
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
        $example = new UpdateEcommerceOrder();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
