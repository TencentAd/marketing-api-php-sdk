<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ElementAppealReviewApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ElementAppealReviewApiContainer extends ApiContainer
{
    /** @var ElementAppealReviewApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ElementAppealReviewApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ElementAppealReviewApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ElementAppealReviewApi elementAppealReviewAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->elementAppealReviewAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ElementAppealReviewApi elementAppealReviewAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->elementAppealReviewAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle ElementAppealReviewApi elementAppealReviewGet function
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
            $componentId = isset($params['component_id']) ? $params['component_id'] : null;
            $elementId = isset($params['element_id']) ? $params['element_id'] : null;
            $elementFingerPrint = isset($params['element_finger_print']) ? $params['element_finger_print'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->elementAppealReviewGet($accountId, $dynamicCreativeId, $componentId, $elementId, $elementFingerPrint, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ElementAppealReviewApi elementAppealReviewGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $dynamicCreativeId = isset($params['dynamic_creative_id']) ? $params['dynamic_creative_id'] : null;
            $componentId = isset($params['component_id']) ? $params['component_id'] : null;
            $elementId = isset($params['element_id']) ? $params['element_id'] : null;
            $elementFingerPrint = isset($params['element_finger_print']) ? $params['element_finger_print'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->elementAppealReviewGetAsync($accountId, $dynamicCreativeId, $componentId, $elementId, $elementFingerPrint, $fields);
            return $response;
        });
    }
}
