<?php
/**
 * UrgeFailedReason
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
 * UrgeFailedReason Class Doc Comment
 *
 * @category Class
 * @description 催审失败原因
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UrgeFailedReason
{
    /**
     * Possible values of this enum
     */
    const SYSTEM_ERROR = 'SYSTEM_ERROR';
    const ACCOUNT_NO_PERMISSION = 'ACCOUNT_NO_PERMISSION';
    const ACCOUNT_REACH_URGE_UPPER_LIMIT = 'ACCOUNT_REACH_URGE_UPPER_LIMIT';
    const COMPONENT_ID_NOT_EXIST = 'COMPONENT_ID_NOT_EXIST';
    const ELEMENT_FINGERPRINT_NOT_EXIST = 'ELEMENT_FINGERPRINT_NOT_EXIST';
    const ALREADY_URGED = 'ALREADY_URGED';
    const NOT_REACH_URGE_TIME = 'NOT_REACH_URGE_TIME';
    const ACCOUNT_PENDING = 'ACCOUNT_PENDING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SYSTEM_ERROR,
            self::ACCOUNT_NO_PERMISSION,
            self::ACCOUNT_REACH_URGE_UPPER_LIMIT,
            self::COMPONENT_ID_NOT_EXIST,
            self::ELEMENT_FINGERPRINT_NOT_EXIST,
            self::ALREADY_URGED,
            self::NOT_REACH_URGE_TIME,
            self::ACCOUNT_PENDING,
        ];
    }
}

