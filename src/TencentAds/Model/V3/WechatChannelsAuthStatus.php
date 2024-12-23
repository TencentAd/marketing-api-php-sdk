<?php
/**
 * WechatChannelsAuthStatus
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
 * WechatChannelsAuthStatus Class Doc Comment
 *
 * @category Class
 * @description 授权状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatChannelsAuthStatus
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'PENDING';
    const AUTHORIZED = 'AUTHORIZED';
    const CANCELLED = 'CANCELLED';
    const REFUSED = 'REFUSED';
    const EXPIRED = 'EXPIRED';
    const AUDIT_PENDING = 'AUDIT_PENDING';
    const AUDIT_REFUSED = 'AUDIT_REFUSED';
    const PENDING_CONFIRM = 'PENDING_CONFIRM';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::AUTHORIZED,
            self::CANCELLED,
            self::REFUSED,
            self::EXPIRED,
            self::AUDIT_PENDING,
            self::AUDIT_REFUSED,
            self::PENDING_CONFIRM,
        ];
    }
}


