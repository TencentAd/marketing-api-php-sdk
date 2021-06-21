<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建智能调整任务(Videomaker autoadjustment)的简单示例
 */
class AddVideomakerAutoadjustments
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID             = 'YOUR ACCOUNT ID';
    public static $VIDEO_ID               = 'YOUR VIDEO ID';
    public static $ADJUSTMENT_TYPE        = 'SMART_ADJUSTMENT'; // 一键适配
    public static $ADCREATIVE_TEMPLATE_ID = 721; // 规格ID
    public static $CAMPAIGN_TYPE          = 'CAMPAIGN_TYPE_NORMAL';
    public static $PROMOTED_OBJECTC_TYPE  = 'PROMOTED_OBJECT_TYPE_LINK'; // 网页推广目标
    public static $SITE_SET               = 'SITE_SET_WECHAT'; // 公众号流量

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

            $response = $tads->videomakerAutoadjustments()
                             ->add([
                                 'account_id'       => static::$ACCOUNT_ID,
                                 'video_id'         => static::$VIDEO_ID,
                                 'adjustment_type'  => static::$ADJUSTMENT_TYPE,
                                 'smart_adjustment' => [
                                     'adcreative_template_id' => static::$ADCREATIVE_TEMPLATE_ID,
                                     'campaign_type'          => static::$CAMPAIGN_TYPE,
                                     'promoted_object_type'   => static::$PROMOTED_OBJECTC_TYPE,
                                     'site_set'               => [
                                         static::$SITE_SET,
                                     ],
                                 ],
                             ]);

            $taskIds = $response->getTaskIds();

            return $taskIds;
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
        $example = new AddVideomakerAutoadjustments();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
