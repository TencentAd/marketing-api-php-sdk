<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ShopApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ShopApiContainer extends ApiContainer
{
    /** @var ShopApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ShopApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ShopApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ShopApi shopAdd function
     * @param array params
     * @return \TencentAds\Model\ShopAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->shopAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ShopApi shopAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->shopAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle ShopApi shopGet function
     * @param array params
     * @return \TencentAds\Model\ShopGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->shopGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ShopApi shopGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->shopGetAsync($data);
            return $response;
        });
    }


    /**
     * Handle ShopApi shopUpdate function
     * @param array params
     * @return \TencentAds\Model\ShopUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->shopUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ShopApi shopUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->shopUpdateAsync($data);
            return $response;
        });
    }
}
