<?php
/**
 * ImageType
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
 * ImageType Class Doc Comment
 *
 * @category Class
 * @description 图片类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImageType
{
    /**
     * Possible values of this enum
     */
    const GIF = 'IMAGE_TYPE_GIF';
    const JPG = 'IMAGE_TYPE_JPG';
    const PNG = 'IMAGE_TYPE_PNG';
    const SWF = 'IMAGE_TYPE_SWF';
    const PSD = 'IMAGE_TYPE_PSD';
    const BMP = 'IMAGE_TYPE_BMP';
    const TIFF_INTEL = 'IMAGE_TYPE_TIFF_INTEL';
    const TIFF_MOTOROLA = 'IMAGE_TYPE_TIFF_MOTOROLA';
    const JPC = 'IMAGE_TYPE_JPC';
    const JP2 = 'IMAGE_TYPE_JP2';
    const JPX = 'IMAGE_TYPE_JPX';
    const JB2 = 'IMAGE_TYPE_JB2';
    const SWC = 'IMAGE_TYPE_SWC';
    const IFF = 'IMAGE_TYPE_IFF';
    const WBMP = 'IMAGE_TYPE_WBMP';
    const XBM = 'IMAGE_TYPE_XBM';
    const WEBP = 'IMAGE_TYPE_WEBP';
    const FLV = 'IMAGE_TYPE_FLV';
    const WAV = 'IMAGE_TYPE_WAV';
    const MP3 = 'IMAGE_TYPE_MP3';
    const MP4 = 'IMAGE_TYPE_MP4';
    const AVI = 'IMAGE_TYPE_AVI';
    const MOV = 'IMAGE_TYPE_MOV';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GIF,
            self::JPG,
            self::PNG,
            self::SWF,
            self::PSD,
            self::BMP,
            self::TIFF_INTEL,
            self::TIFF_MOTOROLA,
            self::JPC,
            self::JP2,
            self::JPX,
            self::JB2,
            self::SWC,
            self::IFF,
            self::WBMP,
            self::XBM,
            self::WEBP,
            self::FLV,
            self::WAV,
            self::MP3,
            self::MP4,
            self::AVI,
            self::MOV,
        ];
    }
}

