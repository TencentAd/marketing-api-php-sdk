<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\UserActionSetReportsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class UserActionSetReportsApiContainer extends ApiContainer
{
    /** @var UserActionSetReportsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return UserActionSetReportsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new UserActionSetReportsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle UserActionSetReportsApi userActionSetReportsGet function
     * @param array params
     * @return \TencentAds\Model\UserActionSetReportsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userActionSetId = isset($params['user_action_set_id']) ? $params['user_action_set_id'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $timeGranularity = isset($params['time_granularity']) ? $params['time_granularity'] : null;
            $aggregation = isset($params['aggregation']) ? $params['aggregation'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->userActionSetReportsGet($accountId, $userActionSetId, $dateRange, $timeGranularity, $aggregation, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle UserActionSetReportsApi userActionSetReportsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userActionSetId = isset($params['user_action_set_id']) ? $params['user_action_set_id'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $timeGranularity = isset($params['time_granularity']) ? $params['time_granularity'] : null;
            $aggregation = isset($params['aggregation']) ? $params['aggregation'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->userActionSetReportsGetAsync($accountId, $userActionSetId, $dateRange, $timeGranularity, $aggregation, $fields);
            return $response;
        });
    }
}
