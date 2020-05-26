<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-17
 * Time: 10:31
 */

namespace TencentAds\Middleware\Model;


use TencentAds\Kernel\BaseObject;

class MiddlewareResponse extends BaseObject
{
    /**
     * @var mixed
     */
    public $response;

    /**
     * @param mixed $response
     * @return array|mixed
     */
    public static function init($response)
    {
        $self = static::getInstance();
        $self->response = $response;
    }
}
