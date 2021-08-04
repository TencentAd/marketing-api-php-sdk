<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\XijingPageInteractiveApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class XijingPageInteractiveApiContainer extends ApiContainer
{
    /** @var XijingPageInteractiveApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return XijingPageInteractiveApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new XijingPageInteractiveApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle XijingPageInteractiveApi xijingPageInteractiveAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $isAutoSubmit = isset($params['is_auto_submit']) ? $params['is_auto_submit'] : null;
            $pageType = isset($params['page_type']) ? $params['page_type'] : null;
            $interactivePageType = isset($params['interactive_page_type']) ? $params['interactive_page_type'] : null;
            $pageTitle = isset($params['page_title']) ? $params['page_title'] : null;
            $pageName = isset($params['page_name']) ? $params['page_name'] : null;
            $mobileAppId = isset($params['mobile_app_id']) ? $params['mobile_app_id'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $response = $this->apiInstance->xijingPageInteractiveAdd($accountId, $isAutoSubmit, $pageType, $interactivePageType, $pageTitle, $pageName, $mobileAppId, $file);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle XijingPageInteractiveApi xijingPageInteractiveAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $isAutoSubmit = isset($params['is_auto_submit']) ? $params['is_auto_submit'] : null;
            $pageType = isset($params['page_type']) ? $params['page_type'] : null;
            $interactivePageType = isset($params['interactive_page_type']) ? $params['interactive_page_type'] : null;
            $pageTitle = isset($params['page_title']) ? $params['page_title'] : null;
            $pageName = isset($params['page_name']) ? $params['page_name'] : null;
            $mobileAppId = isset($params['mobile_app_id']) ? $params['mobile_app_id'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $response = $this->apiInstance->xijingPageInteractiveAddAsync($accountId, $isAutoSubmit, $pageType, $interactivePageType, $pageTitle, $pageName, $mobileAppId, $file);
            return $response;
        });
    }
}
