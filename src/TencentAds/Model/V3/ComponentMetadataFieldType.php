<?php
/**
 * ComponentMetadataFieldType
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
 * ComponentMetadataFieldType Class Doc Comment
 *
 * @category Class
 * @description 创意组件字段类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComponentMetadataFieldType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const STRING = 'STRING';
    const INT = 'INT';
    const BOOL = 'BOOL';
    const STRING_ARRAY = 'STRING_ARRAY';
    const INT_ARRAY = 'INT_ARRAY';
    const STRUCTURE = 'STRUCTURE';
    const STRUCTURE_ARRAY = 'STRUCTURE_ARRAY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::STRING,
            self::INT,
            self::BOOL,
            self::STRING_ARRAY,
            self::INT_ARRAY,
            self::STRUCTURE,
            self::STRUCTURE_ARRAY,
        ];
    }
}


