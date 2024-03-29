<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdgroupsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdgroupsApiContainer extends ApiContainer
{
    /** @var AdgroupsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdgroupsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdgroupsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdgroupsApi adgroupsAdd function
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
            $response = $this->apiInstance->adgroupsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupsApi adgroupsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdgroupsApi adgroupsAddNegativeword function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function addNegativeword(array $params = [])
    {
        return $this->handleMiddleware('addNegativeword', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsAddNegativeword($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupsApi adgroupsAddNegativewordAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addNegativewordAsync(array $params = [])
    {
        return $this->handleMiddleware('addNegativeword', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsAddNegativewordAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdgroupsApi adgroupsDelete function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupsApi adgroupsDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdgroupsApi adgroupsGet function
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
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $isDeleted = isset($params['is_deleted']) ? $params['is_deleted'] : null;
            $weixinOfficialAccountsUpgradeEnabled = isset($params['weixin_official_accounts_upgrade_enabled']) ? $params['weixin_official_accounts_upgrade_enabled'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adgroupsGet($accountId, $filtering, $page, $pageSize, $isDeleted, $weixinOfficialAccountsUpgradeEnabled, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupsApi adgroupsGetAsync function
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
            $weixinOfficialAccountsUpgradeEnabled = isset($params['weixin_official_accounts_upgrade_enabled']) ? $params['weixin_official_accounts_upgrade_enabled'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adgroupsGetAsync($accountId, $filtering, $page, $pageSize, $isDeleted, $weixinOfficialAccountsUpgradeEnabled, $fields);
            return $response;
        });
    }


    /**
     * Handle AdgroupsApi adgroupsGetNegativeword function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function getNegativeword(array $params = [])
    {
        return $this->handleMiddleware('getNegativeword', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsGetNegativeword($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupsApi adgroupsGetNegativewordAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNegativewordAsync(array $params = [])
    {
        return $this->handleMiddleware('getNegativeword', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsGetNegativewordAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdate function
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
            $response = $this->apiInstance->adgroupsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsUpdateAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdateBidAmount function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function updateBidAmount(array $params = [])
    {
        return $this->handleMiddleware('updateBidAmount', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsUpdateBidAmount($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdateBidAmountAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBidAmountAsync(array $params = [])
    {
        return $this->handleMiddleware('updateBidAmount', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsUpdateBidAmountAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdateConfiguredStatus function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function updateConfiguredStatus(array $params = [])
    {
        return $this->handleMiddleware('updateConfiguredStatus', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsUpdateConfiguredStatus($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdateConfiguredStatusAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateConfiguredStatusAsync(array $params = [])
    {
        return $this->handleMiddleware('updateConfiguredStatus', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsUpdateConfiguredStatusAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdateDailyBudget function
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
            $response = $this->apiInstance->adgroupsUpdateDailyBudget($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdateDailyBudgetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDailyBudgetAsync(array $params = [])
    {
        return $this->handleMiddleware('updateDailyBudget', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsUpdateDailyBudgetAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdateDatetime function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function updateDatetime(array $params = [])
    {
        return $this->handleMiddleware('updateDatetime', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsUpdateDatetime($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdateDatetimeAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDatetimeAsync(array $params = [])
    {
        return $this->handleMiddleware('updateDatetime', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsUpdateDatetimeAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdateNegativeword function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function updateNegativeword(array $params = [])
    {
        return $this->handleMiddleware('updateNegativeword', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsUpdateNegativeword($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdgroupsApi adgroupsUpdateNegativewordAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNegativewordAsync(array $params = [])
    {
        return $this->handleMiddleware('updateNegativeword', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adgroupsUpdateNegativewordAsync($data);
            return $response;
        });
    }
}
