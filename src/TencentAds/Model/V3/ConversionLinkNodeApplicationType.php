<?php
/**
 * ConversionLinkNodeApplicationType
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
 * ConversionLinkNodeApplicationType Class Doc Comment
 *
 * @category Class
 * @description 节点链路化应用类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversionLinkNodeApplicationType
{
    /**
     * Possible values of this enum
     */
    const AIDED_MODELING = 'AIDED_MODELING';
    const PREFACE_MODELING = 'PREFACE_MODELING';
    const TIER_COLD_BOOT = 'TIER_COLD_BOOT';
    const TIER_REACH = 'TIER_REACH';
    const OG_MODELING = 'OG_MODELING';
    const ATTRIBUTION_NODE = 'ATTRIBUTION_NODE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AIDED_MODELING,
            self::PREFACE_MODELING,
            self::TIER_COLD_BOOT,
            self::TIER_REACH,
            self::OG_MODELING,
            self::ATTRIBUTION_NODE,
        ];
    }
}


