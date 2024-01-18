<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\RealtimeCostApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class RealtimeCostApiContainer extends ApiContainer
{
    /** @var RealtimeCostApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return RealtimeCostApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new RealtimeCostApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle RealtimeCostApi realtimeCostGet function
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
            $level = isset($params['level']) ? $params['level'] : null;
            $date = isset($params['date']) ? $params['date'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->realtimeCostGet($advertiserId, $level, $date, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle RealtimeCostApi realtimeCostGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $advertiserId = isset($params['advertiser_id']) ? $params['advertiser_id'] : null;
            $level = isset($params['level']) ? $params['level'] : null;
            $date = isset($params['date']) ? $params['date'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->realtimeCostGetAsync($advertiserId, $level, $date, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
