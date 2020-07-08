<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\EstimationApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class EstimationApiContainer extends ApiContainer
{
    /** @var EstimationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return EstimationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new EstimationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle EstimationApi estimationGet function
     * @param array params
     * @return \TencentAds\Model\EstimationGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->estimationGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle EstimationApi estimationGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->estimationGetAsync($data);
            return $response;
        });
    }
}
