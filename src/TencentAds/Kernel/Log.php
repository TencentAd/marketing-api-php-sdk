<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-17
 * Time: 17:02
 */

namespace TencentAds\Kernel;

use Monolog\Handler\HandlerInterface;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Log extends BaseObject
{
    /**
     * @var Logger
     */
    public static $log;

    /**
     * @param int $level
     * @param string $filePath
     * @throws \Exception
     */
    public static function init($level = Logger::ERROR, $filePath = '')
    {
        static::$log = new Logger('sdk_logger');
        if (empty($filePath)) {
            $filePath = 'php://stdout';
        }
        static::$log->pushHandler(new StreamHandler($filePath, $level));
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array([static::$log, $name], $arguments);
    }

    /**
     * Set log handler
     *
     * @param HandlerInterface $handler
     */
    public function setHandler(HandlerInterface $handler)
    {
        static::$log->pushHandler($handler);
    }
}
