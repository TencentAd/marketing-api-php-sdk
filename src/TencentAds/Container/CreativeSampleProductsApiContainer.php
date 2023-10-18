<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CreativeSampleProductsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CreativeSampleProductsApiContainer extends ApiContainer
{
    /** @var CreativeSampleProductsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CreativeSampleProductsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CreativeSampleProductsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CreativeSampleProductsApi creativeSampleProductsGet function
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
            $productOuterIds = isset($params['product_outer_ids']) ? $params['product_outer_ids'] : null;
            $productSeriesId = isset($params['product_series_id']) ? $params['product_series_id'] : null;
            $templateId = isset($params['template_id']) ? $params['template_id'] : null;
            $templateType = isset($params['template_type']) ? $params['template_type'] : null;
            $imageId = isset($params['image_id']) ? $params['image_id'] : null;
            $videoId = isset($params['video_id']) ? $params['video_id'] : null;
            $productFields = isset($params['product_fields']) ? $params['product_fields'] : null;
            $limit = isset($params['limit']) ? $params['limit'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->creativeSampleProductsGet($accountId, $productCatalogId, $productOuterIds, $productSeriesId, $templateId, $templateType, $imageId, $videoId, $productFields, $limit, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CreativeSampleProductsApi creativeSampleProductsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $productOuterIds = isset($params['product_outer_ids']) ? $params['product_outer_ids'] : null;
            $productSeriesId = isset($params['product_series_id']) ? $params['product_series_id'] : null;
            $templateId = isset($params['template_id']) ? $params['template_id'] : null;
            $templateType = isset($params['template_type']) ? $params['template_type'] : null;
            $imageId = isset($params['image_id']) ? $params['image_id'] : null;
            $videoId = isset($params['video_id']) ? $params['video_id'] : null;
            $productFields = isset($params['product_fields']) ? $params['product_fields'] : null;
            $limit = isset($params['limit']) ? $params['limit'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->creativeSampleProductsGetAsync($accountId, $productCatalogId, $productOuterIds, $productSeriesId, $templateId, $templateType, $imageId, $videoId, $productFields, $limit, $fields);
            return $response;
        });
    }
}
