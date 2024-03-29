<?php
/**
 * PlayForm
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
 * PlayForm Class Doc Comment
 *
 * @category Class
 * @description 播讲形式
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlayForm
{
    /**
     * Possible values of this enum
     */
    const ONE = 'PLAY_FORM_BY_ONE';
    const TWO = 'PLAY_FORM_BY_TWO';
    const MULTI = 'PLAY_FORM_BY_MULTI';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONE,
            self::TWO,
            self::MULTI,
        ];
    }
}


