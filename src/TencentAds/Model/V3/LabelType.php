<?php
/**
 * LabelType
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
 * LabelType Class Doc Comment
 *
 * @category Class
 * @description 标签类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'LABEL_TYPE_UNKNOWN';
    const COMMON = 'LABEL_TYPE_COMMON';
    const PROMOTIONAL = 'LABEL_TYPE_PROMOTIONAL';
    const CUSTOMIZETEXT = 'LABEL_TYPE_CUSTOMIZETEXT';
    const ICON = 'LABEL_TYPE_ICON';
    const DYNAMIC = 'LABEL_TYPE_DYNAMIC';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::COMMON,
            self::PROMOTIONAL,
            self::CUSTOMIZETEXT,
            self::ICON,
            self::DYNAMIC,
        ];
    }
}


