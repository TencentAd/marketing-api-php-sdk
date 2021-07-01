<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建微信原生页(Wechat page)的简单示例
 */
class AddWechatPagesCustom
{
    public static $tads;
    public static $ACCESS_TOKEN     = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID       = 'YOUR ACCOUNT ID';
    public static $TOP_IMAGE_ID     = 'YOUR TOP IMAGE ID';
    public static $TOP_IMAGE_WIDTH  = 'YOUR TOP IMAGE WIDTH';
    public static $TOP_IMAGE_HEIGHT = 'YOUR TOP IMAGE HEIGHT';
    public static $IOS_APP_ID       = 'YOUR IOS APP ID';
    public static $ANDROID_APP_ID   = 'YOUR ANDROID APP ID';

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

            $pageName = 'SDK原生页' . uniqid();
            $pageSpecList = [
                [
                    'page_elements_spec_list' => [
                        [
                            'element_type'   => 'TOP_IMAGE',
                            'top_image_spec' => [
                                'image_id'    => static::$TOP_IMAGE_ID,
                                'width'       => static::$TOP_IMAGE_WIDTH,
                                'height'      => static::$TOP_IMAGE_HEIGHT,
                                'ad_location' => 'gzh', // 公众号
                            ],
                        ],
                        [
                            'element_type'      => 'APP_DOWNLOAD',
                            'app_download_spec' => [
                                'title'            => '下载',
                                'app_ios_spec'     => [
                                    'app_ios_id' => static::$IOS_APP_ID,
                                ],
                                'app_android_spec' => [
                                    'app_android_id' => static::$ANDROID_APP_ID,
                                ],
                            ],
                        ],
                    ],
                ],
            ];
            $shareContentSpec = [
                'share_title'       => '分享标题',
                'share_description' => '分享内容',
            ];

            $response = $tads->wechatPagesCustom()
                             ->add([
                                 'account_id'         => static::$ACCOUNT_ID,
                                 'page_name'          => $pageName,
                                 'page_spec_list'     => $pageSpecList,
                                 'share_content_spec' => $shareContentSpec,
                             ]);
            $pageId = $response->getPageId();

            return $pageId;
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
        $example = new AddWechatPagesCustom();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
