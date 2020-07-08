<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ProductCatalogsReportsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ProductCatalogsReportsApiContainer extends ApiContainer
{
    /** @var ProductCatalogsReportsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ProductCatalogsReportsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ProductCatalogsReportsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ProductCatalogsReportsApi productCatalogsReportsGet function
     * @param array params
     * @return \TencentAds\Model\ProductCatalogsReportsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productCatalogsReportsGet($accountId, $productCatalogId, $dateRange, $filtering, $groupBy, $orderBy, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProductCatalogsReportsApi productCatalogsReportsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $groupBy = isset($params['group_by']) ? $params['group_by'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productCatalogsReportsGetAsync($accountId, $productCatalogId, $dateRange, $filtering, $groupBy, $orderBy, $fields);
            return $response;
        });
    }
}
