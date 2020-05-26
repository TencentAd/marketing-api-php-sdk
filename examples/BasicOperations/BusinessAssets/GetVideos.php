<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取视频(Video)列表的简单示例
 */
class GetVideos
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $VIDEO_ID     = 'YOUR VIDEO ID';

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
                    'field'    => 'media_id',
                    'operator' => 'EQUALS',
                    'values'   => [static::$VIDEO_ID],
                ],
            ]; // 过滤条件
            $fields = [
                'video_id', 'width', 'height', 'video_frames', 'video_fps', 'video_codec', 'video_bit_rate',
                'audio_codec', 'audio_bit_rate', 'file_size', 'type', 'signature', 'system_status',
                'description', 'preview_url', 'created_time', 'last_modified_time', 'video_profile_name',
                'audio_sample_rate', 'max_keyframe_interval', 'min_keyframe_interval', 'sample_aspect_ratio',
                'audio_profile_name', 'scan_type', 'image_duration_millisecond', 'audio_duration_millisecond',
                'source_type',
            ]; // 需要返回的字段
            $response = $tads->videos()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'filtering'  => $filtering,
                                 'fields'     => $fields,
                             ]);

            // 从返回里获得Video信息
            foreach ($response->getList() as $videoInfo) {
                // echo $videoInfo . PHP_EOL;
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
        $example = new GetVideos();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
