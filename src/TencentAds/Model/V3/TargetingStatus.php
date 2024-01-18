<?php
/**
 * TargetingStatus
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
 * TargetingStatus Class Doc Comment
 *
 * @category Class
 * @description 定向状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TargetingStatus
{
    /**
     * Possible values of this enum
     */
    const NARROW = 'TARGETING_STATUS_NARROW';
    const SUITABLE = 'TARGETING_STATUS_SUITABLE';
    const WIDE = 'TARGETING_STATUS_WIDE';
    const UNPREDICTABLE = 'TARGETING_STATUS_UNPREDICTABLE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NARROW,
            self::SUITABLE,
            self::WIDE,
            self::UNPREDICTABLE,
        ];
    }
}

