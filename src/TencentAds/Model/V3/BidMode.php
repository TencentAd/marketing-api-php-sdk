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
 * BidMode Class Doc Comment
 *
 * @category Class
 * @description 出价方式
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
    const CPS = 'BID_MODE_CPS';
    const CPM = 'BID_MODE_CPM';
    const CPT = 'BID_MODE_CPT';
    const CPO = 'BID_MODE_CPO';
    const OCPC = 'BID_MODE_OCPC';
    const OCPA = 'BID_MODE_OCPA';
    const OCPM = 'BID_MODE_OCPM';
    const YUNXUAN_CPS = 'BID_MODE_YUNXUAN_CPS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CPC,
            self::CPA,
            self::CPS,
            self::CPM,
            self::CPT,
            self::CPO,
            self::OCPC,
            self::OCPA,
            self::OCPM,
            self::YUNXUAN_CPS,
        ];
    }
}


