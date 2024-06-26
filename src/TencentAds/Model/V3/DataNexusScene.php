<?php
/**
 * DataNexusScene
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
 * DataNexusScene Class Doc Comment
 *
 * @category Class
 * @description 应用场景
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataNexusScene
{
    /**
     * Possible values of this enum
     */
    const DMP = 'DMP';
    const TRANSFORMATION_ATTRIBUTION = 'TRANSFORMATION_ATTRIBUTION';
    const PKAM = 'PKAM';
    const DPA = 'DPA';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DMP,
            self::TRANSFORMATION_ATTRIBUTION,
            self::PKAM,
            self::DPA,
        ];
    }
}


