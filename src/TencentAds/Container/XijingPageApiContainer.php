<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\XijingPageApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class XijingPageApiContainer extends ApiContainer
{
    /** @var XijingPageApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return XijingPageApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new XijingPageApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle XijingPageApi xijingPageAdd function
     * @param array params
     * @return \TencentAds\Model\XijingPageAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->xijingPageAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle XijingPageApi xijingPageAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->xijingPageAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle XijingPageApi xijingPageDelete function
     * @param array params
     * @return \TencentAds\Model\XijingPageDeleteResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->xijingPageDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle XijingPageApi xijingPageDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->xijingPageDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle XijingPageApi xijingPageUpdate function
     * @param array params
     * @return \TencentAds\Model\XijingPageUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->xijingPageUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle XijingPageApi xijingPageUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->xijingPageUpdateAsync($data);
            return $response;
        });
    }
}
