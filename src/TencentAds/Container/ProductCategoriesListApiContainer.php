<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ProductCategoriesListApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ProductCategoriesListApiContainer extends ApiContainer
{
    /** @var ProductCategoriesListApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ProductCategoriesListApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ProductCategoriesListApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ProductCategoriesListApi productCategoriesListGet function
     * @param array params
     * @return \TencentAds\Model\ProductCategoriesListGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $level = isset($params['level']) ? $params['level'] : null;
            $categoryId = isset($params['category_id']) ? $params['category_id'] : null;
            $categoryName = isset($params['category_name']) ? $params['category_name'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productCategoriesListGet($accountId, $productCatalogId, $page, $pageSize, $level, $categoryId, $categoryName, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProductCategoriesListApi productCategoriesListGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $level = isset($params['level']) ? $params['level'] : null;
            $categoryId = isset($params['category_id']) ? $params['category_id'] : null;
            $categoryName = isset($params['category_name']) ? $params['category_name'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productCategoriesListGetAsync($accountId, $productCatalogId, $page, $pageSize, $level, $categoryId, $categoryName, $fields);
            return $response;
        });
    }
}
