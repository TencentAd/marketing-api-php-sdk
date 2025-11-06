<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\SubsidyAccountBindApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class SubsidyAccountBindApiContainer extends ApiContainer
{
    /** @var SubsidyAccountBindApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return SubsidyAccountBindApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new SubsidyAccountBindApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle SubsidyAccountBindApi subsidyAccountBindAdd function
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
            $response = $this->apiInstance->subsidyAccountBindAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SubsidyAccountBindApi subsidyAccountBindAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->subsidyAccountBindAddAsync($data);
            return $response;
        });
    }
}
