<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WalletCreateApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WalletCreateApiContainer extends ApiContainer
{
    /** @var WalletCreateApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WalletCreateApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WalletCreateApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WalletCreateApi walletCreateAdd function
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
            $response = $this->apiInstance->walletCreateAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WalletCreateApi walletCreateAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->walletCreateAddAsync($data);
            return $response;
        });
    }
}
