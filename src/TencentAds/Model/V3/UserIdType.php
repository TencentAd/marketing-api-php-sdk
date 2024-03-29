<?php
/**
 * UserIdType
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
 * UserIdType Class Doc Comment
 *
 * @category Class
 * @description 号码包用户ID类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserIdType
{
    /**
     * Possible values of this enum
     */
    const HASH_IDFA = 'HASH_IDFA';
    const HASH_IMEI = 'HASH_IMEI';
    const HASH_MOBILE_PHONE = 'HASH_MOBILE_PHONE';
    const IDFA = 'IDFA';
    const IMEI = 'IMEI';
    const WX_OPENID = 'WX_OPENID';
    const WX_UNIONID = 'WX_UNIONID';
    const WECHAT_OPENID = 'WECHAT_OPENID';
    const SALTED_HASH_IMEI = 'SALTED_HASH_IMEI';
    const SALTED_HASH_IDFA = 'SALTED_HASH_IDFA';
    const OAID = 'OAID';
    const HASH_OAID = 'HASH_OAID';
    const SHA256_MOBILE_PHONE = 'SHA256_MOBILE_PHONE';
    const MD5_SHA256_IMEI = 'MD5_SHA256_IMEI';
    const MD5_SHA256_IDFA = 'MD5_SHA256_IDFA';
    const MD5_SHA256_OAID = 'MD5_SHA256_OAID';
    const CAID = 'CAID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HASH_IDFA,
            self::HASH_IMEI,
            self::HASH_MOBILE_PHONE,
            self::IDFA,
            self::IMEI,
            self::WX_OPENID,
            self::WX_UNIONID,
            self::WECHAT_OPENID,
            self::SALTED_HASH_IMEI,
            self::SALTED_HASH_IDFA,
            self::OAID,
            self::HASH_OAID,
            self::SHA256_MOBILE_PHONE,
            self::MD5_SHA256_IMEI,
            self::MD5_SHA256_IDFA,
            self::MD5_SHA256_OAID,
            self::CAID,
        ];
    }
}


