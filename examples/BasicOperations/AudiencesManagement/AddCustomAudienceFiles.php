<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建客户人群数据文件(Custom audience file)的简单示例
 */
class AddCustomAudienceFiles
{
    public static $tads;
    public static $ACCESS_TOKEN       = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID         = 'YOUR ACCOUNT ID';
    public static $AUDIENCE_ID        = 'YOUR AUDIENCE ID'; // 人群ID
    public static $USER_ID_TYPE       = 'QQ'; // QQ号码包
    public static $AUDIENCE_FILE_PATH = 'YOUR AUDIENCE FILE PATH'; // 人群包文件路径

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

            $response = $tads->customAudienceFiles()
                             ->add([
                                 'account_id'   => static::$ACCOUNT_ID,
                                 'audience_id'  => static::$AUDIENCE_ID,
                                 'user_id_type' => static::$USER_ID_TYPE,
                                 'file'         => static::$AUDIENCE_FILE_PATH,

                             ]);
            $audienceFileId = $response->getCustomAudienceFileId();

            return $audienceFileId;
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
        $example = new AddCustomAudienceFiles();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
