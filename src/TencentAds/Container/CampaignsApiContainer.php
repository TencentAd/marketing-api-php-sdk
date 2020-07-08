<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CampaignsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CampaignsApiContainer extends ApiContainer
{
    /** @var CampaignsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CampaignsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CampaignsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CampaignsApi campaignsAdd function
     * @param array params
     * @return \TencentAds\Model\CampaignsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CampaignsApi campaignsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle CampaignsApi campaignsDelete function
     * @param array params
     * @return \TencentAds\Model\CampaignsDeleteResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignsDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CampaignsApi campaignsDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignsDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle CampaignsApi campaignsGet function
     * @param array params
     * @return \TencentAds\Model\CampaignsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $isDeleted = isset($params['is_deleted']) ? $params['is_deleted'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->campaignsGet($accountId, $filtering, $page, $pageSize, $isDeleted, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CampaignsApi campaignsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $isDeleted = isset($params['is_deleted']) ? $params['is_deleted'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->campaignsGetAsync($accountId, $filtering, $page, $pageSize, $isDeleted, $fields);
            return $response;
        });
    }


    /**
     * Handle CampaignsApi campaignsUpdate function
     * @param array params
     * @return \TencentAds\Model\CampaignsUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CampaignsApi campaignsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignsUpdateAsync($data);
            return $response;
        });
    }


    /**
     * Handle CampaignsApi campaignsUpdateConfiguredStatus function
     * @param array params
     * @return \TencentAds\Model\CampaignsUpdateConfiguredStatusResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function updateConfiguredStatus(array $params = [])
    {
        return $this->handleMiddleware('updateConfiguredStatus', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignsUpdateConfiguredStatus($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CampaignsApi campaignsUpdateConfiguredStatusAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateConfiguredStatusAsync(array $params = [])
    {
        return $this->handleMiddleware('updateConfiguredStatus', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignsUpdateConfiguredStatusAsync($data);
            return $response;
        });
    }


    /**
     * Handle CampaignsApi campaignsUpdateDailyBudget function
     * @param array params
     * @return \TencentAds\Model\CampaignsUpdateDailyBudgetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function updateDailyBudget(array $params = [])
    {
        return $this->handleMiddleware('updateDailyBudget', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignsUpdateDailyBudget($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CampaignsApi campaignsUpdateDailyBudgetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDailyBudgetAsync(array $params = [])
    {
        return $this->handleMiddleware('updateDailyBudget', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignsUpdateDailyBudgetAsync($data);
            return $response;
        });
    }
}
