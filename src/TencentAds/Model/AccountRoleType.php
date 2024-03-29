<?php
/**
 * AccountRoleType
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
 * AccountRoleType Class Doc Comment
 *
 * @category Class
 * @description 授权账号身份类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountRoleType
{
    /**
     * Possible values of this enum
     */
    const ADVERTISER = 'ACCOUNT_ROLE_TYPE_ADVERTISER';
    const AGENCY = 'ACCOUNT_ROLE_TYPE_AGENCY';
    const T1 = 'ACCOUNT_ROLE_TYPE_T1';
    const BUSINESS_MANAGER = 'ACCOUNT_ROLE_TYPE_BUSINESS_MANAGER';
    const DATA_NEXUS = 'ACCOUNT_ROLE_TYPE_DATA_NEXUS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADVERTISER,
            self::AGENCY,
            self::T1,
            self::BUSINESS_MANAGER,
            self::DATA_NEXUS,
        ];
    }
}


