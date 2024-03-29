<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AsyncReportsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AsyncReportsApiContainer extends ApiContainer
{
    /** @var AsyncReportsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AsyncReportsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AsyncReportsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AsyncReportsApi asyncReportsAdd function
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
            $response = $this->apiInstance->asyncReportsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AsyncReportsApi asyncReportsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->asyncReportsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle AsyncReportsApi asyncReportsGet function
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
            $weixinOfficialAccountsUpgradeEnabled = isset($params['weixin_official_accounts_upgrade_enabled']) ? $params['weixin_official_accounts_upgrade_enabled'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->asyncReportsGet($accountId, $filtering, $page, $pageSize, $weixinOfficialAccountsUpgradeEnabled, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AsyncReportsApi asyncReportsGetAsync function
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
            $weixinOfficialAccountsUpgradeEnabled = isset($params['weixin_official_accounts_upgrade_enabled']) ? $params['weixin_official_accounts_upgrade_enabled'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->asyncReportsGetAsync($accountId, $filtering, $page, $pageSize, $weixinOfficialAccountsUpgradeEnabled, $fields);
            return $response;
        });
    }
}
