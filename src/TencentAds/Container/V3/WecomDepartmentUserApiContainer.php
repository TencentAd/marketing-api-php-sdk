<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WecomDepartmentUserApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WecomDepartmentUserApiContainer extends ApiContainer
{
    /** @var WecomDepartmentUserApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WecomDepartmentUserApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WecomDepartmentUserApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WecomDepartmentUserApi wecomDepartmentUserGet function
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
            $departmentId = isset($params['department_id']) ? $params['department_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wecomDepartmentUserGet($accountId, $corpId, $departmentId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WecomDepartmentUserApi wecomDepartmentUserGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $corpId = isset($params['corp_id']) ? $params['corp_id'] : null;
            $departmentId = isset($params['department_id']) ? $params['department_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wecomDepartmentUserGetAsync($accountId, $corpId, $departmentId, $fields);
            return $response;
        });
    }
}
