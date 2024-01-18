<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MergeFundTypeFundsApi;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MergeFundTypeFundsApiContainer extends ApiContainer
{
    /** @var MergeFundTypeFundsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MergeFundTypeFundsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MergeFundTypeFundsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MergeFundTypeFundsApi mergeFundTypeFundsGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $advertiserId = isset($params['advertiser_id']) ? $params['advertiser_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->mergeFundTypeFundsGet($advertiserId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MergeFundTypeFundsApi mergeFundTypeFundsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $advertiserId = isset($params['advertiser_id']) ? $params['advertiser_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->mergeFundTypeFundsGetAsync($advertiserId, $fields);
            return $response;
        });
    }
}
