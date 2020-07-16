<?php
require_once __DIR__ . '/../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个一次性创建Campaign、Adgroup、Adcreative、Ad的示例
 */
class RapidAddAds
{
    public static $tads;
    public static $ACCESS_TOKEN         = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID           = 'YOUR ACCOUNT ID';
    public static $CAMPAIGN_TYPE        = 'CAMPAIGN_TYPE_NORMAL'; // 普通推广计划
    public static $PROMOTED_OBJECT_TYPE = 'PROMOTED_OBJECT_TYPE_LINK'; // 推广普通外链
    public static $DAILY_BUDGET         = 5000; // 日预算50元(5000分)

    public static $SITE_SET          = 'SITE_SET_QZONE'; // 投放QQ空间流量
    public static $BILLING_EVENT     = 'BILLINGEVENT_IMPRESSION'; // 按曝光扣费(CPM)
    public static $OPTIMIZATION_GOAL = 'OPTIMIZATIONGOAL_IMPRESSION'; // 广告目标优化类型：曝光
    public static $BID_AMOUNT        = 150; // 出价1.5元(150分)
    public static $BEGIN_DATE        = 'YOUR ADGROUP BEGIN DATE'; // 广告开始投放日期
    public static $END_DATE          = 'YOUR ADGROUP END DATE'; // 广告结束投放日期

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

            $campaignName = 'SDK计划' . uniqid();
            $campaignRequest = [
                'account_id'           => static::$ACCOUNT_ID,
                'campaign_name'        => $campaignName,
                'campaign_type'        => static::$CAMPAIGN_TYPE,
                'promoted_object_type' => static::$PROMOTED_OBJECT_TYPE,
                'daily_budget'         => static::$DAILY_BUDGET,
            ];

            $adgroupName = 'SDK广告组' . uniqid();
            $timeSeries = str_repeat('1', 48 * 7); // 全天投放
            $targeting = [
                'user_os' => ['IOS'], // 定向IOS用户
            ];
            $adgroupRequest = [
                'account_id'           => static::$ACCOUNT_ID,
                'adgroup_name'         => $adgroupName,
                'promoted_object_type' => static::$PROMOTED_OBJECT_TYPE,
                'begin_date'           => static::$BEGIN_DATE,
                'end_date'             => static::$END_DATE,
                'billing_event'        => static::$BILLING_EVENT,
                'bid_amount'           => static::$BID_AMOUNT,
                'optimization_goal'    => static::$OPTIMIZATION_GOAL,
                'time_series'          => $timeSeries,
                'site_set'             => [static::$SITE_SET],
                'targeting'            => $targeting,
            ];

            $adcreativeName = 'SDK广告创意' . uniqid();
            $adcreativeElements = [
                'title'       => static::$AD_TITLE,
                'description' => static::$AD_DESCRIPTION,
            ];
            $pageSpec = [
                'page_url' => static::$PAGE_URL,
            ];
            $adcreativeRequest = [
                'account_id'             => static::$ACCOUNT_ID,
                'adcreative_name'        => $adcreativeName,
                'adcreative_template_id' => static::$ADCREATIVE_TEMPLATE_ID,
                'adcreative_elements'    => $adcreativeElements,
                'promoted_object_type'   => static::$PROMOTED_OBJECT_TYPE,
                'page_type'              => static::$PAGE_TYPE,
                'site_set'               => [static::$SITE_SET],
                'page_spec'              => $pageSpec,
            ];

            $adName = 'SDK广告' . uniqid();
            $adRequest = [
                'account_id' => static::$ACCOUNT_ID,
                'ad_name'    => $adName,
            ];

            $response = $tads->rapidAddAds($campaignRequest, $adgroupRequest, $adcreativeRequest, $adRequest);

            //echo $response->getAdId();

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
        $example = new RapidAddAds();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
