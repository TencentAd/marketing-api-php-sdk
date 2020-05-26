<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取动态商品模板信息(Dynamic ad template)列表的简单示例
 */
class GetDynamicAdTemplates
{
    public static $tads;
    public static $ACCESS_TOKEN               = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID                 = 'YOUR ACCOUNT ID';
    public static $PRODUCT_CATALOG_ID         = 'YOUR PRODUCT CATALOG ID'; // 商品库ID
    public static $DYNAMIC_TEMPLATE_TYPE      = 'DYNAMIC_AD_IMAGE_TEMPLATE'; // 动态商品模板类型
    public static $DYNAMIC_TEMPLATE_OWNERSHIP = 'PRIVATE_TEMPLATE'; // 动态商品模板所属类型
    public static $DYNAMIC_TEMPLATE_WIDTH     = 1280; // 动态商品模板宽度
    public static $DYNAMIC_TEMPLATE_HEIGHT    = 720; // 动态商品模板高度

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
                'dynamic_ad_template_id', 'dynamic_ad_template_name', 'dynamic_ad_template_type',
                'product_item_display_quantity', 'dynamic_ad_template_width',
                'dynamic_ad_template_height', 'image_url', 'video_url',
            ]; // 需要返回的字段
            $response = $tads->dynamicAdTemplates()
                             ->get([
                                 'account_id'                         => static::$ACCOUNT_ID,
                                 'product_catalog_id'                 => static::$PRODUCT_CATALOG_ID,
                                 'dynamic_ad_template_type'           => static::$DYNAMIC_TEMPLATE_TYPE,
                                 'dynamic_ad_template_ownership_type' => static::$DYNAMIC_TEMPLATE_OWNERSHIP,
                                 'dynamic_ad_template_width'          => static::$DYNAMIC_TEMPLATE_WIDTH,
                                 'dynamic_ad_template_height'         => static::$DYNAMIC_TEMPLATE_HEIGHT,
                                 'fields'                             => $fields,
                             ]);

            // 从返回里获得Dynamic ad template信息
            foreach ($response->getList() as $templateInfo) {
                // echo $templateInfo . PHP_EOL;
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
        $example = new GetDynamicAdTemplates();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
