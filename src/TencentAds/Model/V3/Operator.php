<?php
/**
 * Operator
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
 * Operator Class Doc Comment
 *
 * @category Class
 * @description 运算符
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Operator
{
    /**
     * Possible values of this enum
     */
    const LT = 'LT';
    const GT = 'GT';
    const EQ = 'EQ';
    const NE = 'NE';
    const CONTAIN = 'CONTAIN';
    const NOT_CONTAIN = 'NOT_CONTAIN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LT,
            self::GT,
            self::EQ,
            self::NE,
            self::CONTAIN,
            self::NOT_CONTAIN,
        ];
    }
}


