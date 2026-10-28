<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WecomCustomerAcquisitionLinkApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WecomCustomerAcquisitionLinkApiContainer extends ApiContainer
{
    /** @var WecomCustomerAcquisitionLinkApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WecomCustomerAcquisitionLinkApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WecomCustomerAcquisitionLinkApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WecomCustomerAcquisitionLinkApi wecomCustomerAcquisitionLinkAdd function
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
            $response = $this->apiInstance->wecomCustomerAcquisitionLinkAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WecomCustomerAcquisitionLinkApi wecomCustomerAcquisitionLinkAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wecomCustomerAcquisitionLinkAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle WecomCustomerAcquisitionLinkApi wecomCustomerAcquisitionLinkGet function
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
            $corpId = isset($params['corp_id']) ? $params['corp_id'] : null;
            $linkId = isset($params['link_id']) ? $params['link_id'] : null;
            $cursor = isset($params['cursor']) ? $params['cursor'] : null;
            $limit = isset($params['limit']) ? $params['limit'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wecomCustomerAcquisitionLinkGet($accountId, $corpId, $linkId, $cursor, $limit, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WecomCustomerAcquisitionLinkApi wecomCustomerAcquisitionLinkGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $corpId = isset($params['corp_id']) ? $params['corp_id'] : null;
            $linkId = isset($params['link_id']) ? $params['link_id'] : null;
            $cursor = isset($params['cursor']) ? $params['cursor'] : null;
            $limit = isset($params['limit']) ? $params['limit'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wecomCustomerAcquisitionLinkGetAsync($accountId, $corpId, $linkId, $cursor, $limit, $fields);
            return $response;
        });
    }


    /**
     * Handle WecomCustomerAcquisitionLinkApi wecomCustomerAcquisitionLinkUpdate function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wecomCustomerAcquisitionLinkUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WecomCustomerAcquisitionLinkApi wecomCustomerAcquisitionLinkUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wecomCustomerAcquisitionLinkUpdateAsync($data);
            return $response;
        });
    }
}
