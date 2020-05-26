<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取人群洞察分析(Custom audience insight)列表的简单示例
 */
class GetCustomAudienceInsights
{
    public static $tads;
    public static $ACCESS_TOKEN   = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID     = 'YOUR ACCOUNT ID';
    public static $AUDIENCE_ID    = 'YOUR AUDIENCE ID'; // 人群ID
    public static $DIMENSION_TYPE = 'AGE'; // 透视维度

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

            $fields = [
                'dimension_type', 'match_rate', 'distribution',
            ]; // 需要返回的字段
            $response = $tads->customAudienceInsights()
                             ->get([
                                 'account_id'     => static::$ACCOUNT_ID,
                                 'audience_id'    => static::$AUDIENCE_ID,
                                 'dimension_type' => [static::$DIMENSION_TYPE],
                                 'fields'         => $fields,
                             ]);

            // 从返回里获得Report信息
            foreach ($response->getList() as $report) {
                // echo $report . PHP_EOL;
            }

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
        $example = new GetCustomAudienceInsights();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
