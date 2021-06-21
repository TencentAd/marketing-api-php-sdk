<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建附近推广告(Local)的简单示例
 */
class AddLocal
{
    public static $tads;
    public static $ACCESS_TOKEN      = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID        = 'YOUR ACCOUNT ID';
    public static $BEGIN_DATE        = 'YOUR ADGROUP BEGIN DATE'; // 广告开始投放日期
    public static $END_DATE          = 'YOUR ADGROUP END DATE'; // 广告结束投放日期
    public static $OPTIMIZATION_GOAL = 'OPTIMIZATIONGOAL_CLICK'; // 广告目标优化类型：点击
    public static $POI               = 'YOUR POI'; // 腾讯地图位置
    public static $AD_DESCRIPTION    = 'YOUR AD DESCRIPTION'; // 广告文案
    public static $PAGE_TYPE         = 'PAGE_TYPE_MINI_PROGRAM_WECHAT'; // 落地页类型
    public static $MINI_PROGRAM_ID   = 'YOUR MINI PROGRAM ID'; // 小程序原始ID
    public static $MINI_PROGRAM_PATH = 'YOUR MINI PROGRAM PATH'; // 小程序路径

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

            $campaignName = '附近推计划' . uniqid();
            $adgroupName = '附近推广告组' . uniqid();
            $adcreativeName = '附近推广告创意' . uniqid();

            $response = $tads->local()
                             ->add([
                                 'campaign'   => [
                                     'account_id'    => static::$ACCOUNT_ID,
                                     'campaign_name' => $campaignName,
                                 ],
                                 'adgroup'    => [
                                     'adgroup_name'      => $adgroupName,
                                     'begin_date'        => static::$BEGIN_DATE,
                                     'end_date'          => static::$END_DATE,
                                     'optimization_goal' => static::$OPTIMIZATION_GOAL,
                                     'targeting'         => [
                                         'age' => [
                                             'min' => 30,
                                             'max' => 60,
                                         ], // 定向30-60岁用户
                                     ],
                                     'poi_list'          => [static::$POI],
                                 ],
                                 'adcreative' => [
                                     'adcreative_name'     => $adcreativeName,
                                     'adcreative_elements' => [
                                         'description' => static::$AD_DESCRIPTION,
                                     ],
                                     'page_type'           => static::$PAGE_TYPE,
                                     'page_spec'           => [
                                         'mini_program_spec' => [
                                             'mini_program_id'   => static::$MINI_PROGRAM_ID,
                                             'mini_program_path' => static::$MINI_PROGRAM_PATH,
                                         ],
                                     ],
                                 ],
                             ]);
            $adgroupId = $response->getAdgroupId();

            return $adgroupId;
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
        $example = new AddLocal();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
