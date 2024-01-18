<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\GameFeatureTagsApi;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class GameFeatureTagsApiContainer extends ApiContainer
{
    /** @var GameFeatureTagsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return GameFeatureTagsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new GameFeatureTagsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle GameFeatureTagsApi gameFeatureTagsGet function
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
            $type = isset($params['type']) ? $params['type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->gameFeatureTagsGet($accountId, $type, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle GameFeatureTagsApi gameFeatureTagsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $type = isset($params['type']) ? $params['type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->gameFeatureTagsGetAsync($accountId, $type, $fields);
            return $response;
        });
    }
}
