<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-02
 * Time: 15:26
 */
namespace TencentAds\Middleware;

use Closure;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\Middleware\Model\MiddlewareResponse;

class AuthMiddleware implements MiddlewareInterface
{
    /**
     * Handle middleware
     * @param MiddlewareRequest $request
     * @param Closure $next
     * @return MiddlewareResponse
     */
    public function handle($request, Closure $next)
    {
        $arguments = $request->getApiMethodArguments();
        $app = $request->getApp();
        // Generate unique id
        $nonce = md5(uniqid(json_encode($arguments), true));
        // Configure API key authorization: nonce/timestamp
        $app->getConfig()
            ->setApiKey('nonce', $nonce)
            ->setApiKey('timestamp', time());
        return $next($request);
    }
}
