<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BidSimulationApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BidSimulationApiContainer extends ApiContainer
{
    /** @var BidSimulationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BidSimulationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BidSimulationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BidSimulationApi bidSimulationGet function
     * @param array params
     * @return \TencentAds\Model\BidSimulationGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->bidSimulationGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BidSimulationApi bidSimulationGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->bidSimulationGetAsync($data);
            return $response;
        });
    }
}
