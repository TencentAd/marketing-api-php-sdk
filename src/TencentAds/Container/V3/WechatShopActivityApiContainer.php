<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WechatShopActivityApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WechatShopActivityApiContainer extends ApiContainer
{
    /** @var WechatShopActivityApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatShopActivityApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatShopActivityApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatShopActivityApi wechatShopActivityGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $wechatShopId = isset($params['wechat_shop_id']) ? $params['wechat_shop_id'] : null;
            $activityId = isset($params['activity_id']) ? $params['activity_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatShopActivityGet($accountId, $wechatShopId, $activityId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatShopActivityApi wechatShopActivityGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $wechatShopId = isset($params['wechat_shop_id']) ? $params['wechat_shop_id'] : null;
            $activityId = isset($params['activity_id']) ? $params['activity_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatShopActivityGetAsync($accountId, $wechatShopId, $activityId, $fields);
            return $response;
        });
    }
}
