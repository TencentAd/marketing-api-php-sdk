<?php
/**
 * LearningStatus
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
 * LearningStatus Class Doc Comment
 *
 * @category Class
 * @description 学习状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LearningStatus
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'LEARNING_STATUS_UNKNOWN';
    const WIP = 'LEARNING_STATUS_WIP';
    const FINISHED = 'LEARNING_STATUS_FINISHED';
    const FAILED = 'LEARNING_STATUS_FAILED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::WIP,
            self::FINISHED,
            self::FAILED,
        ];
    }
}


