<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CustomTagsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CustomTagsApiContainer extends ApiContainer
{
    /** @var CustomTagsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CustomTagsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CustomTagsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CustomTagsApi customTagsAdd function
     * @param array params
     * @return \TencentAds\Model\CustomTagsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customTagsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomTagsApi customTagsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customTagsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle CustomTagsApi customTagsDelete function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customTagsDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomTagsApi customTagsDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customTagsDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle CustomTagsApi customTagsGet function
     * @param array params
     * @return \TencentAds\Model\CustomTagsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $parentTagId = isset($params['parent_tag_id']) ? $params['parent_tag_id'] : null;
            $tagId = isset($params['tag_id']) ? $params['tag_id'] : null;
            $tagCode = isset($params['tag_code']) ? $params['tag_code'] : null;
            $platform = isset($params['platform']) ? $params['platform'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->customTagsGet($accountId, $parentTagId, $tagId, $tagCode, $platform, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomTagsApi customTagsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $parentTagId = isset($params['parent_tag_id']) ? $params['parent_tag_id'] : null;
            $tagId = isset($params['tag_id']) ? $params['tag_id'] : null;
            $tagCode = isset($params['tag_code']) ? $params['tag_code'] : null;
            $platform = isset($params['platform']) ? $params['platform'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->customTagsGetAsync($accountId, $parentTagId, $tagId, $tagCode, $platform, $page, $pageSize, $fields);
            return $response;
        });
    }


    /**
     * Handle CustomTagsApi customTagsUpdate function
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
            $response = $this->apiInstance->customTagsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomTagsApi customTagsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customTagsUpdateAsync($data);
            return $response;
        });
    }
}
