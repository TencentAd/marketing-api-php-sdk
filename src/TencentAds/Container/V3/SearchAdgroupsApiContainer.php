<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\SearchAdgroupsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class SearchAdgroupsApiContainer extends ApiContainer
{
    /** @var SearchAdgroupsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return SearchAdgroupsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new SearchAdgroupsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle SearchAdgroupsApi searchAdgroupsAdd function
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
            $response = $this->apiInstance->searchAdgroupsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SearchAdgroupsApi searchAdgroupsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->searchAdgroupsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle SearchAdgroupsApi searchAdgroupsUpdate function
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
            $response = $this->apiInstance->searchAdgroupsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SearchAdgroupsApi searchAdgroupsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->searchAdgroupsUpdateAsync($data);
            return $response;
        });
    }
}
