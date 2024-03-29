<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\LeadsCallRecordApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class LeadsCallRecordApiContainer extends ApiContainer
{
    /** @var LeadsCallRecordApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LeadsCallRecordApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LeadsCallRecordApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LeadsCallRecordApi leadsCallRecordGet function
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
            $leadsId = isset($params['leads_id']) ? $params['leads_id'] : null;
            $outerLeadsId = isset($params['outer_leads_id']) ? $params['outer_leads_id'] : null;
            $requestId = isset($params['request_id']) ? $params['request_id'] : null;
            $contactId = isset($params['contact_id']) ? $params['contact_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->leadsCallRecordGet($accountId, $leadsId, $outerLeadsId, $requestId, $contactId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LeadsCallRecordApi leadsCallRecordGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $leadsId = isset($params['leads_id']) ? $params['leads_id'] : null;
            $outerLeadsId = isset($params['outer_leads_id']) ? $params['outer_leads_id'] : null;
            $requestId = isset($params['request_id']) ? $params['request_id'] : null;
            $contactId = isset($params['contact_id']) ? $params['contact_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->leadsCallRecordGetAsync($accountId, $leadsId, $outerLeadsId, $requestId, $contactId, $fields);
            return $response;
        });
    }
}
