<?php
/**
 * AppPromotionVideoStruct
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

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * AppPromotionVideoStruct Class Doc Comment
 *
 * @category Class
 * @description ott视频组件
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppPromotionVideoStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'app_promotion_video_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'video' => 'string',
        'video2' => 'string',
        'video3' => 'string',
        'allowTvQrcode' => 'bool',
        'qrcodePosition' => '\TencentAds\Model\V3\AppPromotionVideoStructQrcodePosition',
        'qrcodeWidth' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'video' => null,
        'video2' => null,
        'video3' => null,
        'allowTvQrcode' => null,
        'qrcodePosition' => null,
        'qrcodeWidth' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'video' => 'video',
        'video2' => 'video2',
        'video3' => 'video3',
        'allowTvQrcode' => 'allow_tv_qrcode',
        'qrcodePosition' => 'qrcode_position',
        'qrcodeWidth' => 'qrcode_width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'video' => 'setVideo',
        'video2' => 'setVideo2',
        'video3' => 'setVideo3',
        'allowTvQrcode' => 'setAllowTvQrcode',
        'qrcodePosition' => 'setQrcodePosition',
        'qrcodeWidth' => 'setQrcodeWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'video' => 'getVideo',
        'video2' => 'getVideo2',
        'video3' => 'getVideo3',
        'allowTvQrcode' => 'getAllowTvQrcode',
        'qrcodePosition' => 'getQrcodePosition',
        'qrcodeWidth' => 'getQrcodeWidth'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['video2'] = isset($data['video2']) ? $data['video2'] : null;
        $this->container['video3'] = isset($data['video3']) ? $data['video3'] : null;
        $this->container['allowTvQrcode'] = isset($data['allowTvQrcode']) ? $data['allowTvQrcode'] : null;
        $this->container['qrcodePosition'] = isset($data['qrcodePosition']) ? $data['qrcodePosition'] : null;
        $this->container['qrcodeWidth'] = isset($data['qrcodeWidth']) ? $data['qrcodeWidth'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets video
     *
     * @return string|mixed
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     *
     * @param string|mixed $video video
     *
     * @return $this
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

        return $this;
    }

    /**
     * Gets video2
     *
     * @return string|mixed
     */
    public function getVideo2()
    {
        return $this->container['video2'];
    }

    /**
     * Sets video2
     *
     * @param string|mixed $video2 video2
     *
     * @return $this
     */
    public function setVideo2($video2)
    {
        $this->container['video2'] = $video2;

        return $this;
    }

    /**
     * Gets video3
     *
     * @return string|mixed
     */
    public function getVideo3()
    {
        return $this->container['video3'];
    }

    /**
     * Sets video3
     *
     * @param string|mixed $video3 video3
     *
     * @return $this
     */
    public function setVideo3($video3)
    {
        $this->container['video3'] = $video3;

        return $this;
    }

    /**
     * Gets allowTvQrcode
     *
     * @return bool|mixed
     */
    public function getAllowTvQrcode()
    {
        return $this->container['allowTvQrcode'];
    }

    /**
     * Sets allowTvQrcode
     *
     * @param bool|mixed $allowTvQrcode allowTvQrcode
     *
     * @return $this
     */
    public function setAllowTvQrcode($allowTvQrcode)
    {
        $this->container['allowTvQrcode'] = $allowTvQrcode;

        return $this;
    }

    /**
     * Gets qrcodePosition
     *
     * @return \TencentAds\Model\V3\AppPromotionVideoStructQrcodePosition|mixed
     */
    public function getQrcodePosition()
    {
        return $this->container['qrcodePosition'];
    }

    /**
     * Sets qrcodePosition
     *
     * @param \TencentAds\Model\V3\AppPromotionVideoStructQrcodePosition|mixed $qrcodePosition qrcodePosition
     *
     * @return $this
     */
    public function setQrcodePosition($qrcodePosition)
    {
        $this->container['qrcodePosition'] = $qrcodePosition;

        return $this;
    }

    /**
     * Gets qrcodeWidth
     *
     * @return int|mixed
     */
    public function getQrcodeWidth()
    {
        return $this->container['qrcodeWidth'];
    }

    /**
     * Sets qrcodeWidth
     *
     * @param int|mixed $qrcodeWidth qrcodeWidth
     *
     * @return $this
     */
    public function setQrcodeWidth($qrcodeWidth)
    {
        $this->container['qrcodeWidth'] = $qrcodeWidth;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

