<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\LandingPageSellStrategyApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class LandingPageSellStrategyApiContainer extends ApiContainer
{
    /** @var LandingPageSellStrategyApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LandingPageSellStrategyApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LandingPageSellStrategyApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LandingPageSellStrategyApi landingPageSellStrategyAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->landingPageSellStrategyAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LandingPageSellStrategyApi landingPageSellStrategyAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->landingPageSellStrategyAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle LandingPageSellStrategyApi landingPageSellStrategyGet function
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
            $strategyId = isset($params['strategy_id']) ? $params['strategy_id'] : null;
            $strategyStatus = isset($params['strategy_status']) ? $params['strategy_status'] : null;
            $strategyName = isset($params['strategy_name']) ? $params['strategy_name'] : null;
            $fullStrategyName = isset($params['full_strategy_name']) ? $params['full_strategy_name'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->landingPageSellStrategyGet($accountId, $strategyId, $strategyStatus, $strategyName, $fullStrategyName, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LandingPageSellStrategyApi landingPageSellStrategyGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $strategyId = isset($params['strategy_id']) ? $params['strategy_id'] : null;
            $strategyStatus = isset($params['strategy_status']) ? $params['strategy_status'] : null;
            $strategyName = isset($params['strategy_name']) ? $params['strategy_name'] : null;
            $fullStrategyName = isset($params['full_strategy_name']) ? $params['full_strategy_name'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->landingPageSellStrategyGetAsync($accountId, $strategyId, $strategyStatus, $strategyName, $fullStrategyName, $page, $pageSize, $fields);
            return $response;
        });
    }
}
