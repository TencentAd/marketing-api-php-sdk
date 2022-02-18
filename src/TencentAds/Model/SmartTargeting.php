<?php
/**
 * SmartTargeting
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
 * SmartTargeting Class Doc Comment
 *
 * @category Class
 * @description 智能定向功能,功能灰度开放，如需使用可联系您的运营接口同学。&lt;br&gt;智能定向功能与自动扩量/系统优选相关字段不可同时设置。
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartTargeting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'smart_targeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'smartTargetingVersion' => 'int',
        'smartTargetingSwitch' => 'bool',
        'startAudience' => 'int[]',
        'unbreakableTargeting' => '\TencentAds\Model\UnbreakableTargetingSetting'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'smartTargetingVersion' => 'int64',
        'smartTargetingSwitch' => null,
        'startAudience' => 'int64',
        'unbreakableTargeting' => null
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
        'smartTargetingVersion' => 'smart_targeting_version',
        'smartTargetingSwitch' => 'smart_targeting_switch',
        'startAudience' => 'start_audience',
        'unbreakableTargeting' => 'unbreakable_targeting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'smartTargetingVersion' => 'setSmartTargetingVersion',
        'smartTargetingSwitch' => 'setSmartTargetingSwitch',
        'startAudience' => 'setStartAudience',
        'unbreakableTargeting' => 'setUnbreakableTargeting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'smartTargetingVersion' => 'getSmartTargetingVersion',
        'smartTargetingSwitch' => 'getSmartTargetingSwitch',
        'startAudience' => 'getStartAudience',
        'unbreakableTargeting' => 'getUnbreakableTargeting'
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
        $this->container['smartTargetingVersion'] = isset($data['smartTargetingVersion']) ? $data['smartTargetingVersion'] : null;
        $this->container['smartTargetingSwitch'] = isset($data['smartTargetingSwitch']) ? $data['smartTargetingSwitch'] : null;
        $this->container['startAudience'] = isset($data['startAudience']) ? $data['startAudience'] : null;
        $this->container['unbreakableTargeting'] = isset($data['unbreakableTargeting']) ? $data['unbreakableTargeting'] : null;
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
     * Gets smartTargetingVersion
     *
     * @return int|mixed
     */
    public function getSmartTargetingVersion()
    {
        return $this->container['smartTargetingVersion'];
    }

    /**
     * Sets smartTargetingVersion
     *
     * @param int|mixed $smartTargetingVersion smartTargetingVersion
     *
     * @return $this
     */
    public function setSmartTargetingVersion($smartTargetingVersion)
    {
        $this->container['smartTargetingVersion'] = $smartTargetingVersion;

        return $this;
    }

    /**
     * Gets smartTargetingSwitch
     *
     * @return bool|mixed
     */
    public function getSmartTargetingSwitch()
    {
        return $this->container['smartTargetingSwitch'];
    }

    /**
     * Sets smartTargetingSwitch
     *
     * @param bool|mixed $smartTargetingSwitch smartTargetingSwitch
     *
     * @return $this
     */
    public function setSmartTargetingSwitch($smartTargetingSwitch)
    {
        $this->container['smartTargetingSwitch'] = $smartTargetingSwitch;

        return $this;
    }

    /**
     * Gets startAudience
     *
     * @return int[]|mixed
     */
    public function getStartAudience()
    {
        return $this->container['startAudience'];
    }

    /**
     * Sets startAudience
     *
     * @param int[]|mixed $startAudience startAudience
     *
     * @return $this
     */
    public function setStartAudience($startAudience)
    {
        $this->container['startAudience'] = $startAudience;

        return $this;
    }

    /**
     * Gets unbreakableTargeting
     *
     * @return \TencentAds\Model\UnbreakableTargetingSetting|mixed
     */
    public function getUnbreakableTargeting()
    {
        return $this->container['unbreakableTargeting'];
    }

    /**
     * Sets unbreakableTargeting
     *
     * @param \TencentAds\Model\UnbreakableTargetingSetting|mixed $unbreakableTargeting unbreakableTargeting
     *
     * @return $this
     */
    public function setUnbreakableTargeting($unbreakableTargeting)
    {
        $this->container['unbreakableTargeting'] = $unbreakableTargeting;

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

