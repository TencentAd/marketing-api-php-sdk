<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-05
 * Time: 13:04
 */

namespace TencentAds\Kernel;

use GuzzleHttp\Client;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\ObjectSerializer;
use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;

class ApiContainer
{
    /**
     * @var TencentAds
     */
    protected $app;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var BaseObject Api instance
     */
    protected $apiInstance;

    /**
     * @param TencentAds $app
     * @param Client     $client
     *
     * @return $this
     */
    public function init(TencentAds $app, Client $client)
    {
        $this->app = $app;
        $this->client = $client;

        return $this;
    }

    /**
     * Handle middleware with pipeline
     * 可参考：Laravel pipeline
     *
     * @param $method
     * @param $arguments
     * @param $next
     *
     * @return mixed
     */
    public function handleMiddleware($method, $arguments, $next)
    {
        $request = MiddlewareRequest::init($this->app, get_class($this->apiInstance), $method, $arguments);
        $middlewareFun = [];
        $skipMiddlewareFun = $this->getSkipMiddlewareFunc();
        foreach ($this->app->getMiddlewareInstance() as $middlewareName => $middleware) {
            if ($skipMiddlewareFun($middlewareName, $method)) {
                continue;
            }
            array_unshift($middlewareFun, [$middleware, 'handle']);
        }
        $func = array_reduce($middlewareFun, function ($stack, $pipe) {
            return function ($passable) use ($stack, $pipe) {
                return call_user_func($pipe, $passable, $stack);
            };
        }, $next);

        return $func($request);
    }

    /**
     * Handle middleware
     *
     * @param $method
     * @param $arguments
     *
     * @return mixed
     */
    public function handleMiddlewareBefore($method, $arguments)
    {
        $skipMiddlewareFun = $this->getSkipMiddlewareFunc();
        foreach ($this->app->getMiddlewareInstance() as $middlewareName => $middleware) {
            if ($skipMiddlewareFun($middlewareName, $method)) {
                continue;
            }
            $arguments = call_user_func([$middleware, 'beforeRun'], $this->app, get_class($this->apiInstance), $method,
                $arguments);
        }

        return $arguments;
    }

    /**
     * Handle middleware
     *
     * @param $method
     * @param $response
     *
     * @return mixed
     */
    public function handleMiddlewareAfter($method, $response)
    {
        $skipMiddlewareFun = $this->getSkipMiddlewareFunc();
        foreach (array_reverse($this->app->getMiddlewareInstance()) as $middlewareName => $middleware) {
            if ($skipMiddlewareFun($middlewareName, $method)) {
                continue;
            }
            $response = call_user_func([$middleware, 'afterRun'], $this->app, get_class($this->apiInstance), $method,
                $response);
        }

        return $response;
    }

    /**
     * Get skip middleware function
     * @return \Closure
     */
    public function getSkipMiddlewareFunc()
    {
        $configGlobal = $this->app->getGlobalConfig();

        return function ($middlewareName, $method) use ($configGlobal) {
            $apiInstanceClassName = get_class($this->apiInstance);
            if (!empty($configGlobal['app'][$apiInstanceClassName][$method]['skip_middleware'])) {
                if (in_array($middlewareName, $configGlobal['app'][$apiInstanceClassName][$method]['skip_middleware'],
                    true)) {
                    return true;
                }
            }

            return false;
        };
    }

    /**
     * Handle api response
     *
     * @param $response
     *
     * @return mixed
     * @throws TencentAdsResponseException
     */
    public function handleResponse($response)
    {
        $configGlobal = $this->app->getGlobalConfig();
        if (!isset($response['code'])) {
            throw new TencentAdsResponseException("API response has not code field.");
        }
        if ($response['code'] != 0) {
            $errors = empty($response['errors']) ? [] : $response['errors'];
            throw new TencentAdsResponseException(
                $response['message'], $response['code'], [], null, $response['message_cn'], $errors
            );
        }
        if (isset($response['data'])) {
            if (!empty($configGlobal['serializer']) && $configGlobal['serializer'] == SerializerHandler::SERIALIZER_TYPE_ARRAY) {
                return SerializerHandler::sanitizeForSerializationToArray($response['data']);
            } else {
                return $response['data'];
            }
        }

        return null;
    }
}
