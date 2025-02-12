<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WalletBasicInfoApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WalletBasicInfoApiContainer extends ApiContainer
{
    /** @var WalletBasicInfoApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WalletBasicInfoApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WalletBasicInfoApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WalletBasicInfoApi walletBasicInfoGet function
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
            $walletId = isset($params['wallet_id']) ? $params['wallet_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->walletBasicInfoGet($accountId, $walletId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WalletBasicInfoApi walletBasicInfoGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $walletId = isset($params['wallet_id']) ? $params['wallet_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->walletBasicInfoGetAsync($accountId, $walletId, $fields);
            return $response;
        });
    }
}
