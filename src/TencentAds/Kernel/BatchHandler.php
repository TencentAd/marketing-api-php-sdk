<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-03-12
 * Time: 21:33
 */

namespace TencentAds\Kernel;

/**
 * Class BatchHandler
 * @package TencentAds\Kernel
 */
class BatchHandler extends BaseObject
{
    /**
     * Get batch response
     * @param $responses
     * @return BatchResponse[]
     */
    public function getResponses($request, $responses)
    {
        $responseList = [];
        foreach ($responses as $index => $response) {
            $responseList[] = BatchResponse::init($request[$index], $response);
        }
        return $responseList;
    }
}
