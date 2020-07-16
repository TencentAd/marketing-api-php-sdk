<?php
namespace TencentAds\Tools;

use GuzzleHttp\Client;
use TencentAds\ApiException;
use TencentAds\Exception\TencentAdsSDKException;
use TencentAds\Helper\Url;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\BatchHandler;
use TencentAds\Kernel\BatchResponse;
use TencentAds\TencentAds;

class BatchRequest extends ApiContainer
{
    /**
     * Send batch request
     *
     * @param $accountId
     * @param $batchRequest
     * @return BatchResponse[]
     * @throws ApiException
     * @throws TencentAdsSDKException
     */
    public function sendBatchRequest($accountId, $batchRequest)
    {
        $batchRequestSpec = $this->buildBatchRequest($accountId, $batchRequest);
        $data = $this->app->batchRequests()->add([
            'batch_request_spec' => $batchRequestSpec,
            'account_id' => $accountId,
        ]);
        $responses = $data->getList();
        $batchHandler = BatchHandler::getInstance();
        return $batchHandler->getResponses($batchRequest, $responses);
    }

    /**
     * Build batch request spec param
     * @param $accountId
     * @param $batchRequest
     * @return array
     * @throws TencentAdsSDKException
     */
    protected function buildBatchRequest($accountId, $batchRequest)
    {
        $interfaceMap = $this->app->getGlobalConfig()['interface_map'];
        $batchRequestSpec = [];
        foreach ($batchRequest as $item) {
            list($uri, $params) = $item;
            if (!empty($interfaceMap[$uri])) {
                $interfaceInfo = $interfaceMap[$uri];
                $versionUri = $this->app->getApiVersion() . '/' . $uri; // 暂不支持$this->apiVersion对应版本号
                if (empty($params['account_id'])) {
                    $params['account_id'] = $accountId;
                }
                $query = Url::buildQuery($params);
                switch ($interfaceInfo['method']) {
                    case 'GET':
                        $batchRequestSpec[] = [
                            'relative_path' => $versionUri . (empty($query) ? '' : '?') . $query
                        ];
                        break;
                    case 'POST':
                        $batchRequestSpec[] = [
                            'relative_path' => $versionUri,
                            'body' => $query
                        ];
                        break;
                    default:
                        throw new TencentAdsSDKException("Batch request not support this interface method");
                }
            } else {
                throw new TencentAdsSDKException("Batch request not support this interface");
            }
        }
        return $batchRequestSpec;
    }
}