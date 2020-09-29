<?php
require_once __DIR__ . '/../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建一个微信推广IOS App的朋友圈单图广告的示例
 */
class AddWechatMomentAds
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID             = 'YOUR ACCOUNT ID';
    public static $IOS_APP_ID             = 'YOUR APP ID'; // 这里放被推广的iOS App的ID，即App Store的数字ID
    public static $ADCREATIVE_TEMPLATE_ID = 310; // 单图规格
    public static $PROMOTED_OBJECT_TYPE   = 'PROMOTED_OBJECT_TYPE_APP_IOS'; // 推广IOS App
    public static $IMAGE_PATH             = 'YOUR AD IMAGE PATH'; // 广告主图文件路径，310规格要求：640x800, <300K, png/jpg
    public static $IMAGE_PROFILE_PATH     = 'YOUR AD IMAGE PATH'; // 如果未创建Profile的，提供Profile图片文件路径，200x200, <300K, png/jpg
    public static $PROFILE_ID             = ''; // 如果已经创建Profile的，可提供Profile ID
    public static $AD_TITLE               = 'YOUR AD TEXT'; // 广告文案，310规格要求：字数：1~40
    public static $PAGE_TYPE              = 'PAGE_TYPE_MOMENTS_SIMPLE_NATIVE_WECHAT'; // 外层落地页：简版原生页
    public static $WEBVIEW_URL            = 'YOUR WEBVIEW URL'; // 简版原生页内嵌页链接
    public static $LINK_PAGE_TYPE         = 'LINK_PAGE_TYPE_DEFAULT'; // 行动按钮跳转落地页：ios应用下载页
    public static $LINK_NAME_TYPE         = 'DOWNLOAD_APP'; // 行动按钮：下载应用

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
            $campaignType = 'CAMPAIGN_TYPE_NORMAL';
            $promotedObjectType = static::$PROMOTED_OBJECT_TYPE;
            $campaignId = $this->AddCampaign($tads, $campaignType, $promotedObjectType);
            // echo 'Campaign ID: ' . $campaignId . PHP_EOL;

            // 第二步，创建推广目标
            $promotedObjectId = $this->AddPromotedObject($tads, $promotedObjectType, static::$IOS_APP_ID);
            // echo 'Promoted object ID: ' . $promotedObjectId . PHP_EOL;

            // 第三步，创建广告组，不允许使用定向包，因此在广告组里创建定向
            $siteSet = ['SITE_SET_MOMENTS']; // 投放朋友圈流量
            $adgroupId = $this->AddAdgroup($tads, $campaignId, $promotedObjectType, $promotedObjectId, $siteSet);
            // echo 'Adgroup ID: ' . $adgroupId . PHP_EOL;

            // 第四步，上传素材
            $imageId = $this->AddImage($tads, static::$IMAGE_PATH);
            // echo 'Image ID: ' . $imageId . PHP_EOL;
            if (empty(static::$PROFILE_ID)) {
                $imageIdLeads = $this->AddImage($tads, static::$IMAGE_PROFILE_PATH);
                // echo 'Image ID: ' . $imageIdLeads . PHP_EOL;
                $profileId = $this->AddProfile($tads, $promotedObjectType, $imageIdLeads);
                // echo 'Profile ID: ' . $profileId . PHP_EOL;
            } else {
                $profileId = static::$PROFILE_ID;
            }

            // 第五步，创建创意
            $adcreativeId = $this->AddAdcreative($tads, static::$ADCREATIVE_TEMPLATE_ID, $campaignId,
                $promotedObjectType, $promotedObjectId, $siteSet, $imageId, static::$AD_TITLE, $profileId);
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

    // 创建iOS App推广目标
    private function AddPromotedObject(TencentAds $tads, $promotedObjectType, $promotedObjectId)
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
        $bidMode = 'BID_MODE_OCPM'; // CPM
        $bidStrategy = 'BID_STRATEGY_AVERAGE_COST'; // 稳定拿量
        $bidAmount = 20000; // 200元（单位为分）
        $optimizationGoal = 'OPTIMIZATIONGOAL_APP_ACTIVATE'; // 优化目标APP激活
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
                            'bid_mode'             => $bidMode,
                            'bid_strategy'         => $bidStrategy,
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

    // 创建profile
    protected function AddProfile(TencentAds $tads, $promotedObjectType, $imageId)
    {
        $profile = $tads->profiles()
                        ->add([
                            'account_id'           => static::$ACCOUNT_ID,
                            'profile_name'         => 'SDK用例' . uniqid(),
                            'profile_type'         => 'PROFILE_TYPE_DEFINITION',
                            'promoted_object_type' => $promotedObjectType,
                            'head_image_id'        => $imageId,
                            'description'          => 'SDK sample',
                        ]);

        return $profile->getProfileId();
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
        $adTitle,
        $profileId
    ) {
        $adcreativeName = 'SDK sample adcreative ' . uniqid();
        $adcreativeElements = [
            'image_list' => [$imageId],
            'title'      => $adTitle,
        ];
        $shareContentSpec = [
            'share_title'       => '分享',
            'share_description' => '分享详情',
        ];

        $adcreative = $tads->adcreatives()
                           ->add([
                               'account_id'             => static::$ACCOUNT_ID,
                               'campaign_id'            => $campaignId,
                               'adcreative_name'        => $adcreativeName,
                               'adcreative_template_id' => $adcreativeTemplateId,
                               'adcreative_elements'    => $adcreativeElements,
                               'promoted_object_type'   => $promotedObjectType,
                               'page_type'              => static::$PAGE_TYPE,
                               //'page_spec'              => [],
                               'site_set'               => $siteSet,
                               'promoted_object_id'     => $promotedObjectId,
                               'link_page_type'         => static::$LINK_PAGE_TYPE,
                               'link_name_type'         => static::$LINK_NAME_TYPE,
                               //'link_page_spec'         => [],
                               'profile_id'             => $profileId,
                               'webview_url'            => static::$WEBVIEW_URL,
                               'share_content_spec'     => $shareContentSpec,
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
        $example = new AddWechatMomentAds();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
