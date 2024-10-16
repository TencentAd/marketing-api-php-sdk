<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\OperationLogListApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class OperationLogListApiContainer extends ApiContainer
{
    /** @var OperationLogListApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OperationLogListApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OperationLogListApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OperationLogListApi operationLogListGet function
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
            $operationObjectType = isset($params['operation_object_type']) ? $params['operation_object_type'] : null;
            $startDate = isset($params['start_date']) ? $params['start_date'] : null;
            $endDate = isset($params['end_date']) ? $params['end_date'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $objectId = isset($params['object_id']) ? $params['object_id'] : null;
            $operatorPlatformList = isset($params['operator_platform_list']) ? $params['operator_platform_list'] : null;
            $operationActionList = isset($params['operation_action_list']) ? $params['operation_action_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->operationLogListGet($accountId, $operationObjectType, $startDate, $endDate, $page, $pageSize, $objectId, $operatorPlatformList, $operationActionList, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OperationLogListApi operationLogListGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $operationObjectType = isset($params['operation_object_type']) ? $params['operation_object_type'] : null;
            $startDate = isset($params['start_date']) ? $params['start_date'] : null;
            $endDate = isset($params['end_date']) ? $params['end_date'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $objectId = isset($params['object_id']) ? $params['object_id'] : null;
            $operatorPlatformList = isset($params['operator_platform_list']) ? $params['operator_platform_list'] : null;
            $operationActionList = isset($params['operation_action_list']) ? $params['operation_action_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->operationLogListGetAsync($accountId, $operationObjectType, $startDate, $endDate, $page, $pageSize, $objectId, $operatorPlatformList, $operationActionList, $fields);
            return $response;
        });
    }
}
