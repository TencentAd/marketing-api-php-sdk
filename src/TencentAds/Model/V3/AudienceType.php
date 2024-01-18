<?php
/**
 * AudienceType
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
 * AudienceType Class Doc Comment
 *
 * @category Class
 * @description 人群类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AudienceType
{
    /**
     * Possible values of this enum
     */
    const CUSTOMER_FILE = 'CUSTOMER_FILE';
    const LOOKALIKE = 'LOOKALIKE';
    const USER_ACTION = 'USER_ACTION';
    const KEYWORD = 'KEYWORD';
    const AD = 'AD';
    const COMBINE = 'COMBINE';
    const LABEL = 'LABEL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CUSTOMER_FILE,
            self::LOOKALIKE,
            self::USER_ACTION,
            self::KEYWORD,
            self::AD,
            self::COMBINE,
            self::LABEL,
        ];
    }
}


