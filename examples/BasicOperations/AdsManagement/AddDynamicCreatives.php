<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建动态创意(Dynamic creative)的简单示例
 */
class AddDynamicCreatives
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID             = 'YOUR ACCOUNT ID';
    public static $CAMPAIGN_TYPE          = 'CAMPAIGN_TYPE_NORMAL'; // 普通推广计划
    public static $PROMOTED_OBJECT_TYPE   = 'PROMOTED_OBJECT_TYPE_LINK'; // 推广普通外链
    public static $SITE_SET               = 'SITE_SET_MOBILE_INNER'; // 投放移动站点流量
    public static $ADCREATIVE_TEMPLATE_ID = 717; // 方形小图
    public static $AD_IMAGE_ID            = 'YOUR AD IMAGE'; // 广告图片，717规格要求：147x147, <30K, png/jpg
    public static $AD_TITLE_1             = 'YOUR AD TEXT 1'; // 广告标题，717规格要求：字数：1~10
    public static $AD_TITLE_2             = 'YOUR AD TEXT 2'; // 广告标题，717规格要求：字数：1~10
    public static $AD_DESCRIPTION         = 'YOUR AD DESCRIPTION'; // 广告文案，717规格要求：字数：1~18
    public static $PAGE_TYPE              = 'PAGE_TYPE_DEFAULT'; // 默认落地页类型
    public static $PAGE_URL               = 'YOUR AD PAGE URL'; // 广告落地页地址

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

            $dynamicCreativeName = 'SDK动态创意' . uniqid();
            $dynamicCreativeElements = [
                'image_options'       => [static::$AD_IMAGE_ID],
                'title_options'       => [static::$AD_TITLE_1, static::$AD_TITLE_2],
                'description_options' => [static::$AD_DESCRIPTION],
            ];
            $pageSpec = [
                'page_url' => static::$PAGE_URL,
            ];

            $response = $tads->dynamicCreatives()
                             ->add([
                                 'account_id'                   => static::$ACCOUNT_ID,
                                 'dynamic_creative_name'        => $dynamicCreativeName,
                                 'dynamic_creative_template_id' => static::$ADCREATIVE_TEMPLATE_ID,
                                 'dynamic_creative_elements'    => $dynamicCreativeElements,
                                 'campaign_type'                => static::$CAMPAIGN_TYPE,
                                 'promoted_object_type'         => static::$PROMOTED_OBJECT_TYPE,
                                 'page_type'                    => static::$PAGE_TYPE,
                                 'site_set'                     => [static::$SITE_SET],
                                 'page_spec'                    => $pageSpec,
                             ]);
            $dynamicCreativeId = $response->getDynamicCreativeId();

            return $dynamicCreativeId;
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
        $example = new AddDynamicCreatives();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
