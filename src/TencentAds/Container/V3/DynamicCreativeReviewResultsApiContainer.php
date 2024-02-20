<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\DynamicCreativeReviewResultsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class DynamicCreativeReviewResultsApiContainer extends ApiContainer
{
    /** @var DynamicCreativeReviewResultsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DynamicCreativeReviewResultsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DynamicCreativeReviewResultsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DynamicCreativeReviewResultsApi dynamicCreativeReviewResultsGet function
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
            $dynamicCreativeIdList = isset($params['dynamic_creative_id_list']) ? $params['dynamic_creative_id_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicCreativeReviewResultsGet($accountId, $dynamicCreativeIdList, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicCreativeReviewResultsApi dynamicCreativeReviewResultsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $dynamicCreativeIdList = isset($params['dynamic_creative_id_list']) ? $params['dynamic_creative_id_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicCreativeReviewResultsGetAsync($accountId, $dynamicCreativeIdList, $fields);
            return $response;
        });
    }
}
