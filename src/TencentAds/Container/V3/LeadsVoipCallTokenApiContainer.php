<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\LeadsVoipCallTokenApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class LeadsVoipCallTokenApiContainer extends ApiContainer
{
    /** @var LeadsVoipCallTokenApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LeadsVoipCallTokenApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LeadsVoipCallTokenApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LeadsVoipCallTokenApi leadsVoipCallTokenGet function
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
            $userId = isset($params['user_id']) ? $params['user_id'] : null;
            $requestId = isset($params['request_id']) ? $params['request_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->leadsVoipCallTokenGet($accountId, $userId, $requestId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LeadsVoipCallTokenApi leadsVoipCallTokenGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userId = isset($params['user_id']) ? $params['user_id'] : null;
            $requestId = isset($params['request_id']) ? $params['request_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->leadsVoipCallTokenGetAsync($accountId, $userId, $requestId, $fields);
            return $response;
        });
    }
}
