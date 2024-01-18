<?php
/**
 * WxgamePlayablePageStruct
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
 * WxgamePlayablePageStruct Class Doc Comment
 *
 * @category Class
 * @description 小游戏试玩页组件
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WxgamePlayablePageStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'wxgame_playable_page_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'wxgamePlayablePageSwitch' => 'bool',
        'wxgamePlayablePagePath' => 'string',
        'wxgamePlayablePageEndCoverImg' => 'string',
        'wxgamePlayablePageEndDesc' => 'string',
        'wxgamePlayablePageOrientation' => '\TencentAds\Model\V3\WxgamePlayablePageOrientation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'wxgamePlayablePageSwitch' => null,
        'wxgamePlayablePagePath' => null,
        'wxgamePlayablePageEndCoverImg' => null,
        'wxgamePlayablePageEndDesc' => null,
        'wxgamePlayablePageOrientation' => null
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
        'wxgamePlayablePageSwitch' => 'wxgame_playable_page_switch',
        'wxgamePlayablePagePath' => 'wxgame_playable_page_path',
        'wxgamePlayablePageEndCoverImg' => 'wxgame_playable_page_end_cover_img',
        'wxgamePlayablePageEndDesc' => 'wxgame_playable_page_end_desc',
        'wxgamePlayablePageOrientation' => 'wxgame_playable_page_orientation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wxgamePlayablePageSwitch' => 'setWxgamePlayablePageSwitch',
        'wxgamePlayablePagePath' => 'setWxgamePlayablePagePath',
        'wxgamePlayablePageEndCoverImg' => 'setWxgamePlayablePageEndCoverImg',
        'wxgamePlayablePageEndDesc' => 'setWxgamePlayablePageEndDesc',
        'wxgamePlayablePageOrientation' => 'setWxgamePlayablePageOrientation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wxgamePlayablePageSwitch' => 'getWxgamePlayablePageSwitch',
        'wxgamePlayablePagePath' => 'getWxgamePlayablePagePath',
        'wxgamePlayablePageEndCoverImg' => 'getWxgamePlayablePageEndCoverImg',
        'wxgamePlayablePageEndDesc' => 'getWxgamePlayablePageEndDesc',
        'wxgamePlayablePageOrientation' => 'getWxgamePlayablePageOrientation'
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
        $this->container['wxgamePlayablePageSwitch'] = isset($data['wxgamePlayablePageSwitch']) ? $data['wxgamePlayablePageSwitch'] : null;
        $this->container['wxgamePlayablePagePath'] = isset($data['wxgamePlayablePagePath']) ? $data['wxgamePlayablePagePath'] : null;
        $this->container['wxgamePlayablePageEndCoverImg'] = isset($data['wxgamePlayablePageEndCoverImg']) ? $data['wxgamePlayablePageEndCoverImg'] : null;
        $this->container['wxgamePlayablePageEndDesc'] = isset($data['wxgamePlayablePageEndDesc']) ? $data['wxgamePlayablePageEndDesc'] : null;
        $this->container['wxgamePlayablePageOrientation'] = isset($data['wxgamePlayablePageOrientation']) ? $data['wxgamePlayablePageOrientation'] : null;
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
     * Gets wxgamePlayablePageSwitch
     *
     * @return bool|mixed
     */
    public function getWxgamePlayablePageSwitch()
    {
        return $this->container['wxgamePlayablePageSwitch'];
    }

    /**
     * Sets wxgamePlayablePageSwitch
     *
     * @param bool|mixed $wxgamePlayablePageSwitch wxgamePlayablePageSwitch
     *
     * @return $this
     */
    public function setWxgamePlayablePageSwitch($wxgamePlayablePageSwitch)
    {
        $this->container['wxgamePlayablePageSwitch'] = $wxgamePlayablePageSwitch;

        return $this;
    }

    /**
     * Gets wxgamePlayablePagePath
     *
     * @return string|mixed
     */
    public function getWxgamePlayablePagePath()
    {
        return $this->container['wxgamePlayablePagePath'];
    }

    /**
     * Sets wxgamePlayablePagePath
     *
     * @param string|mixed $wxgamePlayablePagePath wxgamePlayablePagePath
     *
     * @return $this
     */
    public function setWxgamePlayablePagePath($wxgamePlayablePagePath)
    {
        $this->container['wxgamePlayablePagePath'] = $wxgamePlayablePagePath;

        return $this;
    }

    /**
     * Gets wxgamePlayablePageEndCoverImg
     *
     * @return string|mixed
     */
    public function getWxgamePlayablePageEndCoverImg()
    {
        return $this->container['wxgamePlayablePageEndCoverImg'];
    }

    /**
     * Sets wxgamePlayablePageEndCoverImg
     *
     * @param string|mixed $wxgamePlayablePageEndCoverImg wxgamePlayablePageEndCoverImg
     *
     * @return $this
     */
    public function setWxgamePlayablePageEndCoverImg($wxgamePlayablePageEndCoverImg)
    {
        $this->container['wxgamePlayablePageEndCoverImg'] = $wxgamePlayablePageEndCoverImg;

        return $this;
    }

    /**
     * Gets wxgamePlayablePageEndDesc
     *
     * @return string|mixed
     */
    public function getWxgamePlayablePageEndDesc()
    {
        return $this->container['wxgamePlayablePageEndDesc'];
    }

    /**
     * Sets wxgamePlayablePageEndDesc
     *
     * @param string|mixed $wxgamePlayablePageEndDesc wxgamePlayablePageEndDesc
     *
     * @return $this
     */
    public function setWxgamePlayablePageEndDesc($wxgamePlayablePageEndDesc)
    {
        $this->container['wxgamePlayablePageEndDesc'] = $wxgamePlayablePageEndDesc;

        return $this;
    }

    /**
     * Gets wxgamePlayablePageOrientation
     *
     * @return \TencentAds\Model\V3\WxgamePlayablePageOrientation|mixed
     */
    public function getWxgamePlayablePageOrientation()
    {
        return $this->container['wxgamePlayablePageOrientation'];
    }

    /**
     * Sets wxgamePlayablePageOrientation
     *
     * @param \TencentAds\Model\V3\WxgamePlayablePageOrientation|mixed $wxgamePlayablePageOrientation wxgamePlayablePageOrientation
     *
     * @return $this
     */
    public function setWxgamePlayablePageOrientation($wxgamePlayablePageOrientation)
    {
        $this->container['wxgamePlayablePageOrientation'] = $wxgamePlayablePageOrientation;

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


