<?php
/**
 * SimpleCanvasWechatSpec
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
 * SimpleCanvasWechatSpec Class Doc Comment
 *
 * @category Class
 * @description 简版原生页相关信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SimpleCanvasWechatSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'simple_canvas_wechat_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'simpleCanvasWebviewType' => '\TencentAds\Model\V3\SimpleCanvasWebviewType',
        'simpleCanvasWebviewPageId' => 'string',
        'simpleCanvasSubType' => '\TencentAds\Model\V3\SimpleCanvasSubType',
        'simpleCanvasShareTitle' => 'string',
        'simpleCanvasShareDesc' => 'string',
        'simpleCanvasWebviewUrl' => 'string',
        'wechatChannelsLiveReserveId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'simpleCanvasWebviewType' => null,
        'simpleCanvasWebviewPageId' => null,
        'simpleCanvasSubType' => null,
        'simpleCanvasShareTitle' => null,
        'simpleCanvasShareDesc' => null,
        'simpleCanvasWebviewUrl' => null,
        'wechatChannelsLiveReserveId' => null
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
        'simpleCanvasWebviewType' => 'simple_canvas_webview_type',
        'simpleCanvasWebviewPageId' => 'simple_canvas_webview_page_id',
        'simpleCanvasSubType' => 'simple_canvas_sub_type',
        'simpleCanvasShareTitle' => 'simple_canvas_share_title',
        'simpleCanvasShareDesc' => 'simple_canvas_share_desc',
        'simpleCanvasWebviewUrl' => 'simple_canvas_webview_url',
        'wechatChannelsLiveReserveId' => 'wechat_channels_live_reserve_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'simpleCanvasWebviewType' => 'setSimpleCanvasWebviewType',
        'simpleCanvasWebviewPageId' => 'setSimpleCanvasWebviewPageId',
        'simpleCanvasSubType' => 'setSimpleCanvasSubType',
        'simpleCanvasShareTitle' => 'setSimpleCanvasShareTitle',
        'simpleCanvasShareDesc' => 'setSimpleCanvasShareDesc',
        'simpleCanvasWebviewUrl' => 'setSimpleCanvasWebviewUrl',
        'wechatChannelsLiveReserveId' => 'setWechatChannelsLiveReserveId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'simpleCanvasWebviewType' => 'getSimpleCanvasWebviewType',
        'simpleCanvasWebviewPageId' => 'getSimpleCanvasWebviewPageId',
        'simpleCanvasSubType' => 'getSimpleCanvasSubType',
        'simpleCanvasShareTitle' => 'getSimpleCanvasShareTitle',
        'simpleCanvasShareDesc' => 'getSimpleCanvasShareDesc',
        'simpleCanvasWebviewUrl' => 'getSimpleCanvasWebviewUrl',
        'wechatChannelsLiveReserveId' => 'getWechatChannelsLiveReserveId'
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
        $this->container['simpleCanvasWebviewType'] = isset($data['simpleCanvasWebviewType']) ? $data['simpleCanvasWebviewType'] : null;
        $this->container['simpleCanvasWebviewPageId'] = isset($data['simpleCanvasWebviewPageId']) ? $data['simpleCanvasWebviewPageId'] : null;
        $this->container['simpleCanvasSubType'] = isset($data['simpleCanvasSubType']) ? $data['simpleCanvasSubType'] : null;
        $this->container['simpleCanvasShareTitle'] = isset($data['simpleCanvasShareTitle']) ? $data['simpleCanvasShareTitle'] : null;
        $this->container['simpleCanvasShareDesc'] = isset($data['simpleCanvasShareDesc']) ? $data['simpleCanvasShareDesc'] : null;
        $this->container['simpleCanvasWebviewUrl'] = isset($data['simpleCanvasWebviewUrl']) ? $data['simpleCanvasWebviewUrl'] : null;
        $this->container['wechatChannelsLiveReserveId'] = isset($data['wechatChannelsLiveReserveId']) ? $data['wechatChannelsLiveReserveId'] : null;
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
     * Gets simpleCanvasWebviewType
     *
     * @return \TencentAds\Model\V3\SimpleCanvasWebviewType|mixed
     */
    public function getSimpleCanvasWebviewType()
    {
        return $this->container['simpleCanvasWebviewType'];
    }

    /**
     * Sets simpleCanvasWebviewType
     *
     * @param \TencentAds\Model\V3\SimpleCanvasWebviewType|mixed $simpleCanvasWebviewType simpleCanvasWebviewType
     *
     * @return $this
     */
    public function setSimpleCanvasWebviewType($simpleCanvasWebviewType)
    {
        $this->container['simpleCanvasWebviewType'] = $simpleCanvasWebviewType;

        return $this;
    }

    /**
     * Gets simpleCanvasWebviewPageId
     *
     * @return string|mixed
     */
    public function getSimpleCanvasWebviewPageId()
    {
        return $this->container['simpleCanvasWebviewPageId'];
    }

    /**
     * Sets simpleCanvasWebviewPageId
     *
     * @param string|mixed $simpleCanvasWebviewPageId simpleCanvasWebviewPageId
     *
     * @return $this
     */
    public function setSimpleCanvasWebviewPageId($simpleCanvasWebviewPageId)
    {
        $this->container['simpleCanvasWebviewPageId'] = $simpleCanvasWebviewPageId;

        return $this;
    }

    /**
     * Gets simpleCanvasSubType
     *
     * @return \TencentAds\Model\V3\SimpleCanvasSubType|mixed
     */
    public function getSimpleCanvasSubType()
    {
        return $this->container['simpleCanvasSubType'];
    }

    /**
     * Sets simpleCanvasSubType
     *
     * @param \TencentAds\Model\V3\SimpleCanvasSubType|mixed $simpleCanvasSubType simpleCanvasSubType
     *
     * @return $this
     */
    public function setSimpleCanvasSubType($simpleCanvasSubType)
    {
        $this->container['simpleCanvasSubType'] = $simpleCanvasSubType;

        return $this;
    }

    /**
     * Gets simpleCanvasShareTitle
     *
     * @return string|mixed
     */
    public function getSimpleCanvasShareTitle()
    {
        return $this->container['simpleCanvasShareTitle'];
    }

    /**
     * Sets simpleCanvasShareTitle
     *
     * @param string|mixed $simpleCanvasShareTitle simpleCanvasShareTitle
     *
     * @return $this
     */
    public function setSimpleCanvasShareTitle($simpleCanvasShareTitle)
    {
        $this->container['simpleCanvasShareTitle'] = $simpleCanvasShareTitle;

        return $this;
    }

    /**
     * Gets simpleCanvasShareDesc
     *
     * @return string|mixed
     */
    public function getSimpleCanvasShareDesc()
    {
        return $this->container['simpleCanvasShareDesc'];
    }

    /**
     * Sets simpleCanvasShareDesc
     *
     * @param string|mixed $simpleCanvasShareDesc simpleCanvasShareDesc
     *
     * @return $this
     */
    public function setSimpleCanvasShareDesc($simpleCanvasShareDesc)
    {
        $this->container['simpleCanvasShareDesc'] = $simpleCanvasShareDesc;

        return $this;
    }

    /**
     * Gets simpleCanvasWebviewUrl
     *
     * @return string|mixed
     */
    public function getSimpleCanvasWebviewUrl()
    {
        return $this->container['simpleCanvasWebviewUrl'];
    }

    /**
     * Sets simpleCanvasWebviewUrl
     *
     * @param string|mixed $simpleCanvasWebviewUrl simpleCanvasWebviewUrl
     *
     * @return $this
     */
    public function setSimpleCanvasWebviewUrl($simpleCanvasWebviewUrl)
    {
        $this->container['simpleCanvasWebviewUrl'] = $simpleCanvasWebviewUrl;

        return $this;
    }

    /**
     * Gets wechatChannelsLiveReserveId
     *
     * @return string|mixed
     */
    public function getWechatChannelsLiveReserveId()
    {
        return $this->container['wechatChannelsLiveReserveId'];
    }

    /**
     * Sets wechatChannelsLiveReserveId
     *
     * @param string|mixed $wechatChannelsLiveReserveId wechatChannelsLiveReserveId
     *
     * @return $this
     */
    public function setWechatChannelsLiveReserveId($wechatChannelsLiveReserveId)
    {
        $this->container['wechatChannelsLiveReserveId'] = $wechatChannelsLiveReserveId;

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


