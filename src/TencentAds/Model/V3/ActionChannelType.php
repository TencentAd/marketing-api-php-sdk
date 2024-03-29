<?php
/**
 * ActionChannelType
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
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model\V3;
use \TencentAds\ObjectSerializer;

/**
 * ActionChannelType Class Doc Comment
 *
 * @category Class
 * @description 渠道信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActionChannelType
{
    /**
     * Possible values of this enum
     */
    const NATURAL = 'NATURAL';
    const TENCENT = 'TENCENT';
    const BYTEDANCE = 'BYTEDANCE';
    const KUAISHOU = 'KUAISHOU';
    const ALIBABA = 'ALIBABA';
    const BAIDU = 'BAIDU';
    const OTHERS = 'OTHERS';
    const MULTIPLE = 'MULTIPLE';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NATURAL,
            self::TENCENT,
            self::BYTEDANCE,
            self::KUAISHOU,
            self::ALIBABA,
            self::BAIDU,
            self::OTHERS,
            self::MULTIPLE,
            self::UNKNOWN,
        ];
    }
}


