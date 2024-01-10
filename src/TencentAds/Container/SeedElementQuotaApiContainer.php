<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\SeedElementQuotaApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class SeedElementQuotaApiContainer extends ApiContainer
{
    /** @var SeedElementQuotaApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return SeedElementQuotaApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new SeedElementQuotaApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle SeedElementQuotaApi seedElementQuotaGet function
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
            $response = $this->apiInstance->seedElementQuotaGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SeedElementQuotaApi seedElementQuotaGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->seedElementQuotaGetAsync($data);
            return $response;
        });
    }
}
