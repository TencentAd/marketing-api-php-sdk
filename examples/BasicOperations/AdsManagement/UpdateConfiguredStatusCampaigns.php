<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个修改推广计划状态的简单示例
 */
class UpdateConfiguredStatusCampaigns
{
    public static $tads;
    public static $ACCESS_TOKEN      = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID        = 'YOUR ACCOUNT ID';
    public static $CAMPAIGN_ID       = 'YOUR CAMPAIGN ID';
    public static $CONFIGURED_STATUS = 'AD_STATUS_NORMAL';

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

            $response = $tads->campaigns()
                             ->updateConfiguredStatus([
                                 'account_id'                    => static::$ACCOUNT_ID,
                                 'update_configured_status_spec' => [
                                     [
                                         'campaign_id'       => static::$CAMPAIGN_ID,
                                         'configured_status' => static::$CONFIGURED_STATUS,
                                     ],
                                 ],
                             ]);
            $responses = $response->getList();

            return $responses;
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
        $example = new UpdateConfiguredStatusCampaigns();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
