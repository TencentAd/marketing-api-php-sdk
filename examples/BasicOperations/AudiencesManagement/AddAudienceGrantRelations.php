<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建人群授权(Audience grant relation)的简单示例
 */
class AddAudienceGrantRelations
{
    public static $tads;
    public static $ACCESS_TOKEN          = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID            = 'YOUR ACCOUNT ID';
    public static $AUDIENCE_ID           = 'YOUR AUDIENCE ID'; // 人群ID
    public static $GRANT_SCOPE_TYPE      = 'GRANT_SCOPE_TYPE_BUSINESS'; // 人群授权给商务管家账号认领的所有广告账号
    public static $GRANT_PERMISSION_TYPE = 'GRANT_PERMISSION_TYPE_TARGET'; // 广告投放权限
    public static $GRANT_BUSINESS_ID     = 'YOUR BUSINESS ID'; // 商务管家账号

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

            $grantSpec = [
                'grant_to_business_spec' => [
                    'grant_business_id'         => static::$GRANT_BUSINESS_ID,
                    'grant_scope_type'          => static::$GRANT_SCOPE_TYPE,
                    'grant_business_permission' => [
                        'grant_permission_type_list' => [static::$GRANT_PERMISSION_TYPE],
                    ],
                ],
            ];

            $response = $tads->audienceGrantRelations()
                             ->add([
                                 'account_id'       => static::$ACCOUNT_ID,
                                 'audience_id_list' => [static::$AUDIENCE_ID],
                                 'grant_type'       => 'GRANT_TYPE_BUSINESS',
                                 'grant_spec'       => $grantSpec,
                             ]);

            return true;
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
        $example = new AddAudienceGrantRelations();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
