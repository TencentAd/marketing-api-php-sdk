<?php
require_once __DIR__ . '/../../../vendor/autoload.php'; // change path as needed
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

/*****
 * 本文件提供了一个获取附近推广告(Local)列表的简单示例
 */
class GetLocal
{
    public static $tads;
    public static $ACCESS_TOKEN = 'YOUR ACCESS TOKEN';
    public static $ACCOUNT_ID   = 'YOUR ACCOUNT ID';
    public static $START_DATE   = 'START DATE'; // 开始日期
    public static $END_DATE     = 'END DATE'; // 结束日期
    public static $LEVEL        = 'REPORT_LEVEL_ADVERTISER_WECHAT'; // 广告组级别报表

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

            $response = $tads->local()
                             ->get([
                                 'account_id' => static::$ACCOUNT_ID,
                                 'level'      => static::$LEVEL,
                                 'date_range' => [
                                     'start_date' => static::$START_DATE,
                                     'end_date'   => static::$END_DATE,
                                 ],
                                 'page'       => 1,
                                 'page_size'  => 10,
                             ]);

            // 从返回里获得Local信息
            foreach ($response->getList() as $local) {
                // echo $local . PHP_EOL;
            }

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
        $example = new GetLocal();
        $example->init();
        $example->main();
    } catch (\Exception $e) {
        exit(-1);
    }
}
