<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DataSourceDispatchApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DataSourceDispatchApiContainer extends ApiContainer
{
    /** @var DataSourceDispatchApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DataSourceDispatchApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DataSourceDispatchApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DataSourceDispatchApi dataSourceDispatchUpdate function
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
            $response = $this->apiInstance->dataSourceDispatchUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DataSourceDispatchApi dataSourceDispatchUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dataSourceDispatchUpdateAsync($data);
            return $response;
        });
    }
}
