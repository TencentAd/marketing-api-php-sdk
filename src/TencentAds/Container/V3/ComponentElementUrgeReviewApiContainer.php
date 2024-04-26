<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ComponentElementUrgeReviewApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ComponentElementUrgeReviewApiContainer extends ApiContainer
{
    /** @var ComponentElementUrgeReviewApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ComponentElementUrgeReviewApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ComponentElementUrgeReviewApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ComponentElementUrgeReviewApi componentElementUrgeReviewAdd function
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
            $response = $this->apiInstance->componentElementUrgeReviewAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ComponentElementUrgeReviewApi componentElementUrgeReviewAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->componentElementUrgeReviewAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle ComponentElementUrgeReviewApi componentElementUrgeReviewGet function
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
            $componentIdList = isset($params['component_id_list']) ? $params['component_id_list'] : null;
            $elementFingerprintList = isset($params['element_fingerprint_list']) ? $params['element_fingerprint_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->componentElementUrgeReviewGet($accountId, $dynamicCreativeId, $componentIdList, $elementFingerprintList, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ComponentElementUrgeReviewApi componentElementUrgeReviewGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $dynamicCreativeId = isset($params['dynamic_creative_id']) ? $params['dynamic_creative_id'] : null;
            $componentIdList = isset($params['component_id_list']) ? $params['component_id_list'] : null;
            $elementFingerprintList = isset($params['element_fingerprint_list']) ? $params['element_fingerprint_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->componentElementUrgeReviewGetAsync($accountId, $dynamicCreativeId, $componentIdList, $elementFingerprintList, $fields);
            return $response;
        });
    }
}
