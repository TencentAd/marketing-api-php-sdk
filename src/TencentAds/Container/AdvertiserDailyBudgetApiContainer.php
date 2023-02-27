<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdvertiserDailyBudgetApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdvertiserDailyBudgetApiContainer extends ApiContainer
{
    /** @var AdvertiserDailyBudgetApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdvertiserDailyBudgetApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdvertiserDailyBudgetApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdvertiserDailyBudgetApi advertiserDailyBudgetGet function
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
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->advertiserDailyBudgetGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdvertiserDailyBudgetApi advertiserDailyBudgetGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->advertiserDailyBudgetGetAsync($accountId, $fields);
            return $response;
        });
    }
}
