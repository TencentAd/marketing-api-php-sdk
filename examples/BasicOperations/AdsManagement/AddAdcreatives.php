<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建广告创意(Adcreative)的简单示例
 */
class AddAdcreatives
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID             = 'YOUR ACCOUNT ID';
    public static $CAMPAIGN_ID            = 'YOUR CAMPAIGN ID';
    public static $PROMOTED_OBJECT_TYPE   = 'PROMOTED_OBJECT_TYPE_LINK'; // 推广普通外链
    public static $SITE_SET               = 'SITE_SET_QZONE'; // 投放QQ空间流量
    public static $ADCREATIVE_TEMPLATE_ID = 968; // 文字链
    public static $AD_TITLE               = 'YOUR AD TEXT'; // 广告标题，968规格要求：字数：10~14
    public static $AD_DESCRIPTION         = 'YOUR AD DESCRIPTION'; // 广告文案，968规格要求：字数：24~30
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

            $adcreativeName = 'SDK广告创意' . uniqid();
            $adcreativeElements = [
                'title'       => static::$AD_TITLE,
                'description' => static::$AD_DESCRIPTION,
            ];
            $pageSpec = [
                'page_url' => static::$PAGE_URL,
            ];

            $response = $tads->adcreatives()
                             ->add([
                                 'account_id'             => static::$ACCOUNT_ID,
                                 'campaign_id'            => static::$CAMPAIGN_ID,
                                 'adcreative_name'        => $adcreativeName,
                                 'adcreative_template_id' => static::$ADCREATIVE_TEMPLATE_ID,
                                 'adcreative_elements'    => $adcreativeElements,
                                 'promoted_object_type'   => static::$PROMOTED_OBJECT_TYPE,
                                 'page_type'              => static::$PAGE_TYPE,
                                 'site_set'               => [static::$SITE_SET],
                                 'page_spec'              => $pageSpec,
                             ]);
            $adcreativeId = $response->getAdcreativeId();

            return $adcreativeId;
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
        $example = new AddAdcreatives();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
