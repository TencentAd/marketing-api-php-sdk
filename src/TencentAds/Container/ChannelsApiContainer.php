<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ChannelsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ChannelsApiContainer extends ApiContainer
{
    /** @var ChannelsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ChannelsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ChannelsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ChannelsApi channelsAdd function
     * @param array params
     * @return \TencentAds\Model\ChannelsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->channelsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ChannelsApi channelsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->channelsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle ChannelsApi channelsGet function
     * @param array params
     * @return \TencentAds\Model\ChannelsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->channelsGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ChannelsApi channelsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->channelsGetAsync($data);
            return $response;
        });
    }


    /**
     * Handle ChannelsApi channelsUpdate function
     * @param array params
     * @return \TencentAds\Model\ChannelsUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->channelsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ChannelsApi channelsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->channelsUpdateAsync($data);
            return $response;
        });
    }
}
