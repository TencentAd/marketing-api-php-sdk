<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WechatShopAuthorizationValidationApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WechatShopAuthorizationValidationApiContainer extends ApiContainer
{
    /** @var WechatShopAuthorizationValidationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatShopAuthorizationValidationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatShopAuthorizationValidationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatShopAuthorizationValidationApi wechatShopAuthorizationValidationGet function
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
            $wechatChannelsShopId = isset($params['wechat_channels_shop_id']) ? $params['wechat_channels_shop_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatShopAuthorizationValidationGet($accountId, $wechatChannelsShopId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatShopAuthorizationValidationApi wechatShopAuthorizationValidationGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $wechatChannelsShopId = isset($params['wechat_channels_shop_id']) ? $params['wechat_channels_shop_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatShopAuthorizationValidationGetAsync($accountId, $wechatChannelsShopId, $fields);
            return $response;
        });
    }
}
