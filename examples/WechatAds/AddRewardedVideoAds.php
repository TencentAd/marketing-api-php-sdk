<?php
require_once __DIR__ . '/../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建一个微信推广IOS App的激励视频广告的示例
 */
class AddRewardedVideoAds
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID             = 'YOUR ACCOUNT ID';
    public static $IOS_APP_ID             = 'YOUR APP ID'; // 这里放被推广的iOS App的ID，即App Store的数字ID
    public static $ADCREATIVE_TEMPLATE_ID = 560; // 激励视频
    public static $VIDEO_PATH             = 'YOUR AD VIDEO PATH'; // 广告主视频文件路径，560规格要求：750x1334, 6-30秒, <7168K, mp4
    public static $AD_TITLE               = 'YOUR AD TEXT'; // 广告文案，560规格要求：字数：1~12
    public static $LOGO_IMAGE_PATH        = 'YOUR LOGO IMAGE PATH'; // 广告品牌LOGO图文件路径，560规格要求：300x300, <50K, png/jpg
    public static $LOGO_CORP_NAME         = 'YOUR LOGO CORP NAME'; // 广告品牌商标名称，560规格要求：字数：1~9

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
            $campaignType = 'CAMPAIGN_TYPE_NORMAL'; // 普通展示广告
            $promotedObjectType = 'PROMOTED_OBJECT_TYPE_APP_IOS'; // 推广IOS App
            $campaignId = $this->AddCampaign($tads, $campaignType, $promotedObjectType);
            // echo 'Campaign ID: ' . $campaignId . PHP_EOL;

            // 第二步，创建推广目标
            $promotedObjectId = $this->AddPromotedObject($tads, $promotedObjectType, static::$IOS_APP_ID);
            // echo 'Promoted object ID: ' . $promotedObjectId . PHP_EOL;

            // 第三步，创建广告组，激励视频不允许使用定向包，因此在广告组里创建定向
            $siteSet = ['SITE_SET_WECHAT']; // 投放微信流量
            $adgroupId = $this->AddAdgroup($tads, $campaignId, $promotedObjectType, $promotedObjectId, $siteSet);
            // echo 'Adgroup ID: ' . $adgroupId . PHP_EOL;

            // 第四步，上传素材
            $videoId = $this->AddVideo($tads, static::$VIDEO_PATH);
            // echo 'Video ID: ' . $videoId . PHP_EOL;
            $imageId = $this->AddImage($tads, static::$LOGO_IMAGE_PATH);
            // echo 'Image ID: ' . $imageId . PHP_EOL;

            // 第五步，创建创意
            $adcreativeId = $this->AddAdcreative($tads, static::$ADCREATIVE_TEMPLATE_ID, $campaignId, $promotedObjectType,
                $promotedObjectId, $siteSet, $videoId, static::$AD_TITLE, $imageId, static::$LOGO_CORP_NAME);
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
    protected function AddCampaign(TencentAds $tads, $campaignType, $promotedObjectType)
    {
        $campaignName = 'SDK sample campaign ' . uniqid();
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

    // 创建iOS App推广目标
    protected function AddPromotedObject(TencentAds $tads, $promotedObjectType, $promotedObjectId)
    {
        $promotedObjects = $tads->promotedObjects()
                                ->get([
                                    'account_id' => static::$ACCOUNT_ID,
                                    'filtering'  => [
                                        [
                                            'field'    => 'promoted_object_id',
                                            'operator' => 'EQUALS',
                                            'values'   => [$promotedObjectId],
                                        ],
                                    ],
                                ]);
        if (count($promotedObjects->getList()) > 0) {
            // 从App Store更新推广目标的信息
            $promotedObjects = $tads->promotedObjects()
                                    ->update([
                                        'account_id'           => static::$ACCOUNT_ID,
                                        'promoted_object_type' => $promotedObjectType,
                                        'promoted_object_id'   => $promotedObjectId,
                                    ]);
        } else {
            // 创建推广目标
            $promotedObjects = $tads->promotedObjects()
                                    ->add([
                                        'account_id'           => static::$ACCOUNT_ID,
                                        'promoted_object_type' => $promotedObjectType,
                                        'promoted_object_id'   => $promotedObjectId,
                                    ]);
        }

        return $promotedObjectId;
    }

    // 创建广告组
    protected function AddAdgroup(
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
        $bidAmount = 5000; // 50元（单位为分）
        $optimizationGoal = 'OPTIMIZATIONGOAL_APP_ACTIVATE'; // 优化目标APP激活
        $timeSeries = str_repeat('1', 48 * 7); // 全天投放
        $adgroupDailyBudget = 1000000; // 日预算10000元（单位为分）
        $expandEnabled = true; // 开启自动扩量
        $expandTargeting = ['age', 'geo_location', 'gender']; // 自动扩量定向范围

        $regionIds = ['310000']; // 上海，激励视频地域只能位于同一城市
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
                            'is_rewarded_video_ad' => true,
                            'expand_enabled'       => $expandEnabled,
                            'expand_targeting'     => $expandTargeting,
                        ]);
        $adgroupId = $adgroup->getAdgroupId();

        return $adgroupId;
    }

    // 上传素材
    protected function AddImage(TencentAds $tads, $imageFile)
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

    // 上传素材
    protected function AddVideo(TencentAds $tads, $videoFile)
    {
        $videoSignature = md5_file($videoFile);
        $video = $tads->videos()
                      ->add([
                          'account_id' => static::$ACCOUNT_ID,
                          'video_file' => $videoFile,
                          'signature'  => $videoSignature,
                      ]);
        $videoId = $video->getVideoId();

        return $videoId;
    }

    // 创建创意
    protected function AddAdcreative(
        TencentAds $tads,
        $adcreativeTemplateId,
        $campaignId,
        $promotedObjectType,
        $promotedObjectId,
        $siteSet,
        $videoId,
        $adTitle,
        $logoImageId,
        $logoCorpName
    ) {
        $adcreativeName = 'SDK sample adcreative ' . uniqid();
        $adcreativeElements = [
            'video'     => $videoId,
            'title'     => $adTitle,
            'corporate' => [
                'corporate_name' => $logoCorpName,
                'corporate_img'  => $logoImageId,
            ],
        ];
        $pageType = 'PAGE_TYPE_DEFAULT';

        $adcreative = $tads->adcreatives()
                           ->add([
                               'account_id'             => static::$ACCOUNT_ID,
                               'campaign_id'            => $campaignId,
                               'adcreative_name'        => $adcreativeName,
                               'adcreative_template_id' => $adcreativeTemplateId,
                               'adcreative_elements'    => $adcreativeElements,
                               'promoted_object_type'   => $promotedObjectType,
                               'page_type'              => $pageType,
                               'site_set'               => $siteSet,
                               'promoted_object_id'     => $promotedObjectId,
                           ]);
        $adcreativeId = $adcreative->getAdcreativeId();

        return $adcreativeId;
    }

    // 创建广告
    protected function AddAd(TencentAds $tads, $adgroupId, $adcreativeId)
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
        $example = new AddRewardedVideoAds();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}

