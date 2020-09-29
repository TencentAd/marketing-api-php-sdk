<?php
require_once __DIR__ . '/../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个微信公众账号创建一个微信推广小游戏的小程序Banner广告的示例
 */
class AddMiniProgramBannerAds
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID             = 'YOUR ACCOUNT ID';
    public static $ADCREATIVE_TEMPLATE_ID = 608; // 单图规格
    public static $IMAGE_PATH             = 'YOUR AD IMAGE PATH'; // 广告主图文件路径，608规格要求：960x334, <100K, png/jpg
    public static $MINI_GAME_ID           = 'YOUR MINI GAME ID'; // 小游戏ID
    public static $MINI_GAME_PATH         = 'YOUR MINI GAME PATH'; // 小游戏内页路径

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

            // 第一步，创建推广计划
            $campaignType = 'CAMPAIGN_TYPE_NORMAL'; // 普通广告
            $promotedObjectType = 'PROMOTED_OBJECT_TYPE_MINI_GAME_WECHAT'; // 推广小游戏
            $campaignId = $this->AddCampaign($tads, $campaignType, $promotedObjectType);
            // echo 'Campaign ID: ' . $campaignId . PHP_EOL;

            // 第二步，创建广告组，不允许使用定向包，因此在广告组里创建定向
            $siteSet = ['SITE_SET_WECHAT']; // 投放微信流量
            $adgroupId = $this->AddAdgroup($tads, $campaignId, $promotedObjectType, static::$MINI_GAME_ID, $siteSet);
            // echo 'Adgroup ID: ' . $adgroupId . PHP_EOL;

            // 第三步，上传素材
            $imageId = $this->AddImage($tads, static::$IMAGE_PATH);
            // echo 'Image ID: ' . $imageId . PHP_EOL;

            // 第四步，创建创意
            $adcreativeId = $this->AddAdcreative($tads, static::$ADCREATIVE_TEMPLATE_ID, $campaignId,
                $promotedObjectType, static::$MINI_GAME_ID, $siteSet, $imageId, static::$MINI_GAME_PATH);
            // echo 'Adcreative ID: ' . $adcreativeId . PHP_EOL;

            // 第六步，创建广告
            $adId = $this->AddAd($tads, $adgroupId, $adcreativeId);

            // echo 'Ad ID: ' . $adId . PHP_EOL;

            return $adId;
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

    // 创建朋友圈推广计划
    private function AddCampaign(TencentAds $tads, $campaignType, $promotedObjectType)
    {
        $campaignName = 'SDK计划' . uniqid();
        $campaignDailyBudget = 0;  // 不限日预算

        $campaign = $tads->campaigns()
                         ->add([
                             'account_id'           => static::$ACCOUNT_ID,
                             'campaign_name'        => $campaignName,
                             'campaign_type'        => $campaignType,
                             'promoted_object_type' => $promotedObjectType,
                             'daily_budget'         => $campaignDailyBudget,
                         ]);
        $campaignId = $campaign->getCampaignId();

        return $campaignId;
    }

    // 创建广告组
    private function AddAdgroup(
        TencentAds $tads,
        $campaignId,
        $promotedObjectType,
        $promotedObjectId,
        $siteSet
    ) {
        $adgroupName = 'SDK sample adgroup ' . uniqid();
        $beginDate = date('Y-m-d', strtotime('+1 day')); // 开始投放日期
        $endDate = date('Y-m-d', strtotime('+10 day')); // 结束投放日期
        $billingEvent = 'BILLINGEVENT_IMPRESSION'; // CPM
        $bidAmount = 20000; // 200元（单位为分）
        $optimizationGoal = 'OPTIMIZATIONGOAL_APP_REGISTER'; // 优化目标APP注册
        $timeSeries = str_repeat('1', 48 * 7); // 全天投放
        $adgroupDailyBudget = 1000000; // 日预算10000元（单位为分）
        $expandEnabled = true; // 开启自动扩量
        $expandTargeting = ['age', 'geo_location', 'gender']; // 自动扩量定向范围

        $regionIds = ['310000', '110000']; // 上海，北京，朋友圈广告地域只能位于同一级别
        $targeting = [
            'age'          => [
                [ // 年龄定向，23~45岁
                  'min' => 23,
                  'max' => 45,
                ],
            ],
            'gender'       => ['MALE'], // 性别定向，男性
            'geo_location' => [ // 地域定向
                                'location_types' => ['LIVE_IN'],
                                'regions'        => $regionIds,
            ],
            'user_os'      => ['IOS'], // 操作系统定向
        ];

        $adgroup = $tads->adgroups()
                        ->add([
                            'account_id'           => static::$ACCOUNT_ID,
                            'campaign_id'          => $campaignId,
                            'adgroup_name'         => $adgroupName,
                            'promoted_object_type' => $promotedObjectType,
                            'begin_date'           => $beginDate,
                            'end_date'             => $endDate,
                            'billing_event'        => $billingEvent,
                            'bid_amount'           => $bidAmount,
                            'optimization_goal'    => $optimizationGoal,
                            'time_series'          => $timeSeries,
                            'site_set'             => $siteSet,
                            'daily_budget'         => $adgroupDailyBudget,
                            'promoted_object_id'   => $promotedObjectId,
                            'targeting'            => $targeting,
                            'expand_enabled'       => $expandEnabled,
                            'expand_targeting'     => $expandTargeting,
                        ]);
        $adgroupId = $adgroup->getAdgroupId();

        return $adgroupId;
    }

    // 上传素材
    private function AddImage(TencentAds $tads, $imageFile)
    {
        $imageSignature = md5_file($imageFile);
        $uploadType = 'UPLOAD_TYPE_FILE';
        $image = $tads->images()
                      ->add([
                          'account_id'  => static::$ACCOUNT_ID,
                          'upload_type' => $uploadType,
                          'file'        => $imageFile,
                          'signature'   => $imageSignature,
                      ]);
        $imageId = $image->getImageId();

        return $imageId;
    }

    // 创建创意
    private function AddAdcreative(
        TencentAds $tads,
        $adcreativeTemplateId,
        $campaignId,
        $promotedObjectType,
        $promotedObjectId,
        $siteSet,
        $imageId,
        $miniProgramPath
    ) {
        $adcreativeName = 'SDK sample adcreative ' . uniqid();
        $adcreativeElements = [
            'image_list' => [intval($imageId)],
        ];
        $pageType = 'PAGE_TYPE_MINI_GAME_WECHAT';
        $pageSpec = [
            'mini_program_spec' => [
                'mini_program_id'   => $promotedObjectId,
                'mini_program_path' => $miniProgramPath,
            ],
        ];

        $adcreative = $tads->adcreatives()
                           ->add([
                               'account_id'             => static::$ACCOUNT_ID,
                               'campaign_id'            => $campaignId,
                               'adcreative_name'        => $adcreativeName,
                               'adcreative_template_id' => $adcreativeTemplateId,
                               'adcreative_elements'    => $adcreativeElements,
                               'promoted_object_type'   => $promotedObjectType,
                               'page_type'              => $pageType,
                               'page_spec'              => $pageSpec,
                               'site_set'               => $siteSet,
                               'promoted_object_id'     => $promotedObjectId,
                           ]);
        $adcreativeId = $adcreative->getAdcreativeId();

        return $adcreativeId;
    }

    // 创建广告
    private function AddAd(TencentAds $tads, $adgroupId, $adcreativeId)
    {
        $adName = 'SDK sample ad ' . uniqid();

        $ad = $tads->ads()
                   ->add([
                       'account_id'    => static::$ACCOUNT_ID,
                       'adgroup_id'    => $adgroupId,
                       'adcreative_id' => $adcreativeId,
                       'ad_name'       => $adName,
                   ]);
        $adId = $ad->getAdId();

        return $adId;
    }
}

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    try {
        $example = new AddMiniProgramBannerAds();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
