<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建推广计划(Campaign)的简单示例
 */
class AddCampaigns
{
    public static $tads;
    public static $ACCESS_TOKEN         = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID           = 'YOUR ACCOUNT ID';
    public static $CAMPAIGN_TYPE        = 'CAMPAIGN_TYPE_NORMAL'; // 普通推广计划
    public static $PROMOTED_OBJECT_TYPE = 'PROMOTED_OBJECT_TYPE_LINK'; // 推广普通外链
    public static $DAILY_BUDGET         = 5000; // 日预算50元(5000分)

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

            $response = $tads->campaigns()
                             ->add([
                                 'account_id'           => static::$ACCOUNT_ID,
                                 'campaign_name'        => $campaignName,
                                 'campaign_type'        => static::$CAMPAIGN_TYPE,
                                 'promoted_object_type' => static::$PROMOTED_OBJECT_TYPE,
                                 'daily_budget'         => static::$DAILY_BUDGET,
                             ]);
            $campaignId = $response->getCampaignId();

            return $campaignId;
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
        $example = new AddCampaigns();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
