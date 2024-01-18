<?php
/**
 * OauthAccountType
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
 * OauthAccountType Class Doc Comment
 *
 * @category Class
 * @description 账号类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OauthAccountType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'ACCOUNT_TYPE_UNKNOWN';
    const ADVERTISER = 'ACCOUNT_TYPE_ADVERTISER';
    const AGENCY = 'ACCOUNT_TYPE_AGENCY';
    const DSP = 'ACCOUNT_TYPE_DSP';
    const DEVELOPER = 'ACCOUNT_TYPE_DEVELOPER';
    const MEMBER = 'ACCOUNT_TYPE_MEMBER';
    const EXTERNAL_SUPPLIER = 'ACCOUNT_TYPE_EXTERNAL_SUPPLIER';
    const TDC = 'ACCOUNT_TYPE_TDC';
    const TONE = 'ACCOUNT_TYPE_TONE';
    const BM = 'ACCOUNT_TYPE_BM';
    const DATA_NEXUS = 'ACCOUNT_TYPE_DATA_NEXUS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::ADVERTISER,
            self::AGENCY,
            self::DSP,
            self::DEVELOPER,
            self::MEMBER,
            self::EXTERNAL_SUPPLIER,
            self::TDC,
            self::TONE,
            self::BM,
            self::DATA_NEXUS,
        ];
    }
}

