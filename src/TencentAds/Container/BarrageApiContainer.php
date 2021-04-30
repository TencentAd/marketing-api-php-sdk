<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BarrageApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BarrageApiContainer extends ApiContainer
{
    /** @var BarrageApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BarrageApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BarrageApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BarrageApi barrageAdd function
     * @param array params
     * @return \TencentAds\Model\BarrageAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->barrageAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BarrageApi barrageAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->barrageAddAsync($data);
            return $response;
        });
    }
}
