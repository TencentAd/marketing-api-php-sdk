<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdLabelApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdLabelApiContainer extends ApiContainer
{
    /** @var AdLabelApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdLabelApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdLabelApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdLabelApi adLabelGet function
     * @param array params
     * @return \TencentAds\Model\AdLabelGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adLabelGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdLabelApi adLabelGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adLabelGetAsync($accountId, $fields);
            return $response;
        });
    }
}
