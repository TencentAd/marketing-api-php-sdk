<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\MaterialAuditApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class MaterialAuditApiContainer extends ApiContainer
{
    /** @var MaterialAuditApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MaterialAuditApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MaterialAuditApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MaterialAuditApi materialAuditList function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function list(array $params = [])
    {
        return $this->handleMiddleware('list', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialAuditList($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MaterialAuditApi materialAuditListAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAsync(array $params = [])
    {
        return $this->handleMiddleware('list', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialAuditListAsync($data);
            return $response;
        });
    }


    /**
     * Handle MaterialAuditApi materialAuditSubmit function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function submit(array $params = [])
    {
        return $this->handleMiddleware('submit', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialAuditSubmit($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MaterialAuditApi materialAuditSubmitAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitAsync(array $params = [])
    {
        return $this->handleMiddleware('submit', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialAuditSubmitAsync($data);
            return $response;
        });
    }
}
