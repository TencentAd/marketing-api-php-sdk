<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ReportApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ReportApiContainer extends ApiContainer
{
    /** @var ReportApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ReportApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ReportApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ReportApi reportConversionsPredict function
     * @param array params
     * @return \TencentAds\Model\ReportConversionsPredictResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function conversionsPredict(array $params = [])
    {
        return $this->handleMiddleware('conversionsPredict', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportConversionsPredict($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReportApi reportConversionsPredictAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function conversionsPredictAsync(array $params = [])
    {
        return $this->handleMiddleware('conversionsPredict', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportConversionsPredictAsync($data);
            return $response;
        });
    }


    /**
     * Handle ReportApi reportVideoFrame function
     * @param array params
     * @return \TencentAds\Model\ReportVideoFrameResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function videoFrame(array $params = [])
    {
        return $this->handleMiddleware('videoFrame', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportVideoFrame($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReportApi reportVideoFrameAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function videoFrameAsync(array $params = [])
    {
        return $this->handleMiddleware('videoFrame', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportVideoFrameAsync($data);
            return $response;
        });
    }
}
