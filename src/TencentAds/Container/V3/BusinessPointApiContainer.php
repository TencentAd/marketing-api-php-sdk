<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\BusinessPointApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class BusinessPointApiContainer extends ApiContainer
{
    /** @var BusinessPointApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BusinessPointApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BusinessPointApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BusinessPointApi businessPointGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $siteSets = isset($params['site_sets']) ? $params['site_sets'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->businessPointGet($siteSets, $accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BusinessPointApi businessPointGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $siteSets = isset($params['site_sets']) ? $params['site_sets'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->businessPointGetAsync($siteSets, $accountId, $fields);
            return $response;
        });
    }
}
