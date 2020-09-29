<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建表单组件(Leads form)的简单示例
 */
class AddLeadsForm
{
    public static $tads;
    public static $ACCESS_TOKEN   = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID     = 'YOUR ACCOUNT ID';
    public static $COMPONENT_NAME = 'YOUR COMPONENT NAME';
    public static $TITLE          = 'YOUR TITLE';
    public static $SUB_TITLE      = 'YOUR SUB TITLE';
    public static $SUBMIT_TEXT    = 'YOUR SUBMIT BUTTON TEXT';

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

            $response = $tads->leadsForm()
                             ->add([
                                 'account_id'     => static::$ACCOUNT_ID,
                                 'component_name' => static::$COMPONENT_NAME,
                                 'title'          => static::$TITLE,
                                 'sub_title'      => static::$SUB_TITLE,
                                 'submit_text'    => static::$SUBMIT_TEXT,
                                 'items'          => [
                                     [
                                         'item_type'   => 'NAME',
                                         'item_name'   => '姓名',
                                         'placeholder' => '请输入姓名',
                                     ],
                                     [
                                         'item_type'   => 'PHONE',
                                         'item_name'   => '电话',
                                         'placeholder' => '请输入电话',
                                     ],
                                 ],
                             ]);
            $componentId = $response->getComponentId();

            return $componentId;
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
        $example = new AddLeadsForm();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
