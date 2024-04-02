<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ProductsSystemStatusApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ProductsSystemStatusApiContainer extends ApiContainer
{
    /** @var ProductsSystemStatusApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ProductsSystemStatusApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ProductsSystemStatusApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ProductsSystemStatusApi productsSystemStatusGet function
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
            $feedId = isset($params['feed_id']) ? $params['feed_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productsSystemStatusGet($accountId, $productCatalogId, $feedId, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProductsSystemStatusApi productsSystemStatusGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $feedId = isset($params['feed_id']) ? $params['feed_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productsSystemStatusGetAsync($accountId, $productCatalogId, $feedId, $page, $pageSize, $fields);
            return $response;
        });
    }
}
