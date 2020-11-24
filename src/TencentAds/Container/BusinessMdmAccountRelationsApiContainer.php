<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BusinessMdmAccountRelationsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BusinessMdmAccountRelationsApiContainer extends ApiContainer
{
    /** @var BusinessMdmAccountRelationsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BusinessMdmAccountRelationsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BusinessMdmAccountRelationsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BusinessMdmAccountRelationsApi businessMdmAccountRelationsGet function
     * @param array params
     * @return \TencentAds\Model\BusinessMdmAccountRelationsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $relationType = isset($params['relation_type']) ? $params['relation_type'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->businessMdmAccountRelationsGet($accountId, $relationType, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BusinessMdmAccountRelationsApi businessMdmAccountRelationsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $relationType = isset($params['relation_type']) ? $params['relation_type'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->businessMdmAccountRelationsGetAsync($accountId, $relationType, $page, $pageSize, $fields);
            return $response;
        });
    }
}
