<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取图片(Image)列表的简单示例
 */
class GetImages
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $IMAGE_ID     = 'YOUR IMAGE ID';

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
                    'field'    => 'image_id',
                    'operator' => 'EQUALS',
                    'values'   => [static::$IMAGE_ID],
                ],
            ]; // 过滤条件
            $fields = [
                'image_id', 'width', 'height', 'file_size', 'type', 'signature', 'source_signature',
                'preview_url', 'source_type', 'created_time', 'last_modified_time',
            ]; // 需要返回的字段
            $response = $tads->images()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'filtering'  => $filtering,
                                 'fields'     => $fields,
                             ]);

            // 从返回里获得Image信息
            foreach ($response->getList() as $imageInfo) {
                // echo $imageInfo . PHP_EOL;
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
        $example = new GetImages();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
