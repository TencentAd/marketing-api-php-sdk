<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个创建联盟流量包(Union position package)的简单示例
 */
class AddUnionPositionPackages
{
    public static $tads;
    public static $ACCESS_TOKEN         = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID           = 'YOUR ACCOUNT ID';
    public static $PROMOTED_OBJECT_TYPE = 'PROMOTED_OBJECT_TYPE_LINK'; // 推广普通外链
    public static $UNION_PACKAGE_TYPE   = 'UNION_PACKAGE_TYPE_INCLUDE'; // 定投流量包
    public static $UNION_POSITION_ID    = 'YOUR POSTION ID'; // 联盟广告位ID

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

            $unionPackageName = 'SDK流量包' . uniqid();

            $response = $tads->unionPositionPackages()
                             ->add([
                                 'account_id'             => static::$ACCOUNT_ID,
                                 'union_package_name'     => $unionPackageName,
                                 'promoted_object_type'   => static::$PROMOTED_OBJECT_TYPE,
                                 'union_package_type'     => static::$UNION_PACKAGE_TYPE,
                                 'union_position_id_list' => [static::$UNION_POSITION_ID],
                             ]);
            $unionPackageId = $response->getUnionPackageId();

            return $unionPackageId;
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
        $example = new AddUnionPositionPackages();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
