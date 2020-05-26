<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-02
 * Time: 15:00
 */
namespace TencentAds\Middleware;

use Closure;
use TencentAds\Middleware\Model\MiddlewareRequest;

interface MiddlewareInterface
{
    /**
     * Handle middleware
     * @param MiddlewareRequest $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next);
}
