<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MarketingTargetTypesApi;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MarketingTargetTypesApiContainer extends ApiContainer
{
    /** @var MarketingTargetTypesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MarketingTargetTypesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MarketingTargetTypesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MarketingTargetTypesApi marketingTargetTypesGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->marketingTargetTypesGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MarketingTargetTypesApi marketingTargetTypesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->marketingTargetTypesGetAsync($accountId, $fields);
            return $response;
        });
    }
}
