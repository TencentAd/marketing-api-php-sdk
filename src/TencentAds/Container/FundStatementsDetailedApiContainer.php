<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\FundStatementsDetailedApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class FundStatementsDetailedApiContainer extends ApiContainer
{
    /** @var FundStatementsDetailedApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return FundStatementsDetailedApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new FundStatementsDetailedApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle FundStatementsDetailedApi fundStatementsDetailedGet function
     * @param array params
     * @return \TencentAds\Model\FundStatementsDetailedGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fundType = isset($params['fund_type']) ? $params['fund_type'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->fundStatementsDetailedGet($accountId, $fundType, $dateRange, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle FundStatementsDetailedApi fundStatementsDetailedGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fundType = isset($params['fund_type']) ? $params['fund_type'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->fundStatementsDetailedGetAsync($accountId, $fundType, $dateRange, $page, $pageSize, $fields);
            return $response;
        });
    }
}
