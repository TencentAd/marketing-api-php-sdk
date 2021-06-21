<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个更新附近推商家(Wechat Advertiser Local Business)的简单示例
 */
class UpdateWechatAdvertiserLocalBusiness
{
    public static $tads;
    public static $ACCESS_TOKEN           = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID             = 'YOUR ACCOUNT ID';
    public static $HEAD_IMAGE_FILE        = 'YOUR HEAD IMAGE FILE'; // 头像图片文件路径
    public static $NAME                   = 'YOUR COMPANY NAME'; // 商家名称
    public static $DESCRIPTION            = 'YOUR DESCRIPTION'; // 商家描述
    public static $CONTACT_PERSON         = 'YOUR CONTACT PERSON'; // 联系人姓名
    public static $CONTACT_PERSON_MOBILE  = 'YOUR CONTACT MOBILE'; // 联系人手机号码
    public static $CONTACT_PERSON_CARD_ID = 'YOUR CONTACT PERSON ID'; // 法人代表身份证号码
    public static $CORPORATION            = 'YOUR CORPORATION NAME'; // 企业名称
    public static $CORPORATION_LICENCE    = 'YOUR CORPORATION LICENCE'; // 企业统一信用编码
    public static $INDUSTRY_ID            = 'YOUR INDUSTRY ID'; // 行业ID

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

            $response = $tads->wechatAdvertiserLocalBusiness()
                             ->update([
                                 'account_id'             => static::$ACCOUNT_ID,
                                 'head_image'             => static::$HEAD_IMAGE_FILE,
                                 'name'                   => static::$NAME,
                                 'description'            => static::$DESCRIPTION,
                                 'contact_person'         => static::$CONTACT_PERSON,
                                 'contact_person_mobile'  => static::$CONTACT_PERSON_MOBILE,
                                 'contact_person_card_id' => static::$CONTACT_PERSON_CARD_ID,
                                 'corporation'            => static::$CORPORATION,
                                 'corporation_licence'    => static::$CORPORATION_LICENCE,
                                 'industry_id'            => static::$INDUSTRY_ID,
                             ]);

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
        $example = new UpdateWechatAdvertiserLocalBusiness();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
