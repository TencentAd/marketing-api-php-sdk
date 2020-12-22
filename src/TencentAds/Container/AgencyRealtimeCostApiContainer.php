<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AgencyRealtimeCostApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AgencyRealtimeCostApiContainer extends ApiContainer
{
    /** @var AgencyRealtimeCostApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AgencyRealtimeCostApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AgencyRealtimeCostApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AgencyRealtimeCostApi agencyRealtimeCostGet function
     * @param array params
     * @return \TencentAds\Model\AgencyRealtimeCostGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->agencyRealtimeCostGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AgencyRealtimeCostApi agencyRealtimeCostGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->agencyRealtimeCostGetAsync($accountId, $fields);
            return $response;
        });
    }
}
