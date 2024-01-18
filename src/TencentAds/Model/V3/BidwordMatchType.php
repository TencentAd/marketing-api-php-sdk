<?php
/**
 * BidwordMatchType
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
 * BidwordMatchType Class Doc Comment
 *
 * @category Class
 * @description 关键词匹配方式
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BidwordMatchType
{
    /**
     * Possible values of this enum
     */
    const EXACT_MATCH = 'EXACT_MATCH';
    const WIDE_MATCH = 'WIDE_MATCH';
    const WORD_MATCH = 'WORD_MATCH';
    const PHRASE_MATCH = 'PHRASE_MATCH';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXACT_MATCH,
            self::WIDE_MATCH,
            self::WORD_MATCH,
            self::PHRASE_MATCH,
        ];
    }
}

