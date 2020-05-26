<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-17
 * Time: 10:37
 */

namespace TencentAds\Kernel;


class BaseObject
{
    /**
     * @var array
     */
    public static $instances = [];

    /**
     * Get instance
     * @return static
     */
    public static function getInstance()
    {
        if (empty(static::$instances[static::class])) {
            static::$instances[static::class] = new static();
        }
        return static::$instances[static::class];
    }
}
