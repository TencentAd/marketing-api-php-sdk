<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\VideomakerSubtitlesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class VideomakerSubtitlesApiContainer extends ApiContainer
{
    /** @var VideomakerSubtitlesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return VideomakerSubtitlesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new VideomakerSubtitlesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle VideomakerSubtitlesApi videomakerSubtitlesAdd function
     * @param array params
     * @return \TencentAds\Model\VideomakerSubtitlesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $videoId = isset($params['video_id']) ? $params['video_id'] : null;
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $response = $this->apiInstance->videomakerSubtitlesAdd($accountId, $videoId, $videoFile, $signature);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideomakerSubtitlesApi videomakerSubtitlesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $videoId = isset($params['video_id']) ? $params['video_id'] : null;
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $response = $this->apiInstance->videomakerSubtitlesAddAsync($accountId, $videoId, $videoFile, $signature);
            return $response;
        });
    }
}
