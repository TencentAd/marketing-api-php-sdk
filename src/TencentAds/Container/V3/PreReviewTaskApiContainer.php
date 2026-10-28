<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\PreReviewTaskApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class PreReviewTaskApiContainer extends ApiContainer
{
    /** @var PreReviewTaskApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return PreReviewTaskApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new PreReviewTaskApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle PreReviewTaskApi preReviewTaskAdd function
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
            $response = $this->apiInstance->preReviewTaskAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PreReviewTaskApi preReviewTaskAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->preReviewTaskAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle PreReviewTaskApi preReviewTaskGet function
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
            $response = $this->apiInstance->preReviewTaskGet($taskId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PreReviewTaskApi preReviewTaskGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $taskId = isset($params['task_id']) ? $params['task_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->preReviewTaskGetAsync($taskId, $fields);
            return $response;
        });
    }
}
