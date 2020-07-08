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
    /**
     * @var string
     */
    protected $messageCn;
    /**
     * @var array
     */
    protected $errors;

    public function __construct($message = "", $code = 0, $responseHeaders = [], $responseBody = null, $messageCn="", $errors = []) {
        parent::__construct($message, $code, $responseHeaders, $responseBody);
        $this->messageCn = $messageCn;
        $this->errors = $errors;
    }

    /**
     * @return string
     */
    public function getMessageCn() {
        return $this->messageCn;
    }

    /**
     * @param string $messageCn
     */
    public function setMessageCn($messageCn) {
        $this->messageCn = $messageCn;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

}
