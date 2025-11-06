<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\SearchDynamicCreativesApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class SearchDynamicCreativesApiContainer extends ApiContainer
{
    /** @var SearchDynamicCreativesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return SearchDynamicCreativesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new SearchDynamicCreativesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle SearchDynamicCreativesApi searchDynamicCreativesAdd function
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
            $response = $this->apiInstance->searchDynamicCreativesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SearchDynamicCreativesApi searchDynamicCreativesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->searchDynamicCreativesAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle SearchDynamicCreativesApi searchDynamicCreativesUpdate function
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
            $response = $this->apiInstance->searchDynamicCreativesUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SearchDynamicCreativesApi searchDynamicCreativesUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->searchDynamicCreativesUpdateAsync($data);
            return $response;
        });
    }
}
