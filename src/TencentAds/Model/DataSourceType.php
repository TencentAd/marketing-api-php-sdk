<?php
/**
 * DataSourceType
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model;
use \TencentAds\ObjectSerializer;

/**
 * DataSourceType Class Doc Comment
 *
 * @category Class
 * @description 数据源类型标识，枚举列表：{ WEB, ANDROID, IOS, OFFLINE, WECHAT, WECHAT_MINI_PROGRAM, WECHAT_MINI_GAME }
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataSourceType
{
    /**
     * Possible values of this enum
     */
    const DATA_SOURCE_TYPE_FILE = 'DATA_SOURCE_TYPE_FILE';
    const DATA_SOURCE_TYPE_STREAM = 'DATA_SOURCE_TYPE_STREAM';
    const DATA_SOURCE_TYPE_SITE = 'DATA_SOURCE_TYPE_SITE';
    const WEB = 'WEB';
    const ANDROID = 'ANDROID';
    const IOS = 'IOS';
    const OFFLINE = 'OFFLINE';
    const WECHAT = 'WECHAT';
    const WECHAT_MINI_PROGRAM = 'WECHAT_MINI_PROGRAM';
    const WECHAT_MINI_GAME = 'WECHAT_MINI_GAME';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DATA_SOURCE_TYPE_FILE,
            self::DATA_SOURCE_TYPE_STREAM,
            self::DATA_SOURCE_TYPE_SITE,
            self::WEB,
            self::ANDROID,
            self::IOS,
            self::OFFLINE,
            self::WECHAT,
            self::WECHAT_MINI_PROGRAM,
            self::WECHAT_MINI_GAME,
        ];
    }
}


