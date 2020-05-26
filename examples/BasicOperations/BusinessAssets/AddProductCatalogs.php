<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建商品库(Product catalog)的简单示例
 */
class AddProductCatalogs
{
    public static $tads;
    public static $ACCESS_TOKEN       = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID         = 'YOUR ACCOUNT ID';
    public static $CATALOG_SCALE_TYPE = 'CATALOG_SCALE_TYPE_NORMAL'; // 商品库规模
    public static $CATALOG_TYPE       = 'CATALOG_TYPE_STANDARD'; // 商品库类型
    public static $INDUSTRY_TYPE      = 'INDUSTRY_TYPE_ECOMMERCE'; // 商品库行业类型

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

            $catalogName = 'SDK商品库' . uniqid();

            $response = $tads->productCatalogs()
                             ->add([
                                 'account_id'         => static::$ACCOUNT_ID,
                                 'catalog_name'       => $catalogName,
                                 'industry_type'      => static::$INDUSTRY_TYPE,
                                 'catalog_scale_type' => static::$CATALOG_SCALE_TYPE,
                                 'catalog_type'       => static::$CATALOG_TYPE,
                             ]);
            $catalogId = $response->getProductCatalogId();

            return $catalogId;
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
        $example = new AddProductCatalogs();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
