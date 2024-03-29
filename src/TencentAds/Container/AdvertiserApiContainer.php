<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdvertiserApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdvertiserApiContainer extends ApiContainer
{
    /** @var AdvertiserApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdvertiserApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdvertiserApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdvertiserApi advertiserAdd function
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
            $response = $this->apiInstance->advertiserAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdvertiserApi advertiserAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->advertiserAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdvertiserApi advertiserGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $agencyId = isset($params['agency_id']) ? $params['agency_id'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $paginationMode = isset($params['pagination_mode']) ? $params['pagination_mode'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $cursor = isset($params['cursor']) ? $params['cursor'] : null;
            $response = $this->apiInstance->advertiserGet($agencyId, $accountId, $filtering, $fields, $paginationMode, $page, $pageSize, $cursor);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdvertiserApi advertiserGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $agencyId = isset($params['agency_id']) ? $params['agency_id'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $paginationMode = isset($params['pagination_mode']) ? $params['pagination_mode'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $cursor = isset($params['cursor']) ? $params['cursor'] : null;
            $response = $this->apiInstance->advertiserGetAsync($agencyId, $accountId, $filtering, $fields, $paginationMode, $page, $pageSize, $cursor);
            return $response;
        });
    }


    /**
     * Handle AdvertiserApi advertiserUpdate function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->advertiserUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdvertiserApi advertiserUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->advertiserUpdateAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdvertiserApi advertiserUpdateDailyBudget function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function updateDailyBudget(array $params = [])
    {
        return $this->handleMiddleware('updateDailyBudget', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->advertiserUpdateDailyBudget($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdvertiserApi advertiserUpdateDailyBudgetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDailyBudgetAsync(array $params = [])
    {
        return $this->handleMiddleware('updateDailyBudget', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->advertiserUpdateDailyBudgetAsync($data);
            return $response;
        });
    }
}
