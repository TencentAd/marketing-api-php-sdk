<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MuseAiTaskApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MuseAiTaskApiContainer extends ApiContainer
{
    /** @var MuseAiTaskApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MuseAiTaskApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MuseAiTaskApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MuseAiTaskApi museAiTaskAdd function
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
            $response = $this->apiInstance->museAiTaskAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MuseAiTaskApi museAiTaskAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->museAiTaskAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle MuseAiTaskApi museAiTaskGet function
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
            $taskId = isset($params['task_id']) ? $params['task_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->museAiTaskGet($accountId, $taskId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MuseAiTaskApi museAiTaskGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $taskId = isset($params['task_id']) ? $params['task_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->museAiTaskGetAsync($accountId, $taskId, $fields);
            return $response;
        });
    }
}
