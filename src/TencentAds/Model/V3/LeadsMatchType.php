<?php
/**
 * LeadsMatchType
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
 * LeadsMatchType Class Doc Comment
 *
 * @category Class
 * @description 线索匹配类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeadsMatchType
{
    /**
     * Possible values of this enum
     */
    const NONE = 'NONE';
    const LEADSID = 'LEADSID';
    const OUTERLEADSID = 'OUTERLEADSID';
    const CONTACT = 'CONTACT';
    const CLICKID = 'CLICKID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::LEADSID,
            self::OUTERLEADSID,
            self::CONTACT,
            self::CLICKID,
        ];
    }
}


