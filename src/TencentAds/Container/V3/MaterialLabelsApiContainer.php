<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MaterialLabelsApi;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MaterialLabelsApiContainer extends ApiContainer
{
    /** @var MaterialLabelsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MaterialLabelsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MaterialLabelsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MaterialLabelsApi materialLabelsAdd function
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
            $response = $this->apiInstance->materialLabelsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MaterialLabelsApi materialLabelsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialLabelsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle MaterialLabelsApi materialLabelsBind function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function bind(array $params = [])
    {
        return $this->handleMiddleware('bind', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialLabelsBind($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MaterialLabelsApi materialLabelsBindAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bindAsync(array $params = [])
    {
        return $this->handleMiddleware('bind', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialLabelsBindAsync($data);
            return $response;
        });
    }


    /**
     * Handle MaterialLabelsApi materialLabelsDelete function
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
            $response = $this->apiInstance->materialLabelsDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MaterialLabelsApi materialLabelsDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialLabelsDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle MaterialLabelsApi materialLabelsGet function
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
            $labelId = isset($params['label_id']) ? $params['label_id'] : null;
            $labelName = isset($params['label_name']) ? $params['label_name'] : null;
            $firstLabelLevelIdList = isset($params['first_label_level_id_list']) ? $params['first_label_level_id_list'] : null;
            $secondLabelLevelIdList = isset($params['second_label_level_id_list']) ? $params['second_label_level_id_list'] : null;
            $needCount = isset($params['need_count']) ? $params['need_count'] : null;
            $businessScenario = isset($params['business_scenario']) ? $params['business_scenario'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->materialLabelsGet($accountId, $labelId, $labelName, $firstLabelLevelIdList, $secondLabelLevelIdList, $needCount, $businessScenario, $orderBy, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MaterialLabelsApi materialLabelsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $labelId = isset($params['label_id']) ? $params['label_id'] : null;
            $labelName = isset($params['label_name']) ? $params['label_name'] : null;
            $firstLabelLevelIdList = isset($params['first_label_level_id_list']) ? $params['first_label_level_id_list'] : null;
            $secondLabelLevelIdList = isset($params['second_label_level_id_list']) ? $params['second_label_level_id_list'] : null;
            $needCount = isset($params['need_count']) ? $params['need_count'] : null;
            $businessScenario = isset($params['business_scenario']) ? $params['business_scenario'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->materialLabelsGetAsync($accountId, $labelId, $labelName, $firstLabelLevelIdList, $secondLabelLevelIdList, $needCount, $businessScenario, $orderBy, $page, $pageSize, $fields);
            return $response;
        });
    }


    /**
     * Handle MaterialLabelsApi materialLabelsUpdate function
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
            $response = $this->apiInstance->materialLabelsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MaterialLabelsApi materialLabelsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialLabelsUpdateAsync($data);
            return $response;
        });
    }
}
