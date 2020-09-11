<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建图片(Image)的简单示例
 */
class AddImages
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $IMAGE_FILE   = 'YOUR IMAGE FILE PATH';

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

            $signature = md5_file(static::$IMAGE_FILE);

            $response = $tads->images()
                             ->add([
                                 'account_id'  => static::$ACCOUNT_ID,
                                 'upload_type' => 'UPLOAD_TYPE_FILE',
                                 'file'        => static::$IMAGE_FILE,
                                 'signature'   => $signature,
                             ]);
            $imageId = $response->getImageId();

            // UPLOAD BY BYTES
            $response = $tads->images()
                             ->add([
                                 'account_id'  => static::$ACCOUNT_ID,
                                 'upload_type' => 'UPLOAD_TYPE_BYTES',
                                 'bytes'       => base64_encode(file_get_contents(static::$IMAGE_FILE)),
                                 'signature'   => $signature,
                             ]);
            $imageId2 = $response->getImageId();
            // $imageId2 should be the same as $imageId

            return [$imageId, $imageId2];
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
        $example = new AddImages();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
