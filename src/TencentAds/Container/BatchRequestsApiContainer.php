<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BatchRequestsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BatchRequestsApiContainer extends ApiContainer
{
    /** @var BatchRequestsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BatchRequestsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BatchRequestsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BatchRequestsApi batchRequestsAdd function
     * @param array params
     * @return \TencentAds\Model\BatchRequestsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->batchRequestsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BatchRequestsApi batchRequestsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->batchRequestsAddAsync($data);
            return $response;
        });
    }
}
