<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DailyReportsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DailyReportsApiContainer extends ApiContainer
{
    /** @var DailyReportsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DailyReportsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DailyReportsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DailyReportsApi dailyReportsGet function
     * @param array params
     * @return \TencentAds\Model\DailyReportsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $level = isset($params['level']) ? $params['level'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $timeLine = isset($params['time_line']) ? $params['time_line'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dailyReportsGet($accountId, $level, $dateRange, $filtering, $groupBy, $orderBy, $page, $pageSize, $timeLine, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DailyReportsApi dailyReportsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $level = isset($params['level']) ? $params['level'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $timeLine = isset($params['time_line']) ? $params['time_line'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dailyReportsGetAsync($accountId, $level, $dateRange, $filtering, $groupBy, $orderBy, $page, $pageSize, $timeLine, $fields);
            return $response;
        });
    }
}
