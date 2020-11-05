<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CreativevideoLabelApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CreativevideoLabelApiContainer extends ApiContainer
{
    /** @var CreativevideoLabelApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CreativevideoLabelApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CreativevideoLabelApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CreativevideoLabelApi creativevideoLabelAdd function
     * @param array params
     * @return \TencentAds\Model\CreativevideoLabelAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $filename = isset($params['filename']) ? $params['filename'] : null;
            $videofile = isset($params['videofile']) ? $params['videofile'] : null;
            $response = $this->apiInstance->creativevideoLabelAdd($accountId, $signature, $filename, $videofile);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CreativevideoLabelApi creativevideoLabelAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $filename = isset($params['filename']) ? $params['filename'] : null;
            $videofile = isset($params['videofile']) ? $params['videofile'] : null;
            $response = $this->apiInstance->creativevideoLabelAddAsync($accountId, $signature, $filename, $videofile);
            return $response;
        });
    }
}
