<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MergeFundTypeDailyBalanceReportApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MergeFundTypeDailyBalanceReportApiContainer extends ApiContainer
{
    /** @var MergeFundTypeDailyBalanceReportApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MergeFundTypeDailyBalanceReportApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MergeFundTypeDailyBalanceReportApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MergeFundTypeDailyBalanceReportApi mergeFundTypeDailyBalanceReportGet function
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
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->mergeFundTypeDailyBalanceReportGet($accountId, $dateRange, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MergeFundTypeDailyBalanceReportApi mergeFundTypeDailyBalanceReportGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->mergeFundTypeDailyBalanceReportGetAsync($accountId, $dateRange, $page, $pageSize, $fields);
            return $response;
        });
    }
}
