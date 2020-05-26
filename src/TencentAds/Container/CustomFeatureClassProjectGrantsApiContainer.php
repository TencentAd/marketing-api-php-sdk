<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CustomFeatureClassProjectGrantsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CustomFeatureClassProjectGrantsApiContainer extends ApiContainer
{
    /** @var CustomFeatureClassProjectGrantsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CustomFeatureClassProjectGrantsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CustomFeatureClassProjectGrantsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CustomFeatureClassProjectGrantsApi customFeatureClassProjectGrantsAdd function
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
            $response = $this->apiInstance->customFeatureClassProjectGrantsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomFeatureClassProjectGrantsApi customFeatureClassProjectGrantsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customFeatureClassProjectGrantsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle CustomFeatureClassProjectGrantsApi customFeatureClassProjectGrantsGet function
     * @param array params
     * @return \TencentAds\Model\CustomFeatureClassProjectGrantsListData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customFeatureClassProjectGrantsGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomFeatureClassProjectGrantsApi customFeatureClassProjectGrantsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customFeatureClassProjectGrantsGetAsync($data);
            return $response;
        });
    }
}
