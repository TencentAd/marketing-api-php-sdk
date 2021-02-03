<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DplabelAdLabelApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DplabelAdLabelApiContainer extends ApiContainer
{
    /** @var DplabelAdLabelApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DplabelAdLabelApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DplabelAdLabelApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DplabelAdLabelApi dplabelAdLabelGet function
     * @param array params
     * @return \TencentAds\Model\DplabelAdLabelGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dplabelAdLabelGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DplabelAdLabelApi dplabelAdLabelGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dplabelAdLabelGetAsync($accountId, $fields);
            return $response;
        });
    }
}
