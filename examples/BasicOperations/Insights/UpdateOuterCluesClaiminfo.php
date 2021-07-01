<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个更新线索(Outer clues)归因信息的简单示例
 */
class UpdateOuterCluesClaiminfo
{
    public static $tads;
    public static $ACCESS_TOKEN   = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID     = 'YOUR ACCOUNT ID';
    public static $OUTER_LEADS_ID = 'YOUR LEADS ID';
    public static $CAMPAIGN_ID    = 'YOUR CLAIM CAMPAIGN ID';
    public static $ADGROUP_ID     = 'YOUR CLAIM ADGROUP ID';

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

            $response = $tads->outerCluesClaiminfo()
                             ->update([
                                 'account_id'       => static::$ACCOUNT_ID,
                                 'leads_claim_list' => [
                                     [
                                         'outer_leads_id' => static::$OUTER_LEADS_ID,
                                         'campaign_id'    => static::$CAMPAIGN_ID,
                                         'adgroup_id'     => static::$ADGROUP_ID,
                                     ],
                                 ],
                             ]);

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
        $example = new UpdateOuterCluesClaiminfo();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
