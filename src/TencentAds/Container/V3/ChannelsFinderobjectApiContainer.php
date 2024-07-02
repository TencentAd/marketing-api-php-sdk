<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ChannelsFinderobjectApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ChannelsFinderobjectApiContainer extends ApiContainer
{
    /** @var ChannelsFinderobjectApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ChannelsFinderobjectApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ChannelsFinderobjectApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ChannelsFinderobjectApi channelsFinderobjectGet function
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
            $exportId = isset($params['export_id']) ? $params['export_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->channelsFinderobjectGet($accountId, $exportId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ChannelsFinderobjectApi channelsFinderobjectGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $exportId = isset($params['export_id']) ? $params['export_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->channelsFinderobjectGetAsync($accountId, $exportId, $fields);
            return $response;
        });
    }
}
