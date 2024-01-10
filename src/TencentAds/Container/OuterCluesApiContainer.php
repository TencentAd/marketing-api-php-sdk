<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\OuterCluesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class OuterCluesApiContainer extends ApiContainer
{
    /** @var OuterCluesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OuterCluesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OuterCluesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OuterCluesApi outerCluesActionTypeReport function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function actionTypeReport(array $params = [])
    {
        return $this->handleMiddleware('actionTypeReport', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->outerCluesActionTypeReport($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OuterCluesApi outerCluesActionTypeReportAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function actionTypeReportAsync(array $params = [])
    {
        return $this->handleMiddleware('actionTypeReport', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->outerCluesActionTypeReportAsync($data);
            return $response;
        });
    }


    /**
     * Handle OuterCluesApi outerCluesAdd function
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
            $response = $this->apiInstance->outerCluesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OuterCluesApi outerCluesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->outerCluesAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle OuterCluesApi outerCluesUpdate function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->outerCluesUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OuterCluesApi outerCluesUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->outerCluesUpdateAsync($data);
            return $response;
        });
    }
}
