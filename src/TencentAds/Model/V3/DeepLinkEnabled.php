<?php
/**
 * DeepLinkEnabled
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
 * DeepLinkEnabled Class Doc Comment
 *
 * @category Class
 * @description 应用直达选项
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeepLinkEnabled implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'deep_link_enabled';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iosDeepLinkEnabled' => 'bool',
        'androidDeepLinkEnabled' => 'bool',
        'h5DeepLinkEnabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iosDeepLinkEnabled' => null,
        'androidDeepLinkEnabled' => null,
        'h5DeepLinkEnabled' => null
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
        'iosDeepLinkEnabled' => 'ios_deep_link_enabled',
        'androidDeepLinkEnabled' => 'android_deep_link_enabled',
        'h5DeepLinkEnabled' => 'h5_deep_link_enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iosDeepLinkEnabled' => 'setIosDeepLinkEnabled',
        'androidDeepLinkEnabled' => 'setAndroidDeepLinkEnabled',
        'h5DeepLinkEnabled' => 'setH5DeepLinkEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iosDeepLinkEnabled' => 'getIosDeepLinkEnabled',
        'androidDeepLinkEnabled' => 'getAndroidDeepLinkEnabled',
        'h5DeepLinkEnabled' => 'getH5DeepLinkEnabled'
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
        $this->container['iosDeepLinkEnabled'] = isset($data['iosDeepLinkEnabled']) ? $data['iosDeepLinkEnabled'] : null;
        $this->container['androidDeepLinkEnabled'] = isset($data['androidDeepLinkEnabled']) ? $data['androidDeepLinkEnabled'] : null;
        $this->container['h5DeepLinkEnabled'] = isset($data['h5DeepLinkEnabled']) ? $data['h5DeepLinkEnabled'] : null;
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
     * Gets iosDeepLinkEnabled
     *
     * @return bool|mixed
     */
    public function getIosDeepLinkEnabled()
    {
        return $this->container['iosDeepLinkEnabled'];
    }

    /**
     * Sets iosDeepLinkEnabled
     *
     * @param bool|mixed $iosDeepLinkEnabled iosDeepLinkEnabled
     *
     * @return $this
     */
    public function setIosDeepLinkEnabled($iosDeepLinkEnabled)
    {
        $this->container['iosDeepLinkEnabled'] = $iosDeepLinkEnabled;

        return $this;
    }

    /**
     * Gets androidDeepLinkEnabled
     *
     * @return bool|mixed
     */
    public function getAndroidDeepLinkEnabled()
    {
        return $this->container['androidDeepLinkEnabled'];
    }

    /**
     * Sets androidDeepLinkEnabled
     *
     * @param bool|mixed $androidDeepLinkEnabled androidDeepLinkEnabled
     *
     * @return $this
     */
    public function setAndroidDeepLinkEnabled($androidDeepLinkEnabled)
    {
        $this->container['androidDeepLinkEnabled'] = $androidDeepLinkEnabled;

        return $this;
    }

    /**
     * Gets h5DeepLinkEnabled
     *
     * @return bool|mixed
     */
    public function getH5DeepLinkEnabled()
    {
        return $this->container['h5DeepLinkEnabled'];
    }

    /**
     * Sets h5DeepLinkEnabled
     *
     * @param bool|mixed $h5DeepLinkEnabled h5DeepLinkEnabled
     *
     * @return $this
     */
    public function setH5DeepLinkEnabled($h5DeepLinkEnabled)
    {
        $this->container['h5DeepLinkEnabled'] = $h5DeepLinkEnabled;

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


