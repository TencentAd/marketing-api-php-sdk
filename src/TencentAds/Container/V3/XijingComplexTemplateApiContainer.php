<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\XijingComplexTemplateApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class XijingComplexTemplateApiContainer extends ApiContainer
{
    /** @var XijingComplexTemplateApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return XijingComplexTemplateApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new XijingComplexTemplateApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle XijingComplexTemplateApi xijingComplexTemplateGet function
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
            $pageTemplateId = isset($params['page_template_id']) ? $params['page_template_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->xijingComplexTemplateGet($accountId, $pageTemplateId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle XijingComplexTemplateApi xijingComplexTemplateGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $pageTemplateId = isset($params['page_template_id']) ? $params['page_template_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->xijingComplexTemplateGetAsync($accountId, $pageTemplateId, $fields);
            return $response;
        });
    }
}
