<?php
/**
 * ComponentIdFilteringMode
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
 * ComponentIdFilteringMode Class Doc Comment
 *
 * @category Class
 * @description 被共享组件读取方式
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComponentIdFilteringMode
{
    /**
     * Possible values of this enum
     */
    const NORMAL = 'NORMAL';
    const SHARING = 'SHARING';
    const SHARING_ONLY = 'SHARING_ONLY';
    const SHARING_BY_AGENCY_BUSINESS_UNIT = 'SHARING_BY_AGENCY_BUSINESS_UNIT';
    const SHARING_BY_CUSTOMER_BUSINESS_UNIT = 'SHARING_BY_CUSTOMER_BUSINESS_UNIT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::SHARING,
            self::SHARING_ONLY,
            self::SHARING_BY_AGENCY_BUSINESS_UNIT,
            self::SHARING_BY_CUSTOMER_BUSINESS_UNIT,
        ];
    }
}


