<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\DailyReportsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

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
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $level = isset($params['level']) ? $params['level'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $timeLine = isset($params['time_line']) ? $params['time_line'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $response = $this->apiInstance->dailyReportsGet($level, $dateRange, $groupBy, $fields, $accountId, $filtering, $orderBy, $timeLine, $page, $pageSize, $organizationId);
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
            $level = isset($params['level']) ? $params['level'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $timeLine = isset($params['time_line']) ? $params['time_line'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $response = $this->apiInstance->dailyReportsGetAsync($level, $dateRange, $groupBy, $fields, $accountId, $filtering, $orderBy, $timeLine, $page, $pageSize, $organizationId);
            return $response;
        });
    }
}
