<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CreativeSampleProductsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CreativeSampleProductsApiContainer extends ApiContainer
{
    /** @var CreativeSampleProductsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CreativeSampleProductsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CreativeSampleProductsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CreativeSampleProductsApi creativeSampleProductsGet function
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
            $response = $this->apiInstance->creativeSampleProductsGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CreativeSampleProductsApi creativeSampleProductsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->creativeSampleProductsGetAsync($data);
            return $response;
        });
    }
}
