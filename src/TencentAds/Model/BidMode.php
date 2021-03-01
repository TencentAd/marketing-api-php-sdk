<?php
/**
 * BidMode
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
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model;
use \TencentAds\ObjectSerializer;

/**
 * BidMode Class Doc Comment
 *
 * @category Class
 * @description 出价方式，&lt;br/&gt;        优化目标查询接口需传输出价方式才可获取是否支持“点击”优化目标，&lt;br/&gt;        “点击”优化目标仅支持BID_MODE_OCPM出价方式。
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BidMode
{
    /**
     * Possible values of this enum
     */
    const CPC = 'BID_MODE_CPC';
    const CPA = 'BID_MODE_CPA';
    const CPM = 'BID_MODE_CPM';
    const OCPC = 'BID_MODE_OCPC';
    const OCPM = 'BID_MODE_OCPM';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CPC,
            self::CPA,
            self::CPM,
            self::OCPC,
            self::OCPM,
        ];
    }
}


