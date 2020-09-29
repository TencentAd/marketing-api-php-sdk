<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\LocalEndadsmanuallyApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class LocalEndadsmanuallyApiContainer extends ApiContainer
{
    /** @var LocalEndadsmanuallyApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LocalEndadsmanuallyApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LocalEndadsmanuallyApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LocalEndadsmanuallyApi localEndadsmanuallyAdd function
     * @param array params
     * @return \TencentAds\Model\LocalEndadsmanuallyAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->localEndadsmanuallyAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LocalEndadsmanuallyApi localEndadsmanuallyAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->localEndadsmanuallyAddAsync($data);
            return $response;
        });
    }
}
