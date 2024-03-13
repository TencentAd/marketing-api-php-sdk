<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\AdUnionReportsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class AdUnionReportsApiContainer extends ApiContainer
{
    /** @var AdUnionReportsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdUnionReportsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdUnionReportsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdUnionReportsApi adUnionReportsGet function
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
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $response = $this->apiInstance->adUnionReportsGet($accountId, $dateRange, $fields, $filtering, $groupBy, $orderBy, $page, $pageSize);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdUnionReportsApi adUnionReportsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $response = $this->apiInstance->adUnionReportsGetAsync($accountId, $dateRange, $fields, $filtering, $groupBy, $orderBy, $page, $pageSize);
            return $response;
        });
    }
}
