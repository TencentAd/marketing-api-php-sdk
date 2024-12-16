<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WechatStoreCatalogsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WechatStoreCatalogsApiContainer extends ApiContainer
{
    /** @var WechatStoreCatalogsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatStoreCatalogsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatStoreCatalogsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatStoreCatalogsApi wechatStoreCatalogsGet function
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
            $storeIds = isset($params['store_ids']) ? $params['store_ids'] : null;
            $catalogIds = isset($params['catalog_ids']) ? $params['catalog_ids'] : null;
            $catalogName = isset($params['catalog_name']) ? $params['catalog_name'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatStoreCatalogsGet($accountId, $storeIds, $catalogIds, $catalogName, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatStoreCatalogsApi wechatStoreCatalogsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $storeIds = isset($params['store_ids']) ? $params['store_ids'] : null;
            $catalogIds = isset($params['catalog_ids']) ? $params['catalog_ids'] : null;
            $catalogName = isset($params['catalog_name']) ? $params['catalog_name'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatStoreCatalogsGetAsync($accountId, $storeIds, $catalogIds, $catalogName, $page, $pageSize, $fields);
            return $response;
        });
    }
}
