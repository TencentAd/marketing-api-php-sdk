<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ComponentsMetadataApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ComponentsMetadataApiContainer extends ApiContainer
{
    /** @var ComponentsMetadataApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ComponentsMetadataApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ComponentsMetadataApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ComponentsMetadataApi componentsMetadataGet function
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
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->componentsMetadataGet($accountId, $filtering, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ComponentsMetadataApi componentsMetadataGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->componentsMetadataGetAsync($accountId, $filtering, $fields);
            return $response;
        });
    }
}
