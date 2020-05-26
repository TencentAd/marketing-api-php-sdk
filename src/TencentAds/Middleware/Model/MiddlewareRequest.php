<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-17
 * Time: 10:30
 */

namespace TencentAds\Middleware\Model;


use TencentAds\Kernel\BaseObject;

class MiddlewareRequest extends BaseObject
{
    /**
     * @var \TencentAds\TencentAds
     */
    public $app;

    /**
     * Api entity class
     * @var string
     */
    public $apiEntityName;

    /**
     * Method name
     * @var string
     */
    public $apiMethod;

    /**
     * Method arguments
     * @var array
     */
    public $apiMethodArguments;

    /**
     * @return \TencentAds\TencentAds
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * @param \TencentAds\TencentAds $app
     */
    public function setApp($app)
    {
        $this->app = $app;
    }

    /**
     * @return string
     */
    public function getApiEntityName()
    {
        return $this->apiEntityName;
    }

    /**
     * @param string $apiEntityName
     */
    public function setApiEntityName($apiEntityName)
    {
        $this->apiEntityName = $apiEntityName;
    }

    /**
     * @return string
     */
    public function getApiMethod()
    {
        return $this->apiMethod;
    }

    /**
     * @param string $apiMethod
     */
    public function setApiMethod($apiMethod)
    {
        $this->apiMethod = $apiMethod;
    }

    /**
     * @return array
     */
    public function getApiMethodArguments()
    {
        return $this->apiMethodArguments;
    }

    /**
     * @param array $apiMethodArguments
     */
    public function setApiMethodArguments($apiMethodArguments)
    {
        $this->apiMethodArguments = $apiMethodArguments;
    }

    /**
     * @param \TencentAds\TencentAds $app
     * @param string $className Api entity class name
     * @param string $method
     * @param mixed $arguments
     * @return array|mixed
     */
    public static function init($app, $className, $method, $arguments)
    {
        $self = static::getInstance();
        $self->app = $app;
        $self->apiEntityName = $className;
        $self->apiMethod = $method;
        $self->apiMethodArguments = $arguments;
        return $self;
    }
}
