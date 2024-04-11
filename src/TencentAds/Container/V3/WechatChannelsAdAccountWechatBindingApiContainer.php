<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WechatChannelsAdAccountWechatBindingApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WechatChannelsAdAccountWechatBindingApiContainer extends ApiContainer
{
    /** @var WechatChannelsAdAccountWechatBindingApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatChannelsAdAccountWechatBindingApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatChannelsAdAccountWechatBindingApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatChannelsAdAccountWechatBindingApi wechatChannelsAdAccountWechatBindingAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wechatChannelsAdAccountWechatBindingAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatChannelsAdAccountWechatBindingApi wechatChannelsAdAccountWechatBindingAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wechatChannelsAdAccountWechatBindingAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle WechatChannelsAdAccountWechatBindingApi wechatChannelsAdAccountWechatBindingGet function
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
            $wechatBindAuthToken = isset($params['wechat_bind_auth_token']) ? $params['wechat_bind_auth_token'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatChannelsAdAccountWechatBindingGet($accountId, $wechatBindAuthToken, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatChannelsAdAccountWechatBindingApi wechatChannelsAdAccountWechatBindingGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $wechatBindAuthToken = isset($params['wechat_bind_auth_token']) ? $params['wechat_bind_auth_token'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatChannelsAdAccountWechatBindingGetAsync($accountId, $wechatBindAuthToken, $fields);
            return $response;
        });
    }
}
