<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个修改广告创意(Adcreative)的简单示例
 */
class UpdateAdcreatives
{
    public static $tads;
    public static $ACCESS_TOKEN   = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID     = 'YOUR ACCOUNT ID';
    public static $ADCREATIVE_ID  = 'YOUR ADCREATIVE ID'; // 要修改的广告创意ID
    public static $AD_TITLE       = 'YOUR AD TEXT'; // 要修改的广告标题，968规格要求：字数：10~14
    public static $AD_DESCRIPTION = 'YOUR AD DESCRIPTION'; // 要修改的广告文案，968规格要求：字数：24~30
    public static $PAGE_URL       = 'YOUR AD PAGE URL'; // 要修改的广告落地页地址

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

            $adcreativeElements = [
                'title'       => static::$AD_TITLE,
                'description' => static::$AD_DESCRIPTION,
            ];
            $pageSpec = [
                'page_url' => static::$PAGE_URL,
            ];

            $response = $tads->adcreatives()
                             ->update([
                                 'account_id'          => static::$ACCOUNT_ID,
                                 'adcreative_id'       => static::$ADCREATIVE_ID,
                                 'adcreative_elements' => $adcreativeElements,
                                 'page_spec'           => $pageSpec,
                             ]);
            $adcreativeId = $response->getAdcreativeId();

            return $adcreativeId;
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
        $example = new UpdateAdcreatives();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
