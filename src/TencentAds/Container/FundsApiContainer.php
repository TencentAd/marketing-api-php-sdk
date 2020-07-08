<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\FundsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class FundsApiContainer extends ApiContainer
{
    /** @var FundsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return FundsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new FundsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle FundsApi fundsGet function
     * @param array params
     * @return \TencentAds\Model\FundsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->fundsGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle FundsApi fundsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->fundsGetAsync($accountId, $fields);
            return $response;
        });
    }
}
