<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\QualificationsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class QualificationsApiContainer extends ApiContainer
{
    /** @var QualificationsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return QualificationsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new QualificationsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle QualificationsApi qualificationsAdd function
     * @param array params
     * @return \TencentAds\Model\QualificationsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->qualificationsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle QualificationsApi qualificationsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->qualificationsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle QualificationsApi qualificationsDelete function
     * @param array params
     * @return \TencentAds\Model\QualificationsDeleteResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->qualificationsDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle QualificationsApi qualificationsDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->qualificationsDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle QualificationsApi qualificationsGet function
     * @param array params
     * @return \TencentAds\Model\QualificationsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $qualificationType = isset($params['qualification_type']) ? $params['qualification_type'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->qualificationsGet($accountId, $qualificationType, $filtering, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle QualificationsApi qualificationsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $qualificationType = isset($params['qualification_type']) ? $params['qualification_type'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->qualificationsGetAsync($accountId, $qualificationType, $filtering, $fields);
            return $response;
        });
    }


    /**
     * Handle QualificationsApi qualificationsUpdate function
     * @param array params
     * @return \TencentAds\Model\QualificationsUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->qualificationsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle QualificationsApi qualificationsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->qualificationsUpdateAsync($data);
            return $response;
        });
    }
}
