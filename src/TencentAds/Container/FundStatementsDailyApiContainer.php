<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\FundStatementsDailyApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class FundStatementsDailyApiContainer extends ApiContainer
{
    /** @var FundStatementsDailyApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return FundStatementsDailyApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new FundStatementsDailyApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle FundStatementsDailyApi fundStatementsDailyGet function
     * @param array params
     * @return \TencentAds\Model\FundStatementsDailyGetResponseData
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
            $tradeType = isset($params['trade_type']) ? $params['trade_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->fundStatementsDailyGet($accountId, $fundType, $dateRange, $tradeType, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle FundStatementsDailyApi fundStatementsDailyGetAsync function
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
            $tradeType = isset($params['trade_type']) ? $params['trade_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->fundStatementsDailyGetAsync($accountId, $fundType, $dateRange, $tradeType, $fields);
            return $response;
        });
    }
}
