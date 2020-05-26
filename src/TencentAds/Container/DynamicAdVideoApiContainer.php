<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DynamicAdVideoApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DynamicAdVideoApiContainer extends ApiContainer
{
    /** @var DynamicAdVideoApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DynamicAdVideoApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DynamicAdVideoApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DynamicAdVideoApi dynamicAdVideoAdd function
     * @param array params
     * @return \TencentAds\Model\DynamicAdVideoAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dynamicAdVideoAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicAdVideoApi dynamicAdVideoAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dynamicAdVideoAddAsync($data);
            return $response;
        });
    }
}
