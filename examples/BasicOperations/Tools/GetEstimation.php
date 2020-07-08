<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取覆盖人数(Estimation)的简单示例
 */
class GetEstimation
{
    public static $tads;
    public static $ACCESS_TOKEN      = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID        = 'YOUR ACCOUNT ID';
    public static $CAMPAIGN_ID       = 'YOUR CAMPAIGN ID'; // 推广计划ID
    public static $TARGETING_AGE_MIN = 'YOUR TARGETING MIN AGE'; // 年龄定向
    public static $TARGETING_AGE_MAX = 'YOUR TARGETING MAX AGE'; // 年龄定向
    public static $TARGETING_GENDER  = 'YOUR TARGETING GENDER'; // 性别定向

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

            $targetingSetting = [
                'age'    => [['max' => static::$TARGETING_AGE_MAX, 'min' => static::$TARGETING_AGE_MIN]],
                'gender' => [static::$TARGETING_GENDER],
            ];

            $response = $tads->estimation()
                             ->get([
                                 'account_id'    => static::$ACCOUNT_ID,
                                 'targeting'     => $targetingSetting,
                                 'campaign_spec' => [
                                     'campaign_id' => static::$CAMPAIGN_ID,
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
        $example = new GetEstimation();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
