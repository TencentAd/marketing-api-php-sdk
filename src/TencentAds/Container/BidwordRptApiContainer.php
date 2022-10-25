<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BidwordRptApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BidwordRptApiContainer extends ApiContainer
{
    /** @var BidwordRptApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BidwordRptApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BidwordRptApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BidwordRptApi bidwordRptGet function
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
            $response = $this->apiInstance->bidwordRptGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BidwordRptApi bidwordRptGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->bidwordRptGetAsync($data);
            return $response;
        });
    }
}
