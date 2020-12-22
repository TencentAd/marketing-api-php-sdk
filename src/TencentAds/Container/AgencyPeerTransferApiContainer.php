<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AgencyPeerTransferApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AgencyPeerTransferApiContainer extends ApiContainer
{
    /** @var AgencyPeerTransferApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AgencyPeerTransferApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AgencyPeerTransferApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AgencyPeerTransferApi agencyPeerTransferAdd function
     * @param array params
     * @return \TencentAds\Model\AgencyPeerTransferAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->agencyPeerTransferAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AgencyPeerTransferApi agencyPeerTransferAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->agencyPeerTransferAddAsync($data);
            return $response;
        });
    }
}
