<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\LocalStoresSearchInfoApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class LocalStoresSearchInfoApiContainer extends ApiContainer
{
    /** @var LocalStoresSearchInfoApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LocalStoresSearchInfoApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LocalStoresSearchInfoApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LocalStoresSearchInfoApi localStoresSearchInfoGet function
     * @param array params
     * @return \TencentAds\Model\LocalStoresSearchInfoGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $keyWord = isset($params['key_word']) ? $params['key_word'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->localStoresSearchInfoGet($accountId, $keyWord, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LocalStoresSearchInfoApi localStoresSearchInfoGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $keyWord = isset($params['key_word']) ? $params['key_word'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->localStoresSearchInfoGetAsync($accountId, $keyWord, $page, $pageSize, $fields);
            return $response;
        });
    }
}
