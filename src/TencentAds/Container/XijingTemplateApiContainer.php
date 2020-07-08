<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\XijingTemplateApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class XijingTemplateApiContainer extends ApiContainer
{
    /** @var XijingTemplateApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return XijingTemplateApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new XijingTemplateApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle XijingTemplateApi xijingTemplateGet function
     * @param array params
     * @return \TencentAds\Model\XijingTemplateGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $templateId = isset($params['template_id']) ? $params['template_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->xijingTemplateGet($accountId, $templateId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle XijingTemplateApi xijingTemplateGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $templateId = isset($params['template_id']) ? $params['template_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->xijingTemplateGetAsync($accountId, $templateId, $fields);
            return $response;
        });
    }
}
