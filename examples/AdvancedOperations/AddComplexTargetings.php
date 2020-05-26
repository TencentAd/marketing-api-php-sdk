<?php
require_once __DIR__ . '/../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建定向的示例
 */
class AddComplexTargetings
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    // 本示例会提供创建两个定向人群包，其中一个是包含的人群包，另一个是排除的人群包
    public static $AUDIENCE_FILE_POS_IMEI = 'YOUR AUDIENCE FILE PATH';
    public static $AUDIENCE_FILE_NEG_IMEI = 'YOUR AUDIENCE FILE PATH';

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

            // 第一步，获取地域ID，用于地域定向，微信朋友圈广告必须
            $regionNames = ['北京市', '上海市', '广东省'];
            $regions = $this->getTargetingRegion($tads, $regionNames);
            // echo 'Region IDs: ' . implode(', ', $regions) . PHP_EOL;

            // 第二步，创建人群包，可选，可创建定向用户群和排除用户群
            $positiveAudienceId = $this->addCustomAudience($tads, static::$AUDIENCE_FILE_POS_IMEI);
            $negativeAudienceId = $this->addCustomAudience($tads, static::$AUDIENCE_FILE_NEG_IMEI);
            // echo 'Audience IDs: ' . $positiveAudienceId . ', -' . $negativeAudienceId . PHP_EOL;

            // 第三步，创建定向包
            $targetingId = $this->addTargeting($tads, $regions, [$positiveAudienceId], [$negativeAudienceId]);
            // echo 'Targeting ID: ' . $targetingId . PHP_EOL;

            return $targetingId;
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

    // 从区域名称得到区域定向ID
    protected function getTargetingRegion(TencentAds $tads, $regionNameList)
    {
        $targetingTags = $tads->targetingTags()
                              ->get([
                                  'type' => 'REGION',
                              ]);
        $regions = [];
        foreach ($targetingTags->getList() as $region) {
            if (in_array($region->getName(), $regionNameList)) {
                // 名称匹配一致
                $regions [] = $region->getId();
            }
        }

        return $regions;
    }

    // 从IMEI文件上传一个新的人群包
    protected function addCustomAudience(TencentAds $tads, $audienceFilePath)
    {
        $audienceName = 'SDK sample aud ' . uniqid();
        $audienceDescription = 'created by SDK samples';
        $audience = $tads->customAudiences()
                         ->add([
                             'account_id'  => static::$ACCOUNT_ID,
                             "name"        => $audienceName,
                             "type"        => "CUSTOMER_FILE",
                             "description" => $audienceDescription,
                         ]);
        $audienceId = $audience->getAudienceId();
        $audienceFile = $tads->customAudienceFiles()
                             ->add([
                                 'account_id'   => static::$ACCOUNT_ID,
                                 'audience_id'  => $audienceId,
                                 'user_id_type' => "IMEI",
                                 'file'         => $audienceFilePath,
                             ]); // 往人群包里上传
        $audienceFileId = $audienceFile->getCustomAudienceFileId();

        return $audienceId;
    }

    // 创建一个定向包
    protected function addTargeting(TencentAds $tads, $regions, $positionAudiences = [], $negativeAudiences = [])
    {
        $targetingName = 'SDK sample targeting ' . uniqid();
        $targetingDescription = 'created by SDK samples';

        $targetingDetail = [
            'age'                      => [
                [ // 年龄定向，23~45岁
                  'min' => 23,
                  'max' => 45,
                ],
            ],
            'gender'                   => ['MALE'], // 性别定向，男性
            'geo_location'             => [ // 地域定向
                                            'location_types' => ['LIVE_IN'],
                                            'regions'        => $regions,
            ],
            'user_os'                  => ['IOS'], // 操作系统定向
            'custom_audience'          => $positionAudiences, // 定向人群
            'excluded_custom_audience' => $negativeAudiences, // 排除的定向人群
        ];
        $targeting = $tads->targetings()
                          ->add([
                              'account_id'     => static::$ACCOUNT_ID,
                              'targeting_name' => $targetingName,
                              'targeting'      => $targetingDetail,
                              'description'    => $targetingDescription,
                          ]);
        $targetingId = $targeting->getTargetingId();

        return $targetingId;
    }
}

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    try {
        $example = new AddTargetings();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
