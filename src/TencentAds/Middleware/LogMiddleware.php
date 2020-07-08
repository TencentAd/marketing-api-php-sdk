<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-17
 * Time: 17:30
 */

namespace TencentAds\Middleware;

use Closure;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Kernel\Log;
use TencentAds\Kernel\SerializerHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;

class LogMiddleware implements MiddlewareInterface
{

    /**
     * Handle middleware
     *
     * @param MiddlewareRequest $request
     * @param Closure           $next
     *
     * @return mixed
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
        $app = $request->getApp();
        $isDebug = $app->getConfig()
                       ->getDebug();
        if ($isDebug) {
            $arguments = $request->getApiMethodArguments();
            $config = $app->getConfig();
            Log::debug('Request Params:', array_merge($arguments, [
                'access_token' => $config->getApiKey('access_token'),
                'timestamp'    => $config->getApiKey('timestamp'),
                'nonce'        => $config->getApiKey('nonce'),
            ]));
        }

        try {
            $response = $next($request);
        } catch (\Exception $e) {
            $code = $e->getCode();
            $data = [
                'code' => $code,
                'message' => $e->getMessage(),
            ];
            if ($e instanceof TencentAdsResponseException) {
                $data['message_cn'] = $e->getMessageCn();
                $data['errors'] = SerializerHandler::sanitizeForSerializationToArray($e->getErrors());
            }
            Log::debug('Error:', $data);
            if ($code == 0) {
                // 内部错误，sdk 的异常打印 trace
                Log::debug("Trace:" . $e->getTraceAsString());
            }
            throw $e;
        }

        if ($isDebug) {
            if (empty($response)) {
                Log::debug('Response is empty');
            } elseif (is_scalar($response)) {
                Log::debug('Response: ' . $response);
            } else {
                Log::debug('Response:', SerializerHandler::sanitizeForSerializationToArray($response));
            }
        }

        return $response;
    }
}
