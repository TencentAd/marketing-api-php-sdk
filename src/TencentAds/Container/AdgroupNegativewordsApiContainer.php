<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdgroupNegativewordsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdgroupNegativewordsApiContainer extends ApiContainer
{
    /** @var AdgroupNegativewordsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdgroupNegativewordsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdgroupNegativewordsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdgroupNegativewordsApi adgroupNegativewordsAdd function
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
            $response = $this->apiInstance->adgroupNegativewordsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupNegativewordsApi adgroupNegativewordsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupNegativewordsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdgroupNegativewordsApi adgroupNegativewordsGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupNegativewordsGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupNegativewordsApi adgroupNegativewordsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupNegativewordsGetAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdgroupNegativewordsApi adgroupNegativewordsUpdate function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupNegativewordsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupNegativewordsApi adgroupNegativewordsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupNegativewordsUpdateAsync($data);
            return $response;
        });
    }
}
