<?php
/**
 * CanvasAppAndroidSpecType
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

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * CanvasAppAndroidSpecType Class Doc Comment
 *
 * @category Class
 * @description 应用下载Android元素
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CanvasAppAndroidSpecType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'canvas_app_android_spec_type';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'appAndroidId' => 'string',
        'deepLinkUrl' => 'string',
        'appAndroidChannelPackageId' => 'string',
        'appMarketPackage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'appAndroidId' => null,
        'deepLinkUrl' => null,
        'appAndroidChannelPackageId' => null,
        'appMarketPackage' => null
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
        'appAndroidId' => 'app_android_id',
        'deepLinkUrl' => 'deep_link_url',
        'appAndroidChannelPackageId' => 'app_android_channel_package_id',
        'appMarketPackage' => 'app_market_package'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appAndroidId' => 'setAppAndroidId',
        'deepLinkUrl' => 'setDeepLinkUrl',
        'appAndroidChannelPackageId' => 'setAppAndroidChannelPackageId',
        'appMarketPackage' => 'setAppMarketPackage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appAndroidId' => 'getAppAndroidId',
        'deepLinkUrl' => 'getDeepLinkUrl',
        'appAndroidChannelPackageId' => 'getAppAndroidChannelPackageId',
        'appMarketPackage' => 'getAppMarketPackage'
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
        $this->container['appAndroidId'] = isset($data['appAndroidId']) ? $data['appAndroidId'] : null;
        $this->container['deepLinkUrl'] = isset($data['deepLinkUrl']) ? $data['deepLinkUrl'] : null;
        $this->container['appAndroidChannelPackageId'] = isset($data['appAndroidChannelPackageId']) ? $data['appAndroidChannelPackageId'] : null;
        $this->container['appMarketPackage'] = isset($data['appMarketPackage']) ? $data['appMarketPackage'] : null;
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
     * Gets appAndroidId
     *
     * @return string|mixed
     */
    public function getAppAndroidId()
    {
        return $this->container['appAndroidId'];
    }

    /**
     * Sets appAndroidId
     *
     * @param string|mixed $appAndroidId appAndroidId
     *
     * @return $this
     */
    public function setAppAndroidId($appAndroidId)
    {
        $this->container['appAndroidId'] = $appAndroidId;

        return $this;
    }

    /**
     * Gets deepLinkUrl
     *
     * @return string|mixed
     */
    public function getDeepLinkUrl()
    {
        return $this->container['deepLinkUrl'];
    }

    /**
     * Sets deepLinkUrl
     *
     * @param string|mixed $deepLinkUrl deepLinkUrl
     *
     * @return $this
     */
    public function setDeepLinkUrl($deepLinkUrl)
    {
        $this->container['deepLinkUrl'] = $deepLinkUrl;

        return $this;
    }

    /**
     * Gets appAndroidChannelPackageId
     *
     * @return string|mixed
     */
    public function getAppAndroidChannelPackageId()
    {
        return $this->container['appAndroidChannelPackageId'];
    }

    /**
     * Sets appAndroidChannelPackageId
     *
     * @param string|mixed $appAndroidChannelPackageId appAndroidChannelPackageId
     *
     * @return $this
     */
    public function setAppAndroidChannelPackageId($appAndroidChannelPackageId)
    {
        $this->container['appAndroidChannelPackageId'] = $appAndroidChannelPackageId;

        return $this;
    }

    /**
     * Gets appMarketPackage
     *
     * @return string|mixed
     */
    public function getAppMarketPackage()
    {
        return $this->container['appMarketPackage'];
    }

    /**
     * Sets appMarketPackage
     *
     * @param string|mixed $appMarketPackage appMarketPackage
     *
     * @return $this
     */
    public function setAppMarketPackage($appMarketPackage)
    {
        $this->container['appMarketPackage'] = $appMarketPackage;

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


