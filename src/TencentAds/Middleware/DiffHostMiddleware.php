<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-12
 * Time: 15:39
 */

namespace TencentAds\Middleware;


use Closure;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\Middleware\Model\MiddlewareResponse;

class DiffHostMiddleware implements MiddlewareInterface
{
    /**
     * Handle middleware
     * @param MiddlewareRequest $request
     * @param Closure $next
     * @return MiddlewareResponse
     */
    public function handle($request, Closure $next)
    {
        $app = $request->getApp();
        $className = $request->getApiEntityName();
        $method = $request->getApiMethod();
        $globalConfig = $app->getGlobalConfig();
        if (!empty($globalConfig['app'][$className][$method]['url'])) {
            $app->getConfig()->setHost($globalConfig['app'][$className][$method]['url']);
            $response = $next($request);
            $app->getConfig()->setHost($globalConfig['url']);
        } else {
            $response = $next($request);
        }
        return $response;
    }
}
