<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\XijingTemplateListApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class XijingTemplateListApiContainer extends ApiContainer
{
    /** @var XijingTemplateListApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return XijingTemplateListApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new XijingTemplateListApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle XijingTemplateListApi xijingTemplateListGet function
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
            $isInteraction = isset($params['is_interaction']) ? $params['is_interaction'] : null;
            $isPublic = isset($params['is_public']) ? $params['is_public'] : null;
            $templateSource = isset($params['template_source']) ? $params['template_source'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->xijingTemplateListGet($accountId, $pageTemplateId, $isInteraction, $isPublic, $templateSource, $pageSize, $page, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle XijingTemplateListApi xijingTemplateListGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $pageTemplateId = isset($params['page_template_id']) ? $params['page_template_id'] : null;
            $isInteraction = isset($params['is_interaction']) ? $params['is_interaction'] : null;
            $isPublic = isset($params['is_public']) ? $params['is_public'] : null;
            $templateSource = isset($params['template_source']) ? $params['template_source'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->xijingTemplateListGetAsync($accountId, $pageTemplateId, $isInteraction, $isPublic, $templateSource, $pageSize, $page, $fields);
            return $response;
        });
    }
}
