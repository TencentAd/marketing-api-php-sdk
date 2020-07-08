<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CustomDataSaltApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CustomDataSaltApiContainer extends ApiContainer
{
    /** @var CustomDataSaltApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CustomDataSaltApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CustomDataSaltApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CustomDataSaltApi customDataSaltGet function
     * @param array params
     * @return \TencentAds\Model\CustomDataSaltGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customDataSaltGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomDataSaltApi customDataSaltGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customDataSaltGetAsync($data);
            return $response;
        });
    }
}
