<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\LocalStoresAddressParsingResultApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class LocalStoresAddressParsingResultApiContainer extends ApiContainer
{
    /** @var LocalStoresAddressParsingResultApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LocalStoresAddressParsingResultApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LocalStoresAddressParsingResultApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LocalStoresAddressParsingResultApi localStoresAddressParsingResultGet function
     * @param array params
     * @return \TencentAds\Model\LocalStoresAddressParsingResultGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->localStoresAddressParsingResultGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LocalStoresAddressParsingResultApi localStoresAddressParsingResultGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->localStoresAddressParsingResultGetAsync($data);
            return $response;
        });
    }
}
