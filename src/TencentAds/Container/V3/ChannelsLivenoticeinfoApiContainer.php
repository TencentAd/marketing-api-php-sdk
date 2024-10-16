<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ChannelsLivenoticeinfoApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ChannelsLivenoticeinfoApiContainer extends ApiContainer
{
    /** @var ChannelsLivenoticeinfoApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ChannelsLivenoticeinfoApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ChannelsLivenoticeinfoApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ChannelsLivenoticeinfoApi channelsLivenoticeinfoGet function
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
            $finderUsername = isset($params['finder_username']) ? $params['finder_username'] : null;
            $nickname = isset($params['nickname']) ? $params['nickname'] : null;
            $wechatChannelsAccountId = isset($params['wechat_channels_account_id']) ? $params['wechat_channels_account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->channelsLivenoticeinfoGet($accountId, $finderUsername, $nickname, $wechatChannelsAccountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ChannelsLivenoticeinfoApi channelsLivenoticeinfoGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $finderUsername = isset($params['finder_username']) ? $params['finder_username'] : null;
            $nickname = isset($params['nickname']) ? $params['nickname'] : null;
            $wechatChannelsAccountId = isset($params['wechat_channels_account_id']) ? $params['wechat_channels_account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->channelsLivenoticeinfoGetAsync($accountId, $finderUsername, $nickname, $wechatChannelsAccountId, $fields);
            return $response;
        });
    }
}
