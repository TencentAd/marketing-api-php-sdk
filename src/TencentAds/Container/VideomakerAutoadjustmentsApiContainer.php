<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\VideomakerAutoadjustmentsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class VideomakerAutoadjustmentsApiContainer extends ApiContainer
{
    /** @var VideomakerAutoadjustmentsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return VideomakerAutoadjustmentsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new VideomakerAutoadjustmentsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle VideomakerAutoadjustmentsApi videomakerAutoadjustmentsAdd function
     * @param array params
     * @return \TencentAds\Model\VideomakerAutoadjustmentsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $adjustmentType = isset($params['adjustment_type']) ? $params['adjustment_type'] : null;
            $videoId = isset($params['video_id']) ? $params['video_id'] : null;
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $smartAdjustment = isset($params['smart_adjustment']) ? $params['smart_adjustment'] : null;
            $manualAdjustment = isset($params['manual_adjustment']) ? $params['manual_adjustment'] : null;
            $response = $this->apiInstance->videomakerAutoadjustmentsAdd($accountId, $adjustmentType, $videoId, $videoFile, $signature, $smartAdjustment, $manualAdjustment);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideomakerAutoadjustmentsApi videomakerAutoadjustmentsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $adjustmentType = isset($params['adjustment_type']) ? $params['adjustment_type'] : null;
            $videoId = isset($params['video_id']) ? $params['video_id'] : null;
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $smartAdjustment = isset($params['smart_adjustment']) ? $params['smart_adjustment'] : null;
            $manualAdjustment = isset($params['manual_adjustment']) ? $params['manual_adjustment'] : null;
            $response = $this->apiInstance->videomakerAutoadjustmentsAddAsync($accountId, $adjustmentType, $videoId, $videoFile, $signature, $smartAdjustment, $manualAdjustment);
            return $response;
        });
    }
}
