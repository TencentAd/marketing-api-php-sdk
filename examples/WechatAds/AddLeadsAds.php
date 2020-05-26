<?php

require_once __DIR__ . '/../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建一个朋友圈线索收集广告的示例
 */
class AddLeadsAds
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID             = 'YOUR ACCOUNT ID';
    public static $ADCREATIVE_TEMPLATE_ID = 450; // 朋友圈单图文
    public static $IMAGE_PATH             = 'YOUR AD IMAGE PATH'; // 图片文件路径，450规格要求：800x450, <300K, png/jpg
    public static $IMAGE_PROFILE_PATH     = 'YOUR AD IMAGE PATH'; // Profile图片文件路径，200x200, <300K, png/jpg
    public static $AD_TITLE               = 'YOUR AD TEXT'; // 广告标题，450规格要求：字数：1~10
    public static $AD_DESCRIPTION         = 'YOUR AD DESCRIPTION'; // 广告文案，450规格要求：字数：1~30
    public static $AD_URL                 = 'YOUR AD PAGE URL'; // H5外链地址

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
            $promotedObjectType = 'PROMOTED_OBJECT_TYPE_LEAD_AD'; // 线索收集
            $campaignId = $this->AddCampaign($tads, $campaignType, $promotedObjectType);
            // echo 'Campaign ID: ' . $campaignId . PHP_EOL;

            // 第二步，创建广告组，不允许使用定向包，因此在广告组里创建定向
            $siteSet = ['SITE_SET_MOMENTS']; // 投放微信流量
            $adgroupId = $this->AddAdgroup($tads, $campaignId, $promotedObjectType, $siteSet);
            // echo 'Adgroup ID: ' . $adgroupId . PHP_EOL;

            // 第三步，上传素材
            $imageId = $this->AddImage($tads, static::$IMAGE_PATH);
            // echo 'Image ID: ' . implode(', ', $imageIdList) . PHP_EOL;
            $imageIdLeads = $this->AddImage($tads, static::$IMAGE_PROFILE_PATH);
            // echo 'Image ID: ' . $imageIdLeads . PHP_EOL;
            $profileId = $this->AddProfile($tads, $promotedObjectType, $imageIdLeads);
            // echo 'Profile ID: ' . $profileId . PHP_EOL;

            // 第四步，创建创意
            $adcreativeId = $this->AddAdcreative($tads, static::$ADCREATIVE_TEMPLATE_ID, $campaignId,
                $promotedObjectType, $siteSet, $imageId, static::$AD_TITLE, static::$AD_DESCRIPTION,
                static::$AD_URL, $profileId);
            // echo 'Adcreative ID: ' . $adcreativeId . PHP_EOL;

            // 第五步，创建广告
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

    // 创建广告组
    protected function AddAdgroup(
        TencentAds $tads,
        $campaignId,
        $promotedObjectType,
        $siteSet
    ) {
        $adgroupName = 'SDK sample adgroup ' . uniqid();
        $beginDate = date('Y-m-d', strtotime('+1 day')); // 开始投放日期
        $endDate = date('Y-m-d', strtotime('+10 day')); // 结束投放日期
        $billingEvent = 'BILLINGEVENT_IMPRESSION'; // CPM
        $bidAmount = 5000; // 50元（单位为分）
        $optimizationGoal = 'OPTIMIZATIONGOAL_IMPRESSION'; // 优化目标展示
        $timeSeries = str_repeat('1', 48 * 7); // 全天投放
        $adgroupDailyBudget = 1000000; // 日预算10000元（单位为分）

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
                                'regions'        => ['110000'], // 北京
            ],
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
                            'targeting'            => $targeting,
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

    // 创建微信原生页
    protected function AddWechatPage(TencentAds $tads, $pageTemplateId, $imageIdList, $text)
    {
        $pageName = 'SDK sample wechat page ' . uniqid();

        $pageElementsSpecList = [
            [
                'element_type' => 'CAROUSEL',
                'image_spec'   => [
                    'image_id_list' => $imageIdList,
                ],
            ],
            [
                'element_type' => 'BUTTON',
                'button_spec'  => [
                    'url'   => 'http://e.qq.com',
                    'title' => $text,
                ],
            ],
        ];
        $shareContentSpec = [
            'share_title'       => '分享标题',
            'share_description' => '分享内容',
        ];

        $page = $tads->wechatPages()
                     ->add([
                         'account_id'              => static::$ACCOUNT_ID,
                         'page_name'               => $pageName,
                         'page_template_id'        => $pageTemplateId,
                         'page_elements_spec_list' => $pageElementsSpecList,
                         'share_content_spec'      => $shareContentSpec,
                     ]);

        return $page->getPageId();
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
    protected function AddAdcreative(
        TencentAds $tads,
        $adcreativeTemplateId,
        $campaignId,
        $promotedObjectType,
        $siteSet,
        $imageId,
        $adTitle,
        $adDescription,
        $adUrl,
        $profileId
    ) {
        $adcreativeName = 'SDK sample adcreative ' . uniqid();
        $adcreativeElements = [
            'image_list'  => [$imageId],
            'title'       => $adTitle,
            'description' => $adDescription,
        ];
        $pageType = 'PAGE_TYPE_DEFAULT';
        $pageSpec = [
            'page_url' => $adUrl,
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
                               'profile_id'             => $profileId,
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
        $example = new AddLeadsAds();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
