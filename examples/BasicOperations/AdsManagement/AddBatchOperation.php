<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个批量修改广告组(Adgroup)的简单示例
 */
class AddBatchOperation
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $ADGROUP_ID   = 'YOUR ADGROUP ID';
    public static $OPERATE_TYPE = 'OPERATION_TYPE_DATE'; // 批量修改投放日期
    public static $BEGIN_DATE   = 'YOUR ADGROUP BEGIN DATE'; // 广告开始投放日期
    public static $END_DATE     = 'YOUR ADGROUP END DATE'; // 广告结束投放日期

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
                'date_spec' => [
                    'begin_date' => static::$BEGIN_DATE,
                    'end_date'   => static::$END_DATE,
                ],
            ];
            $response = $tads->batchOperation()
                             ->add([
                                 'account_id'       => static::$ACCOUNT_ID,
                                 'resource_type'    => 'RESOURCE_TYPE_ADGROUP',
                                 'operation_type'   => static::$OPERATE_TYPE,
                                 'resource_id_list' => [static::$ADGROUP_ID],
                                 'operation_spec'   => $operationSpec,
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
        $example = new BatchUpdateAdgroups();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
