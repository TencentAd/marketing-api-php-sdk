<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DynamicAdTemplatesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DynamicAdTemplatesApiContainer extends ApiContainer
{
    /** @var DynamicAdTemplatesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DynamicAdTemplatesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DynamicAdTemplatesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DynamicAdTemplatesApi dynamicAdTemplatesGet function
     * @param array params
     * @return \TencentAds\Model\DynamicAdTemplatesGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $dynamicAdTemplateWidth = isset($params['dynamic_ad_template_width']) ? $params['dynamic_ad_template_width'] : null;
            $dynamicAdTemplateHeight = isset($params['dynamic_ad_template_height']) ? $params['dynamic_ad_template_height'] : null;
            $dynamicAdTemplateType = isset($params['dynamic_ad_template_type']) ? $params['dynamic_ad_template_type'] : null;
            $dynamicAdTemplateOwnershipType = isset($params['dynamic_ad_template_ownership_type']) ? $params['dynamic_ad_template_ownership_type'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicAdTemplatesGet($accountId, $productCatalogId, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateType, $dynamicAdTemplateOwnershipType, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicAdTemplatesApi dynamicAdTemplatesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $dynamicAdTemplateWidth = isset($params['dynamic_ad_template_width']) ? $params['dynamic_ad_template_width'] : null;
            $dynamicAdTemplateHeight = isset($params['dynamic_ad_template_height']) ? $params['dynamic_ad_template_height'] : null;
            $dynamicAdTemplateType = isset($params['dynamic_ad_template_type']) ? $params['dynamic_ad_template_type'] : null;
            $dynamicAdTemplateOwnershipType = isset($params['dynamic_ad_template_ownership_type']) ? $params['dynamic_ad_template_ownership_type'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicAdTemplatesGetAsync($accountId, $productCatalogId, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateType, $dynamicAdTemplateOwnershipType, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
