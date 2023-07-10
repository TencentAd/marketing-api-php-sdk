<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DataSetApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DataSetApiContainer extends ApiContainer
{
    /** @var DataSetApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DataSetApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DataSetApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DataSetApi dataSetAdd function
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
            $response = $this->apiInstance->dataSetAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DataSetApi dataSetAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dataSetAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle DataSetApi dataSetGet function
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
            $userActionSetId = isset($params['user_action_set_id']) ? $params['user_action_set_id'] : null;
            $dataSetId = isset($params['data_set_id']) ? $params['data_set_id'] : null;
            $envType = isset($params['env_type']) ? $params['env_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dataSetGet($accountId, $userActionSetId, $dataSetId, $envType, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DataSetApi dataSetGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userActionSetId = isset($params['user_action_set_id']) ? $params['user_action_set_id'] : null;
            $dataSetId = isset($params['data_set_id']) ? $params['data_set_id'] : null;
            $envType = isset($params['env_type']) ? $params['env_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dataSetGetAsync($accountId, $userActionSetId, $dataSetId, $envType, $fields);
            return $response;
        });
    }
}
