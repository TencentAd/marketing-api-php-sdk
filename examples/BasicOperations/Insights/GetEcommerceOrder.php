<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取订单(GetEcommerce order)列表的简单示例
 */
class GetEcommerceOrder
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
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
                'account_id', 'ecommerce_order_id', 'customized_page_name', 'commodity_package_detail', 'quantity',
                'price', 'total_price', 'ecommerce_order_time', 'ecommerce_order_status', 'user_name', 'user_phone',
                'user_province', 'user_city', 'user_area', 'user_address', 'user_ip', 'user_message',
                'destination_url', 'adgroup_id', 'adgroup_name', 'from_account_id', 'delivery_spec',
            ]; // 需要返回的字段
            $response = $tads->ecommerceOrder()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'date_range' => [
                                     'start_date' => static::$START_DATE,
                                     'end_date'   => static::$END_DATE,
                                 ],
                                 'fields'     => $fields,
                             ]);

            // 从返回里获得Order信息
            foreach ($response->getList() as $orderInfo) {
                // echo $orderInfo . PHP_EOL;
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
        $example = new GetEcommerceOrder();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
