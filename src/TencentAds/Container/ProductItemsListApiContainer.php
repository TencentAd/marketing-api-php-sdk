<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ProductItemsListApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ProductItemsListApiContainer extends ApiContainer
{
    /** @var ProductItemsListApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ProductItemsListApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ProductItemsListApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ProductItemsListApi productItemsListGet function
     * @param array params
     * @return \TencentAds\Model\ProductItemsListGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $sortByProductLastModTime = isset($params['sort_by_product_last_mod_time']) ? $params['sort_by_product_last_mod_time'] : null;
            $sortByProductName = isset($params['sort_by_product_name']) ? $params['sort_by_product_name'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productItemsListGet($accountId, $productCatalogId, $pageSize, $page, $sortByProductLastModTime, $sortByProductName, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProductItemsListApi productItemsListGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $sortByProductLastModTime = isset($params['sort_by_product_last_mod_time']) ? $params['sort_by_product_last_mod_time'] : null;
            $sortByProductName = isset($params['sort_by_product_name']) ? $params['sort_by_product_name'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productItemsListGetAsync($accountId, $productCatalogId, $pageSize, $page, $sortByProductLastModTime, $sortByProductName, $fields);
            return $response;
        });
    }
}
