<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\WechatFundStatementsDetailedApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class WechatFundStatementsDetailedApiContainer extends ApiContainer
{
    /** @var WechatFundStatementsDetailedApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatFundStatementsDetailedApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatFundStatementsDetailedApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatFundStatementsDetailedApi wechatFundStatementsDetailedGet function
     * @param array params
     * @return \TencentAds\Model\WechatFundStatementsDetailedGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $tradeType = isset($params['trade_type']) ? $params['trade_type'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatFundStatementsDetailedGet($tradeType, $dateRange, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatFundStatementsDetailedApi wechatFundStatementsDetailedGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $tradeType = isset($params['trade_type']) ? $params['trade_type'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatFundStatementsDetailedGetAsync($tradeType, $dateRange, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
