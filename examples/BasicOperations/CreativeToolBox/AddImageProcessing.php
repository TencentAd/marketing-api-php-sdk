<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建图片处理(Image processing)的简单示例
 */
class AddImageProcessing
{
    public static $tads;
    public static $ACCESS_TOKEN   = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID     = 'YOUR ACCOUNT ID';
    public static $IMAGE_ID       = 'YOUR IMAGE ID';
    public static $OPERATION_TYPE = 'OPERATION_TYPE_CROP_SMART'; // 裁剪
    public static $WIDTH          = 400; // 处理后的宽度
    public static $HEIGHT         = 300; // 处理后的高度

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

            $operationSpec = [
                'crop_smart_spec' => [
                    'width'  => static::$WIDTH,
                    'height' => static::$HEIGHT,
                ],
            ];

            $response = $tads->imageProcessing()
                             ->add([
                                 'account_id'     => static::$ACCOUNT_ID,
                                 'image_id'       => static::$IMAGE_ID,
                                 'operation_type' => static::$OPERATION_TYPE,
                                 'operation_spec' => $operationSpec,
                                 'file_size_max'  => 102400,
                             ]);

            $imageId = $response->getImageId();

            return $imageId;
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
        $example = new AddImageProcessing();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
