<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BusinessPointApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BusinessPointApiContainer extends ApiContainer
{
    /** @var BusinessPointApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BusinessPointApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BusinessPointApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BusinessPointApi businessPointGet function
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
            $response = $this->apiInstance->businessPointGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BusinessPointApi businessPointGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->businessPointGetAsync($data);
            return $response;
        });
    }
}
