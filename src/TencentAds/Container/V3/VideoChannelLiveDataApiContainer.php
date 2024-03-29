<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\VideoChannelLiveDataApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class VideoChannelLiveDataApiContainer extends ApiContainer
{
    /** @var VideoChannelLiveDataApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return VideoChannelLiveDataApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new VideoChannelLiveDataApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle VideoChannelLiveDataApi videoChannelLiveDataGet function
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
            $response = $this->apiInstance->videoChannelLiveDataGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideoChannelLiveDataApi videoChannelLiveDataGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->videoChannelLiveDataGetAsync($data);
            return $response;
        });
    }
}
