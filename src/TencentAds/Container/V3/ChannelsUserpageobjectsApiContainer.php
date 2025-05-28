<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ChannelsUserpageobjectsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ChannelsUserpageobjectsApiContainer extends ApiContainer
{
    /** @var ChannelsUserpageobjectsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ChannelsUserpageobjectsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ChannelsUserpageobjectsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ChannelsUserpageobjectsApi channelsUserpageobjectsGet function
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
            $lastBuffer = isset($params['last_buffer']) ? $params['last_buffer'] : null;
            $count = isset($params['count']) ? $params['count'] : null;
            $wechatChannelsAccountId = isset($params['wechat_channels_account_id']) ? $params['wechat_channels_account_id'] : null;
            $adContext = isset($params['ad_context']) ? $params['ad_context'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->channelsUserpageobjectsGet($accountId, $finderUsername, $nickname, $lastBuffer, $count, $wechatChannelsAccountId, $adContext, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ChannelsUserpageobjectsApi channelsUserpageobjectsGetAsync function
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
            $lastBuffer = isset($params['last_buffer']) ? $params['last_buffer'] : null;
            $count = isset($params['count']) ? $params['count'] : null;
            $wechatChannelsAccountId = isset($params['wechat_channels_account_id']) ? $params['wechat_channels_account_id'] : null;
            $adContext = isset($params['ad_context']) ? $params['ad_context'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->channelsUserpageobjectsGetAsync($accountId, $finderUsername, $nickname, $lastBuffer, $count, $wechatChannelsAccountId, $adContext, $fields);
            return $response;
        });
    }
}
