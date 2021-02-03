<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AndroidChannelPackagesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AndroidChannelPackagesApiContainer extends ApiContainer
{
    /** @var AndroidChannelPackagesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AndroidChannelPackagesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AndroidChannelPackagesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AndroidChannelPackagesApi androidChannelPackagesGet function
     * @param array params
     * @return \TencentAds\Model\AndroidChannelPackagesGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $androidAppId = isset($params['android_app_id']) ? $params['android_app_id'] : null;
            $myappAuthKey = isset($params['myapp_auth_key']) ? $params['myapp_auth_key'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->androidChannelPackagesGet($accountId, $androidAppId, $myappAuthKey, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AndroidChannelPackagesApi androidChannelPackagesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $androidAppId = isset($params['android_app_id']) ? $params['android_app_id'] : null;
            $myappAuthKey = isset($params['myapp_auth_key']) ? $params['myapp_auth_key'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->androidChannelPackagesGetAsync($accountId, $androidAppId, $myappAuthKey, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
