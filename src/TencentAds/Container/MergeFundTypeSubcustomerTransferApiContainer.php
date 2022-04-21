<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\MergeFundTypeSubcustomerTransferApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class MergeFundTypeSubcustomerTransferApiContainer extends ApiContainer
{
    /** @var MergeFundTypeSubcustomerTransferApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MergeFundTypeSubcustomerTransferApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MergeFundTypeSubcustomerTransferApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MergeFundTypeSubcustomerTransferApi mergeFundTypeSubcustomerTransferAdd function
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
            $response = $this->apiInstance->mergeFundTypeSubcustomerTransferAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MergeFundTypeSubcustomerTransferApi mergeFundTypeSubcustomerTransferAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->mergeFundTypeSubcustomerTransferAddAsync($data);
            return $response;
        });
    }
}
