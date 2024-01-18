<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\TargetingTagReportsApi;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class TargetingTagReportsApiContainer extends ApiContainer
{
    /** @var TargetingTagReportsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return TargetingTagReportsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new TargetingTagReportsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle TargetingTagReportsApi targetingTagReportsGet function
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
            $type = isset($params['type']) ? $params['type'] : null;
            $level = isset($params['level']) ? $params['level'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $timeLine = isset($params['time_line']) ? $params['time_line'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $response = $this->apiInstance->targetingTagReportsGet($accountId, $type, $level, $dateRange, $groupBy, $fields, $filtering, $orderBy, $timeLine, $page, $pageSize);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle TargetingTagReportsApi targetingTagReportsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $type = isset($params['type']) ? $params['type'] : null;
            $level = isset($params['level']) ? $params['level'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $timeLine = isset($params['time_line']) ? $params['time_line'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $response = $this->apiInstance->targetingTagReportsGetAsync($accountId, $type, $level, $dateRange, $groupBy, $fields, $filtering, $orderBy, $timeLine, $page, $pageSize);
            return $response;
        });
    }
}
