<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DataSourceDispatchApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DataSourceDispatchApiContainer extends ApiContainer
{
    /** @var DataSourceDispatchApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DataSourceDispatchApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DataSourceDispatchApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DataSourceDispatchApi dataSourceDispatchGet function
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
            $type = isset($params['type']) ? $params['type'] : null;
            $name = isset($params['name']) ? $params['name'] : null;
            $scenes = isset($params['scenes']) ? $params['scenes'] : null;
            $switchType = isset($params['switch_type']) ? $params['switch_type'] : null;
            $accessWay = isset($params['access_way']) ? $params['access_way'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dataSourceDispatchGet($accountId, $userActionSetId, $type, $name, $scenes, $switchType, $accessWay, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DataSourceDispatchApi dataSourceDispatchGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userActionSetId = isset($params['user_action_set_id']) ? $params['user_action_set_id'] : null;
            $type = isset($params['type']) ? $params['type'] : null;
            $name = isset($params['name']) ? $params['name'] : null;
            $scenes = isset($params['scenes']) ? $params['scenes'] : null;
            $switchType = isset($params['switch_type']) ? $params['switch_type'] : null;
            $accessWay = isset($params['access_way']) ? $params['access_way'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dataSourceDispatchGetAsync($accountId, $userActionSetId, $type, $name, $scenes, $switchType, $accessWay, $fields);
            return $response;
        });
    }


    /**
     * Handle DataSourceDispatchApi dataSourceDispatchUpdate function
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
            $response = $this->apiInstance->dataSourceDispatchUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DataSourceDispatchApi dataSourceDispatchUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dataSourceDispatchUpdateAsync($data);
            return $response;
        });
    }
}
