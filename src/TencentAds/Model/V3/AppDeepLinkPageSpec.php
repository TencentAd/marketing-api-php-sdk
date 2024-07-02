<?php
/**
 * AppDeepLinkPageSpec
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
 * AppDeepLinkPageSpec Class Doc Comment
 *
 * @category Class
 * @description 应用直达数据
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppDeepLinkPageSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'app_deep_link_page_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'androidDeepLinkAppId' => 'string',
        'androidDeepLinkUrl' => 'string',
        'iosDeepLinkAppId' => 'string',
        'iosDeepLinkUrl' => 'string',
        'universalLinkUrl' => 'string',
        'mpaAndroidDeepLinkWildcardUrl' => 'string',
        'mpaIosDeepLinkWildcardUrl' => 'string',
        'mpaUniversalLinkWildcardUrl' => 'string',
        'deepLinkUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'androidDeepLinkAppId' => null,
        'androidDeepLinkUrl' => null,
        'iosDeepLinkAppId' => null,
        'iosDeepLinkUrl' => null,
        'universalLinkUrl' => null,
        'mpaAndroidDeepLinkWildcardUrl' => null,
        'mpaIosDeepLinkWildcardUrl' => null,
        'mpaUniversalLinkWildcardUrl' => null,
        'deepLinkUrl' => null
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
        'androidDeepLinkAppId' => 'android_deep_link_app_id',
        'androidDeepLinkUrl' => 'android_deep_link_url',
        'iosDeepLinkAppId' => 'ios_deep_link_app_id',
        'iosDeepLinkUrl' => 'ios_deep_link_url',
        'universalLinkUrl' => 'universal_link_url',
        'mpaAndroidDeepLinkWildcardUrl' => 'mpa_android_deep_link_wildcard_url',
        'mpaIosDeepLinkWildcardUrl' => 'mpa_ios_deep_link_wildcard_url',
        'mpaUniversalLinkWildcardUrl' => 'mpa_universal_link_wildcard_url',
        'deepLinkUrl' => 'deep_link_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'androidDeepLinkAppId' => 'setAndroidDeepLinkAppId',
        'androidDeepLinkUrl' => 'setAndroidDeepLinkUrl',
        'iosDeepLinkAppId' => 'setIosDeepLinkAppId',
        'iosDeepLinkUrl' => 'setIosDeepLinkUrl',
        'universalLinkUrl' => 'setUniversalLinkUrl',
        'mpaAndroidDeepLinkWildcardUrl' => 'setMpaAndroidDeepLinkWildcardUrl',
        'mpaIosDeepLinkWildcardUrl' => 'setMpaIosDeepLinkWildcardUrl',
        'mpaUniversalLinkWildcardUrl' => 'setMpaUniversalLinkWildcardUrl',
        'deepLinkUrl' => 'setDeepLinkUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'androidDeepLinkAppId' => 'getAndroidDeepLinkAppId',
        'androidDeepLinkUrl' => 'getAndroidDeepLinkUrl',
        'iosDeepLinkAppId' => 'getIosDeepLinkAppId',
        'iosDeepLinkUrl' => 'getIosDeepLinkUrl',
        'universalLinkUrl' => 'getUniversalLinkUrl',
        'mpaAndroidDeepLinkWildcardUrl' => 'getMpaAndroidDeepLinkWildcardUrl',
        'mpaIosDeepLinkWildcardUrl' => 'getMpaIosDeepLinkWildcardUrl',
        'mpaUniversalLinkWildcardUrl' => 'getMpaUniversalLinkWildcardUrl',
        'deepLinkUrl' => 'getDeepLinkUrl'
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
        $this->container['androidDeepLinkAppId'] = isset($data['androidDeepLinkAppId']) ? $data['androidDeepLinkAppId'] : null;
        $this->container['androidDeepLinkUrl'] = isset($data['androidDeepLinkUrl']) ? $data['androidDeepLinkUrl'] : null;
        $this->container['iosDeepLinkAppId'] = isset($data['iosDeepLinkAppId']) ? $data['iosDeepLinkAppId'] : null;
        $this->container['iosDeepLinkUrl'] = isset($data['iosDeepLinkUrl']) ? $data['iosDeepLinkUrl'] : null;
        $this->container['universalLinkUrl'] = isset($data['universalLinkUrl']) ? $data['universalLinkUrl'] : null;
        $this->container['mpaAndroidDeepLinkWildcardUrl'] = isset($data['mpaAndroidDeepLinkWildcardUrl']) ? $data['mpaAndroidDeepLinkWildcardUrl'] : null;
        $this->container['mpaIosDeepLinkWildcardUrl'] = isset($data['mpaIosDeepLinkWildcardUrl']) ? $data['mpaIosDeepLinkWildcardUrl'] : null;
        $this->container['mpaUniversalLinkWildcardUrl'] = isset($data['mpaUniversalLinkWildcardUrl']) ? $data['mpaUniversalLinkWildcardUrl'] : null;
        $this->container['deepLinkUrl'] = isset($data['deepLinkUrl']) ? $data['deepLinkUrl'] : null;
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
     * Gets androidDeepLinkAppId
     *
     * @return string|mixed
     */
    public function getAndroidDeepLinkAppId()
    {
        return $this->container['androidDeepLinkAppId'];
    }

    /**
     * Sets androidDeepLinkAppId
     *
     * @param string|mixed $androidDeepLinkAppId androidDeepLinkAppId
     *
     * @return $this
     */
    public function setAndroidDeepLinkAppId($androidDeepLinkAppId)
    {
        $this->container['androidDeepLinkAppId'] = $androidDeepLinkAppId;

        return $this;
    }

    /**
     * Gets androidDeepLinkUrl
     *
     * @return string|mixed
     */
    public function getAndroidDeepLinkUrl()
    {
        return $this->container['androidDeepLinkUrl'];
    }

    /**
     * Sets androidDeepLinkUrl
     *
     * @param string|mixed $androidDeepLinkUrl androidDeepLinkUrl
     *
     * @return $this
     */
    public function setAndroidDeepLinkUrl($androidDeepLinkUrl)
    {
        $this->container['androidDeepLinkUrl'] = $androidDeepLinkUrl;

        return $this;
    }

    /**
     * Gets iosDeepLinkAppId
     *
     * @return string|mixed
     */
    public function getIosDeepLinkAppId()
    {
        return $this->container['iosDeepLinkAppId'];
    }

    /**
     * Sets iosDeepLinkAppId
     *
     * @param string|mixed $iosDeepLinkAppId iosDeepLinkAppId
     *
     * @return $this
     */
    public function setIosDeepLinkAppId($iosDeepLinkAppId)
    {
        $this->container['iosDeepLinkAppId'] = $iosDeepLinkAppId;

        return $this;
    }

    /**
     * Gets iosDeepLinkUrl
     *
     * @return string|mixed
     */
    public function getIosDeepLinkUrl()
    {
        return $this->container['iosDeepLinkUrl'];
    }

    /**
     * Sets iosDeepLinkUrl
     *
     * @param string|mixed $iosDeepLinkUrl iosDeepLinkUrl
     *
     * @return $this
     */
    public function setIosDeepLinkUrl($iosDeepLinkUrl)
    {
        $this->container['iosDeepLinkUrl'] = $iosDeepLinkUrl;

        return $this;
    }

    /**
     * Gets universalLinkUrl
     *
     * @return string|mixed
     */
    public function getUniversalLinkUrl()
    {
        return $this->container['universalLinkUrl'];
    }

    /**
     * Sets universalLinkUrl
     *
     * @param string|mixed $universalLinkUrl universalLinkUrl
     *
     * @return $this
     */
    public function setUniversalLinkUrl($universalLinkUrl)
    {
        $this->container['universalLinkUrl'] = $universalLinkUrl;

        return $this;
    }

    /**
     * Gets mpaAndroidDeepLinkWildcardUrl
     *
     * @return string|mixed
     */
    public function getMpaAndroidDeepLinkWildcardUrl()
    {
        return $this->container['mpaAndroidDeepLinkWildcardUrl'];
    }

    /**
     * Sets mpaAndroidDeepLinkWildcardUrl
     *
     * @param string|mixed $mpaAndroidDeepLinkWildcardUrl mpaAndroidDeepLinkWildcardUrl
     *
     * @return $this
     */
    public function setMpaAndroidDeepLinkWildcardUrl($mpaAndroidDeepLinkWildcardUrl)
    {
        $this->container['mpaAndroidDeepLinkWildcardUrl'] = $mpaAndroidDeepLinkWildcardUrl;

        return $this;
    }

    /**
     * Gets mpaIosDeepLinkWildcardUrl
     *
     * @return string|mixed
     */
    public function getMpaIosDeepLinkWildcardUrl()
    {
        return $this->container['mpaIosDeepLinkWildcardUrl'];
    }

    /**
     * Sets mpaIosDeepLinkWildcardUrl
     *
     * @param string|mixed $mpaIosDeepLinkWildcardUrl mpaIosDeepLinkWildcardUrl
     *
     * @return $this
     */
    public function setMpaIosDeepLinkWildcardUrl($mpaIosDeepLinkWildcardUrl)
    {
        $this->container['mpaIosDeepLinkWildcardUrl'] = $mpaIosDeepLinkWildcardUrl;

        return $this;
    }

    /**
     * Gets mpaUniversalLinkWildcardUrl
     *
     * @return string|mixed
     */
    public function getMpaUniversalLinkWildcardUrl()
    {
        return $this->container['mpaUniversalLinkWildcardUrl'];
    }

    /**
     * Sets mpaUniversalLinkWildcardUrl
     *
     * @param string|mixed $mpaUniversalLinkWildcardUrl mpaUniversalLinkWildcardUrl
     *
     * @return $this
     */
    public function setMpaUniversalLinkWildcardUrl($mpaUniversalLinkWildcardUrl)
    {
        $this->container['mpaUniversalLinkWildcardUrl'] = $mpaUniversalLinkWildcardUrl;

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


