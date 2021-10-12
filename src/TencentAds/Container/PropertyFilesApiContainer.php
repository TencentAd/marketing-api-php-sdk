<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\PropertyFilesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class PropertyFilesApiContainer extends ApiContainer
{
    /** @var PropertyFilesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return PropertyFilesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new PropertyFilesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle PropertyFilesApi propertyFilesAdd function
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
            $propertySetId = isset($params['property_set_id']) ? $params['property_set_id'] : null;
            $sessionId = isset($params['session_id']) ? $params['session_id'] : null;
            $fileName = isset($params['file_name']) ? $params['file_name'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $response = $this->apiInstance->propertyFilesAdd($accountId, $propertySetId, $sessionId, $fileName, $file);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PropertyFilesApi propertyFilesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $propertySetId = isset($params['property_set_id']) ? $params['property_set_id'] : null;
            $sessionId = isset($params['session_id']) ? $params['session_id'] : null;
            $fileName = isset($params['file_name']) ? $params['file_name'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $response = $this->apiInstance->propertyFilesAddAsync($accountId, $propertySetId, $sessionId, $fileName, $file);
            return $response;
        });
    }
}
