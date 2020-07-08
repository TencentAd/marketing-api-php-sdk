<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CapabilitiesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CapabilitiesApiContainer extends ApiContainer
{
    /** @var CapabilitiesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CapabilitiesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CapabilitiesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CapabilitiesApi capabilitiesGet function
     * @param array params
     * @return \TencentAds\Model\CapabilitiesGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $capability = isset($params['capability']) ? $params['capability'] : null;
            $querySpec = isset($params['query_spec']) ? $params['query_spec'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->capabilitiesGet($accountId, $capability, $querySpec, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CapabilitiesApi capabilitiesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $capability = isset($params['capability']) ? $params['capability'] : null;
            $querySpec = isset($params['query_spec']) ? $params['query_spec'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->capabilitiesGetAsync($accountId, $capability, $querySpec, $fields);
            return $response;
        });
    }
}
