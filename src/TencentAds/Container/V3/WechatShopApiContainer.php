<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WechatShopApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WechatShopApiContainer extends ApiContainer
{
    /** @var WechatShopApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatShopApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatShopApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatShopApi wechatShopGet function
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
            $wechatChannelsShopName = isset($params['wechat_channels_shop_name']) ? $params['wechat_channels_shop_name'] : null;
            $wechatChannelsShopId = isset($params['wechat_channels_shop_id']) ? $params['wechat_channels_shop_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatShopGet($accountId, $wechatChannelsShopName, $wechatChannelsShopId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatShopApi wechatShopGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $wechatChannelsShopName = isset($params['wechat_channels_shop_name']) ? $params['wechat_channels_shop_name'] : null;
            $wechatChannelsShopId = isset($params['wechat_channels_shop_id']) ? $params['wechat_channels_shop_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatShopGetAsync($accountId, $wechatChannelsShopName, $wechatChannelsShopId, $fields);
            return $response;
        });
    }
}
