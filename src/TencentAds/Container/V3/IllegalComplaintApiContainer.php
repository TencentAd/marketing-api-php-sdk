<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\IllegalComplaintApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class IllegalComplaintApiContainer extends ApiContainer
{
    /** @var IllegalComplaintApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return IllegalComplaintApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new IllegalComplaintApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle IllegalComplaintApi illegalComplaintAdd function
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
            $illegalOrderId = isset($params['illegal_order_id']) ? $params['illegal_order_id'] : null;
            $complaintReason = isset($params['complaint_reason']) ? $params['complaint_reason'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $response = $this->apiInstance->illegalComplaintAdd($accountId, $illegalOrderId, $complaintReason, $file);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle IllegalComplaintApi illegalComplaintAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $illegalOrderId = isset($params['illegal_order_id']) ? $params['illegal_order_id'] : null;
            $complaintReason = isset($params['complaint_reason']) ? $params['complaint_reason'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $response = $this->apiInstance->illegalComplaintAddAsync($accountId, $illegalOrderId, $complaintReason, $file);
            return $response;
        });
    }


    /**
     * Handle IllegalComplaintApi illegalComplaintGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->illegalComplaintGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle IllegalComplaintApi illegalComplaintGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->illegalComplaintGetAsync($data);
            return $response;
        });
    }
}
