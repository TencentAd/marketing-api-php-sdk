<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CustomAudienceReportsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CustomAudienceReportsApiContainer extends ApiContainer
{
    /** @var CustomAudienceReportsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CustomAudienceReportsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CustomAudienceReportsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CustomAudienceReportsApi customAudienceReportsGet function
     * @param array params
     * @return \TencentAds\Model\CustomAudienceReportsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->customAudienceReportsGet($accountId, $filtering, $dateRange, $groupBy, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomAudienceReportsApi customAudienceReportsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->customAudienceReportsGetAsync($accountId, $filtering, $dateRange, $groupBy, $fields);
            return $response;
        });
    }
}
