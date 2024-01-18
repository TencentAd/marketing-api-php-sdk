<?php
/**
 * ConversionOptimizationGoal
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
 * ConversionOptimizationGoal Class Doc Comment
 *
 * @category Class
 * @description 深度优化ROI目标
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversionOptimizationGoal
{
    /**
     * Possible values of this enum
     */
    const NONE = 'GOAL_NONE';
    const _7_DAY_PURCHASE_ROAS = 'GOAL_7DAY_PURCHASE_ROAS';
    const _15_DAY_PURCHASE_ROAS = 'GOAL_15DAY_PURCHASE_ROAS';
    const _30_DAY_PURCHASE_ROAS = 'GOAL_30DAY_PURCHASE_ROAS';
    const _60_DAY_PURCHASE_ROAS = 'GOAL_60DAY_PURCHASE_ROAS';
    const _30_DAY_MONETIZATION_ROAS = 'GOAL_30DAY_MONETIZATION_ROAS';
    const _30_DAY_ORDER_ROAS = 'GOAL_30DAY_ORDER_ROAS';
    const _1_DAY_PURCHASE_ROAS = 'GOAL_1DAY_PURCHASE_ROAS';
    const _1_DAY_MONETIZATION_ROAS = 'GOAL_1DAY_MONETIZATION_ROAS';
    const _3_DAY_PURCHASE_ROAS = 'GOAL_3DAY_PURCHASE_ROAS';
    const _3_DAY_MONETIZATION_ROAS = 'GOAL_3DAY_MONETIZATION_ROAS';
    const _7_DAY_MONETIZATION_ROAS = 'GOAL_7DAY_MONETIZATION_ROAS';
    const _15_DAY_MONETIZATION_ROAS = 'GOAL_15DAY_MONETIZATION_ROAS';
    const _7_DAY_RETENTION_TIMES = 'GOAL_7DAY_RETENTION_TIMES';
    const _7_DAY_LONGTERM_PURCHASE_ROAS = 'GOAL_7DAY_LONGTERM_PURCHASE_ROAS';
    const _14_DAY_LONGTERM_PURCHASE_ROAS = 'GOAL_14DAY_LONGTERM_PURCHASE_ROAS';
    const _30_DAY_LONGTERM_PURCHASE_ROAS = 'GOAL_30DAY_LONGTERM_PURCHASE_ROAS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::_7_DAY_PURCHASE_ROAS,
            self::_15_DAY_PURCHASE_ROAS,
            self::_30_DAY_PURCHASE_ROAS,
            self::_60_DAY_PURCHASE_ROAS,
            self::_30_DAY_MONETIZATION_ROAS,
            self::_30_DAY_ORDER_ROAS,
            self::_1_DAY_PURCHASE_ROAS,
            self::_1_DAY_MONETIZATION_ROAS,
            self::_3_DAY_PURCHASE_ROAS,
            self::_3_DAY_MONETIZATION_ROAS,
            self::_7_DAY_MONETIZATION_ROAS,
            self::_15_DAY_MONETIZATION_ROAS,
            self::_7_DAY_RETENTION_TIMES,
            self::_7_DAY_LONGTERM_PURCHASE_ROAS,
            self::_14_DAY_LONGTERM_PURCHASE_ROAS,
            self::_30_DAY_LONGTERM_PURCHASE_ROAS,
        ];
    }
}


