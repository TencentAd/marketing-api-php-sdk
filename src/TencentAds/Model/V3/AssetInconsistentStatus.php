<?php
/**
 * AssetInconsistentStatus
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
 * AssetInconsistentStatus Class Doc Comment
 *
 * @category Class
 * @description 推广内容资产与落地页一致性状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssetInconsistentStatus
{
    /**
     * Possible values of this enum
     */
    const ALL_CONSISTENT = 'ALL_CONSISTENT';
    const PARTIALLY_CONSISTENT = 'PARTIALLY_CONSISTENT';
    const ALL_INCONSISTENT = 'ALL_INCONSISTENT';
    const IDENTIFYING = 'IDENTIFYING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL_CONSISTENT,
            self::PARTIALLY_CONSISTENT,
            self::ALL_INCONSISTENT,
            self::IDENTIFYING,
        ];
    }
}


