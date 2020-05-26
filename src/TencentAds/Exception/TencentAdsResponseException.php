<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-03
 * Time: 12:53
 */

namespace TencentAds\Exception;

use TencentAds\ApiException;

class TencentAdsResponseException extends ApiException
{
    protected $messageCn;

    public function __construct($message = "", $code = 0, $responseHeaders = [], $responseBody = null, $messageCn="") {
        parent::__construct($message, $code, $responseHeaders, $responseBody);
        $this->messageCn = $messageCn;
    }

    public function getMessageCn() {
        return $this->messageCn;
    }

    public function setMessageCn($messageCn) {
        $this->messageCn = $messageCn;
    }
}
