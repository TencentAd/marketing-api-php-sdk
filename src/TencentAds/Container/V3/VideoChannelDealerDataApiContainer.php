<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\VideoChannelDealerDataApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class VideoChannelDealerDataApiContainer extends ApiContainer
{
    /** @var VideoChannelDealerDataApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return VideoChannelDealerDataApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new VideoChannelDealerDataApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle VideoChannelDealerDataApi videoChannelDealerDataGet function
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
            $response = $this->apiInstance->videoChannelDealerDataGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideoChannelDealerDataApi videoChannelDealerDataGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->videoChannelDealerDataGetAsync($data);
            return $response;
        });
    }
}
