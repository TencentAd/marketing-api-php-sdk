<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ProductItemsDetailApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ProductItemsDetailApiContainer extends ApiContainer
{
    /** @var ProductItemsDetailApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ProductItemsDetailApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ProductItemsDetailApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ProductItemsDetailApi productItemsDetailGet function
     * @param array params
     * @return \TencentAds\Model\ProductItemsDetailGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $productOuterId = isset($params['product_outer_id']) ? $params['product_outer_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productItemsDetailGet($accountId, $productCatalogId, $productOuterId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProductItemsDetailApi productItemsDetailGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $productOuterId = isset($params['product_outer_id']) ? $params['product_outer_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productItemsDetailGetAsync($accountId, $productCatalogId, $productOuterId, $fields);
            return $response;
        });
    }
}
