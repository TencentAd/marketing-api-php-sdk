<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ChannelsCommentApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ChannelsCommentApiContainer extends ApiContainer
{
    /** @var ChannelsCommentApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ChannelsCommentApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ChannelsCommentApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ChannelsCommentApi channelsCommentAdd function
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
            $response = $this->apiInstance->channelsCommentAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ChannelsCommentApi channelsCommentAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->channelsCommentAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle ChannelsCommentApi channelsCommentDelete function
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
            $response = $this->apiInstance->channelsCommentDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ChannelsCommentApi channelsCommentDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->channelsCommentDeleteAsync($data);
            return $response;
        });
    }
}
