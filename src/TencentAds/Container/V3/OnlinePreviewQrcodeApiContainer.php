<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\OnlinePreviewQrcodeApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class OnlinePreviewQrcodeApiContainer extends ApiContainer
{
    /** @var OnlinePreviewQrcodeApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OnlinePreviewQrcodeApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OnlinePreviewQrcodeApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OnlinePreviewQrcodeApi onlinePreviewQrcodeGet function
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
            $userIdType = isset($params['user_id_type']) ? $params['user_id_type'] : null;
            $previewCreativeComponents = isset($params['preview_creative_components']) ? $params['preview_creative_components'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->onlinePreviewQrcodeGet($accountId, $dynamicCreativeId, $userIdType, $previewCreativeComponents, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OnlinePreviewQrcodeApi onlinePreviewQrcodeGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $dynamicCreativeId = isset($params['dynamic_creative_id']) ? $params['dynamic_creative_id'] : null;
            $userIdType = isset($params['user_id_type']) ? $params['user_id_type'] : null;
            $previewCreativeComponents = isset($params['preview_creative_components']) ? $params['preview_creative_components'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->onlinePreviewQrcodeGetAsync($accountId, $dynamicCreativeId, $userIdType, $previewCreativeComponents, $fields);
            return $response;
        });
    }
}
