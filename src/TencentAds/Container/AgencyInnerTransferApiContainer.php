<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AgencyInnerTransferApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AgencyInnerTransferApiContainer extends ApiContainer
{
    /** @var AgencyInnerTransferApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AgencyInnerTransferApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AgencyInnerTransferApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AgencyInnerTransferApi agencyInnerTransferAdd function
     * @param array params
     * @return \TencentAds\Model\AgencyInnerTransferAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->agencyInnerTransferAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AgencyInnerTransferApi agencyInnerTransferAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->agencyInnerTransferAddAsync($data);
            return $response;
        });
    }
}
