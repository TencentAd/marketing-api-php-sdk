<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WechatStoreProductItemsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WechatStoreProductItemsApiContainer extends ApiContainer
{
    /** @var WechatStoreProductItemsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatStoreProductItemsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatStoreProductItemsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatStoreProductItemsApi wechatStoreProductItemsGet function
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
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatStoreProductItemsGet($accountId, $productCatalogId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatStoreProductItemsApi wechatStoreProductItemsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatStoreProductItemsGetAsync($accountId, $productCatalogId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
