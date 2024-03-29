<?php
/**
 * PreReviewElementType
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
 * PreReviewElementType Class Doc Comment
 *
 * @category Class
 * @description 元素类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PreReviewElementType
{
    /**
     * Possible values of this enum
     */
    const IMAGE = 'IMAGE';
    const VIDEO = 'VIDEO';
    const TXT = 'TXT';
    const DEST_URL = 'DEST_URL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IMAGE,
            self::VIDEO,
            self::TXT,
            self::DEST_URL,
        ];
    }
}

