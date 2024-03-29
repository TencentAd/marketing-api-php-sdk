<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\DynamicAdVideoApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class DynamicAdVideoApiContainer extends ApiContainer
{
    /** @var DynamicAdVideoApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DynamicAdVideoApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DynamicAdVideoApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DynamicAdVideoApi dynamicAdVideoAdd function
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
            $response = $this->apiInstance->dynamicAdVideoAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicAdVideoApi dynamicAdVideoAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dynamicAdVideoAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle DynamicAdVideoApi dynamicAdVideoGet function
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
            $productMode = isset($params['product_mode']) ? $params['product_mode'] : null;
            $productOuterId = isset($params['product_outer_id']) ? $params['product_outer_id'] : null;
            $dynamicAdTemplateId = isset($params['dynamic_ad_template_id']) ? $params['dynamic_ad_template_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicAdVideoGet($accountId, $productCatalogId, $productMode, $productOuterId, $dynamicAdTemplateId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicAdVideoApi dynamicAdVideoGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $productMode = isset($params['product_mode']) ? $params['product_mode'] : null;
            $productOuterId = isset($params['product_outer_id']) ? $params['product_outer_id'] : null;
            $dynamicAdTemplateId = isset($params['dynamic_ad_template_id']) ? $params['dynamic_ad_template_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicAdVideoGetAsync($accountId, $productCatalogId, $productMode, $productOuterId, $dynamicAdTemplateId, $fields);
            return $response;
        });
    }
}
