<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CustomAudiencesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CustomAudiencesApiContainer extends ApiContainer
{
    /** @var CustomAudiencesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CustomAudiencesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CustomAudiencesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CustomAudiencesApi customAudiencesAdd function
     * @param array params
     * @return \TencentAds\Model\CustomAudiencesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customAudiencesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomAudiencesApi customAudiencesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customAudiencesAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle CustomAudiencesApi customAudiencesDelete function
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
            $response = $this->apiInstance->customAudiencesDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomAudiencesApi customAudiencesDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customAudiencesDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle CustomAudiencesApi customAudiencesGet function
     * @param array params
     * @return \TencentAds\Model\CustomAudiencesGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $audienceId = isset($params['audience_id']) ? $params['audience_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $platform = isset($params['platform']) ? $params['platform'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->customAudiencesGet($accountId, $audienceId, $page, $pageSize, $platform, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomAudiencesApi customAudiencesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $audienceId = isset($params['audience_id']) ? $params['audience_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $platform = isset($params['platform']) ? $params['platform'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->customAudiencesGetAsync($accountId, $audienceId, $page, $pageSize, $platform, $fields);
            return $response;
        });
    }


    /**
     * Handle CustomAudiencesApi customAudiencesUpdate function
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
            $response = $this->apiInstance->customAudiencesUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomAudiencesApi customAudiencesUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customAudiencesUpdateAsync($data);
            return $response;
        });
    }
}
