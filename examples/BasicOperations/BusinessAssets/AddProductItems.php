<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建商品(Product item)的简单示例
 */
class AddProductItems
{
    public static $tads;
    public static $ACCESS_TOKEN       = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID         = 'YOUR ACCOUNT ID';
    public static $PRODUCT_CATALOG_ID = 'YOUR PRODUCT CATALOG ID'; // 商品库ID
    public static $PRODUCT_ID         = 'YOUR PRODUCT ID'; // 商品ID(自有ID)
    public static $PRODUCT_NAME       = 'YOUR PRODUCT NAME'; // 商品名称
    public static $PRODUCT_IMAGE_URL  = 'YOUR PRODUCT IMAGE URL'; // 商品主图
    public static $PRODUCT_STOCK      = 10; // 商品库存

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

            $productItem = [
                'product_outer_id' => static::$PRODUCT_ID,
                'product_name'     => static::$PRODUCT_NAME,
                'expiration_time'  => date('Y-m-d H:i:s', strtotime('+ 1 year')),
                'stock_volume'     => static::$PRODUCT_STOCK,
                'image_url'        => static::$PRODUCT_IMAGE_URL,
                'description'      => 'SDK sample',
            ];

            $response = $tads->productItems()
                             ->add([
                                 'account_id'             => static::$ACCOUNT_ID,
                                 'product_catalog_id'     => static::$PRODUCT_CATALOG_ID,
                                 'product_item_spec_list' => [
                                     $productItem,
                                 ],
                             ]);
            $productList = $response->getList();

            return $productList;
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
        $example = new AddProductItems();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
