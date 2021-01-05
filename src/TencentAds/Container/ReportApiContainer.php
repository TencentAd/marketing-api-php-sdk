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
     * Handle ReportApi reportJdCreativeTemplateHourlyReport function
     * @param array params
     * @return \TencentAds\Model\ReportJdCreativeTemplateHourlyReportResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function jdCreativeTemplateHourlyReport(array $params = [])
    {
        return $this->handleMiddleware('jdCreativeTemplateHourlyReport', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportJdCreativeTemplateHourlyReport($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReportApi reportJdCreativeTemplateHourlyReportAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function jdCreativeTemplateHourlyReportAsync(array $params = [])
    {
        return $this->handleMiddleware('jdCreativeTemplateHourlyReport', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportJdCreativeTemplateHourlyReportAsync($data);
            return $response;
        });
    }


    /**
     * Handle ReportApi reportJdOfflineReportFile function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function jdOfflineReportFile(array $params = [])
    {
        return $this->handleMiddleware('jdOfflineReportFile', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $task = isset($params['task']) ? $params['task'] : null;
            $date = isset($params['date']) ? $params['date'] : null;
            $hour = isset($params['hour']) ? $params['hour'] : null;
            $timeFrame = isset($params['time_frame']) ? $params['time_frame'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->reportJdOfflineReportFile($accountId, $task, $date, $hour, $timeFrame, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReportApi reportJdOfflineReportFileAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function jdOfflineReportFileAsync(array $params = [])
    {
        return $this->handleMiddleware('jdOfflineReportFile', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $task = isset($params['task']) ? $params['task'] : null;
            $date = isset($params['date']) ? $params['date'] : null;
            $hour = isset($params['hour']) ? $params['hour'] : null;
            $timeFrame = isset($params['time_frame']) ? $params['time_frame'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->reportJdOfflineReportFileAsync($accountId, $task, $date, $hour, $timeFrame, $fields);
            return $response;
        });
    }


    /**
     * Handle ReportApi reportJdOfflineReportStatus function
     * @param array params
     * @return \TencentAds\Model\ReportJdOfflineReportStatusResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function jdOfflineReportStatus(array $params = [])
    {
        return $this->handleMiddleware('jdOfflineReportStatus', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportJdOfflineReportStatus($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReportApi reportJdOfflineReportStatusAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function jdOfflineReportStatusAsync(array $params = [])
    {
        return $this->handleMiddleware('jdOfflineReportStatus', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportJdOfflineReportStatusAsync($data);
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
