<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\VideoChannelLeadsDataApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class VideoChannelLeadsDataApiContainer extends ApiContainer
{
    /** @var VideoChannelLeadsDataApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return VideoChannelLeadsDataApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new VideoChannelLeadsDataApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle VideoChannelLeadsDataApi videoChannelLeadsDataGet function
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
            $response = $this->apiInstance->videoChannelLeadsDataGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideoChannelLeadsDataApi videoChannelLeadsDataGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->videoChannelLeadsDataGetAsync($data);
            return $response;
        });
    }
}
