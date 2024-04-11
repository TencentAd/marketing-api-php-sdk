<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\RtatargetBindApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class RtatargetBindApiContainer extends ApiContainer
{
    /** @var RtatargetBindApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return RtatargetBindApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new RtatargetBindApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle RtatargetBindApi rtatargetBindAdd function
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
            $response = $this->apiInstance->rtatargetBindAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle RtatargetBindApi rtatargetBindAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->rtatargetBindAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle RtatargetBindApi rtatargetBindDelete function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->rtatargetBindDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle RtatargetBindApi rtatargetBindDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->rtatargetBindDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle RtatargetBindApi rtatargetBindGet function
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
            $response = $this->apiInstance->rtatargetBindGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle RtatargetBindApi rtatargetBindGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->rtatargetBindGetAsync($data);
            return $response;
        });
    }
}
