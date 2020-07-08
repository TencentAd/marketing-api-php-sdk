<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建转换归因(Conversion)的简单示例
 */
class AddConversions
{
    public static $tads;
    public static $ACCESS_TOKEN       = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID         = 'YOUR ACCOUNT ID';
    public static $ACCESS_TYPE        = 'ACCESS_TYPE_API';
    public static $CONVERSION_SCENE   = 'CONVERSION_SCENE_IOS';
    public static $PROMOTED_OBJECT_ID = 'YOUR APP ID';
    public static $CLAIM_TYPE         = 'CLAIM_TYPE_CLICK';
    public static $FEEDBACK_URL       = 'YOUR FEEDBACK URL';
    public static $OPTIMIZATION_GOAL  = 'OPTIMIZATIONGOAL_CLICK';

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

            $conversionName = 'SDK转换归因' . uniqid();
            $selfAttributed = false;
            if (static::$ACCESS_TYPE == 'ACCESS_TYPE_API') {
                $selfAttributed = true;
            }

            $response = $tads->conversions()
                             ->add([
                                 'account_id'         => static::$ACCOUNT_ID,
                                 'conversion_name'    => $conversionName,
                                 'access_type'        => static::$ACCESS_TYPE,
                                 'conversion_scene'   => static::$CONVERSION_SCENE,
                                 'promoted_object_id' => static::$PROMOTED_OBJECT_ID,
                                 'claim_type'         => static::$CLAIM_TYPE,
                                 'feedback_url'       => static::$FEEDBACK_URL,
                                 'self_attributed'    => $selfAttributed,
                                 'optimization_goal'  => static::$OPTIMIZATION_GOAL,
                             ]);

            $conversionId = $response->getConversionId();

            return $conversionId;
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
        $example = new AddConversions();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
