<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建朋友圈头像昵称跳转页(Profile)的简单示例
 */
class AddProfiles
{
    public static $tads;
    public static $ACCESS_TOKEN        = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID          = 'YOUR ACCOUNT ID';
    public static $PROFILE_TYPE        = 'PROFILE_TYPE_DEFINITION';
    public static $IMAGE_ID            = 'YOUR PROFILE IMAGE ID'; // 200x200
    public static $PROFILE_NAME        = 'YOUR PROFILE NAME';
    public static $PROFILE_DESCRIPTION = 'YOUR PROFILE DESCRIPTION';

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

            $response = $tads->profiles()
                             ->add([
                                 'account_id'    => static::$ACCOUNT_ID,
                                 'profile_type'  => static::$PROFILE_TYPE,
                                 'head_image_id' => static::$IMAGE_ID,
                                 'profile_name'  => static::$PROFILE_NAME,
                                 'description'   => static::$PROFILE_DESCRIPTION,
                             ]);
            $profileId = $response->getProfileId();

            return $profileId;
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
        $example = new AddProfiles();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
