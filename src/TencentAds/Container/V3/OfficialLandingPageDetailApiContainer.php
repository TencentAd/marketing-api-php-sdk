<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\OfficialLandingPageDetailApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class OfficialLandingPageDetailApiContainer extends ApiContainer
{
    /** @var OfficialLandingPageDetailApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OfficialLandingPageDetailApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OfficialLandingPageDetailApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OfficialLandingPageDetailApi officialLandingPageDetailGet function
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
            $pageId = isset($params['page_id']) ? $params['page_id'] : null;
            $protoVersion = isset($params['proto_version']) ? $params['proto_version'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->officialLandingPageDetailGet($accountId, $pageId, $protoVersion, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OfficialLandingPageDetailApi officialLandingPageDetailGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $pageId = isset($params['page_id']) ? $params['page_id'] : null;
            $protoVersion = isset($params['proto_version']) ? $params['proto_version'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->officialLandingPageDetailGetAsync($accountId, $pageId, $protoVersion, $fields);
            return $response;
        });
    }
}
