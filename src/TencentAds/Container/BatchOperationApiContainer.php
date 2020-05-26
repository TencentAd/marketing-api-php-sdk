<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BatchOperationApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BatchOperationApiContainer extends ApiContainer
{
    /** @var BatchOperationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BatchOperationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BatchOperationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BatchOperationApi batchOperationAdd function
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
            $response = $this->apiInstance->batchOperationAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BatchOperationApi batchOperationAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->batchOperationAddAsync($data);
            return $response;
        });
    }
}
