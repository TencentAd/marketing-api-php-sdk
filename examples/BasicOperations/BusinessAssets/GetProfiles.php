<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取朋友圈头像昵称跳转页(Profile)列表的简单示例
 */
class GetProfiles
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

            $fields = [
                'profile_type', 'profile_id', 'promoted_object_type', 'promoted_object_id', 'head_image_id',
                'profile_name', 'description', 'created_time', 'last_modified_time', 'profile_url', 'system_status',
            ]; // 需要返回的字段
            $response = $tads->profiles()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'fields'     => $fields,
                             ]);

            // 从返回里获得Profile信息
            foreach ($response->getList() as $profileInfo) {
                // echo $profileInfo . PHP_EOL;
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
        $example = new GetProfiles();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
