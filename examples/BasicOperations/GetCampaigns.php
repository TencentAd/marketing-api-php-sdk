<?php
require_once __DIR__ . '/../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取推广计划(Campaign)列表的简单示例
 */
class GetCampaigns
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';

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

            $filtering = [
                [
                    'field'    => 'promoted_object_type',
                    'operator' => 'EQUALS',
                    'values'   => ['PROMOTED_OBJECT_TYPE_APP_IOS'],
                ],
            ]; // 过滤条件
            $fields = ['campaign_id', 'campaign_name']; // 需要返回的字段
            $response = $tads->campaigns()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'filtering'  => $filtering,
                                 'fields'     => $fields,
                             ]);

            // 从返回里获得Campaigns信息
            foreach ($response->getList() as $campaignInfo) {
                // echo 'Campaign ID: ' . $campaignInfo->getCampaignId() . PHP_EOL;
                // echo 'Campaign name: ' . $campaignInfo->getCampaignName() . PHP_EOL;
            }
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
        $example = new GetCampaigns();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
