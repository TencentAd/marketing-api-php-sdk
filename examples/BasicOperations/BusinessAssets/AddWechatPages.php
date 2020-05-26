<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建微信原生页(Wechat page)的简单示例
 */
class AddWechatPages
{
    public static $tads;
    public static $ACCESS_TOKEN     = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID       = 'YOUR ACCOUNT ID';
    public static $PAGE_TEMPLATE_ID = 'YOUR PAGE TEMPLATE ID'; // 微信原生页模板ID
    public static $PAGE_TITLE       = 'YOUR AD TITLE'; // 标题
    public static $PAGE_BUTTON      = 'YOUR BUTTON TEXT'; // 按钮文字

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
            $pageElementsSpecList = [
                [
                    'element_type'  => 'GOODS',
                    'element_goods' => [
                        'goods_button_spec' => [
                            'title' => static::$PAGE_TITLE,
                        ],
                    ],
                ],
                [
                    'element_type' => 'BUTTON',
                    'button_spec'  => [
                        'service_spec' => [
                            'title' => static::$PAGE_BUTTON,
                        ],
                    ],
                ],
            ];
            $shareContentSpec = [
                'share_title'       => '分享标题',
                'share_description' => '分享内容',
            ];

            $response = $tads->wechatPages()
                             ->add([
                                 'account_id'              => static::$ACCOUNT_ID,
                                 'page_name'               => $pageName,
                                 'page_template_id'        => static::$PAGE_TEMPLATE_ID,
                                 'page_elements_spec_list' => $pageElementsSpecList,
                                 'share_content_spec'      => $shareContentSpec,
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
        $example = new AddWechatPages();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
