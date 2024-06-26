<?php
/**
 * VisibilityCode
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
 * VisibilityCode Class Doc Comment
 *
 * @category Class
 * @description 不支持沉淀的状态码
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VisibilityCode
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'VISIBILITY_CODE_UNKNOWN';
    const INSERT_READY = 'VISIBILITY_CODE_INSERT_READY';
    const INSERTED = 'VISIBILITY_CODE_INSERTED';
    const NOT_APPROVED = 'VISIBILITY_CODE_NOT_APPROVED';
    const NOT_BEGINTIME = 'VISIBILITY_CODE_NOT_BEGINTIME';
    const DIFFERENT_CORPORATION = 'VISIBILITY_CODE_DIFFERENT_CORPORATION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::INSERT_READY,
            self::INSERTED,
            self::NOT_APPROVED,
            self::NOT_BEGINTIME,
            self::DIFFERENT_CORPORATION,
        ];
    }
}


