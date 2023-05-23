<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ObjectCommentFlagApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ObjectCommentFlagApiContainer extends ApiContainer
{
    /** @var ObjectCommentFlagApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ObjectCommentFlagApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ObjectCommentFlagApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ObjectCommentFlagApi objectCommentFlagUpdate function
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
            $response = $this->apiInstance->objectCommentFlagUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ObjectCommentFlagApi objectCommentFlagUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->objectCommentFlagUpdateAsync($data);
            return $response;
        });
    }
}
