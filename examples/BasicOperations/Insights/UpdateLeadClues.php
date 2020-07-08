<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个回传线索(Leads)的简单示例
 */
class UpdateLeadClues
{
    public static $tads;
    public static $ACCESS_TOKEN          = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID            = 'YOUR ACCOUNT ID';
    public static $LEADS_ID              = 'YOUR LEADS ID'; // 线索ID
    public static $LEADS_CONVERT_TYPE    = 'LEADS_CONVERT_STATUS_DEPRECATED'; // 线索状态
    public static $LEADS_INEFFECT_REASON = 'LEADS_INEFFECT_REASION_IDENTITY_MISMATCHED'; // 无效原因

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

            $response = $tads->leadClues()
                             ->update([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'leads'      => [
                                     [
                                         'leads_id'              => static::$LEADS_ID,
                                         'leads_convert_type'    => static::$LEADS_CONVERT_TYPE,
                                         'leads_ineffect_reason' => static::$LEADS_INEFFECT_REASON,
                                     ],
                                 ],
                             ]);

            return true;
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
        $example = new UpdateLeadClues();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
