<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\SceneSpecTagsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class SceneSpecTagsApiContainer extends ApiContainer
{
    /** @var SceneSpecTagsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return SceneSpecTagsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new SceneSpecTagsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle SceneSpecTagsApi sceneSpecTagsGet function
     * @param array params
     * @return \TencentAds\Model\SceneSpecTagsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $type = isset($params['type']) ? $params['type'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->sceneSpecTagsGet($type, $accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SceneSpecTagsApi sceneSpecTagsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $type = isset($params['type']) ? $params['type'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->sceneSpecTagsGetAsync($type, $accountId, $fields);
            return $response;
        });
    }
}
