<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\SaasMiniprogramPrereviewApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class SaasMiniprogramPrereviewApiContainer extends ApiContainer
{
    /** @var SaasMiniprogramPrereviewApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return SaasMiniprogramPrereviewApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new SaasMiniprogramPrereviewApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle SaasMiniprogramPrereviewApi saasMiniprogramPrereviewAdd function
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
            $response = $this->apiInstance->saasMiniprogramPrereviewAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SaasMiniprogramPrereviewApi saasMiniprogramPrereviewAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->saasMiniprogramPrereviewAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle SaasMiniprogramPrereviewApi saasMiniprogramPrereviewGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $taskId = isset($params['task_id']) ? $params['task_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->saasMiniprogramPrereviewGet($taskId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SaasMiniprogramPrereviewApi saasMiniprogramPrereviewGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $taskId = isset($params['task_id']) ? $params['task_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->saasMiniprogramPrereviewGetAsync($taskId, $fields);
            return $response;
        });
    }
}
