<?php
/**
 * SysStatus
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
 * SysStatus Class Doc Comment
 *
 * @category Class
 * @description 审核状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SysStatus
{
    /**
     * Possible values of this enum
     */
    const NORMAL = 'AD_STATUS_NORMAL';
    const PENDING = 'AD_STATUS_PENDING';
    const DENIED = 'AD_STATUS_DENIED';
    const FROZEN = 'AD_STATUS_FROZEN';
    const PARTIALLY_PENDING = 'AD_STATUS_PARTIALLY_PENDING';
    const PARTIALLY_NORMAL = 'AD_STATUS_PARTIALLY_NORMAL';
    const PREPARE = 'AD_STATUS_PREPARE';
    const DELETED = 'AD_STATUS_DELETED';
    const INVALID = 'AD_STATUS_INVALID';
    const SUSPEND = 'AD_STATUS_SUSPEND';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::PENDING,
            self::DENIED,
            self::FROZEN,
            self::PARTIALLY_PENDING,
            self::PARTIALLY_NORMAL,
            self::PREPARE,
            self::DELETED,
            self::INVALID,
            self::SUSPEND,
        ];
    }
}


