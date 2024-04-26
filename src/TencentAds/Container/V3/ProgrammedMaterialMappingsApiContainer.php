<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ProgrammedMaterialMappingsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ProgrammedMaterialMappingsApiContainer extends ApiContainer
{
    /** @var ProgrammedMaterialMappingsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ProgrammedMaterialMappingsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ProgrammedMaterialMappingsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ProgrammedMaterialMappingsApi programmedMaterialMappingsGet function
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
            $dynamicCreativeId = isset($params['dynamic_creative_id']) ? $params['dynamic_creative_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->programmedMaterialMappingsGet($accountId, $dynamicCreativeId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProgrammedMaterialMappingsApi programmedMaterialMappingsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $dynamicCreativeId = isset($params['dynamic_creative_id']) ? $params['dynamic_creative_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->programmedMaterialMappingsGetAsync($accountId, $dynamicCreativeId, $fields);
            return $response;
        });
    }
}
