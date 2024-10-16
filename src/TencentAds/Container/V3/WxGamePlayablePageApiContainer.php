<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WxGamePlayablePageApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WxGamePlayablePageApiContainer extends ApiContainer
{
    /** @var WxGamePlayablePageApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WxGamePlayablePageApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WxGamePlayablePageApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WxGamePlayablePageApi wxGamePlayablePageGet function
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
            $appId = isset($params['app_id']) ? $params['app_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wxGamePlayablePageGet($accountId, $appId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WxGamePlayablePageApi wxGamePlayablePageGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $appId = isset($params['app_id']) ? $params['app_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wxGamePlayablePageGetAsync($accountId, $appId, $fields);
            return $response;
        });
    }
}
