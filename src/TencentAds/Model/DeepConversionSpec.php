<?php
/**
 * DeepConversionSpec
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
 * DeepConversionSpec Class Doc Comment
 *
 * @category Class
 * @description oCPC/oCPM深度优化内容
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeepConversionSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'deep_conversion_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deepConversionType' => '\TencentAds\Model\DeepConversionType',
        'deepConversionBehaviorSpec' => '\TencentAds\Model\DeepConversionBehaviorSpec',
        'deepConversionWorthSpec' => '\TencentAds\Model\DeepConversionWorthSpec',
        'deepConversionWorthAdvancedSpec' => '\TencentAds\Model\DeepConversionWorthAdvancedSpec',
        'deepConversionBehaviorAdvancedSpec' => '\TencentAds\Model\DeepConversionBehaviorAdvancedSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deepConversionType' => null,
        'deepConversionBehaviorSpec' => null,
        'deepConversionWorthSpec' => null,
        'deepConversionWorthAdvancedSpec' => null,
        'deepConversionBehaviorAdvancedSpec' => null
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
        'deepConversionType' => 'deep_conversion_type',
        'deepConversionBehaviorSpec' => 'deep_conversion_behavior_spec',
        'deepConversionWorthSpec' => 'deep_conversion_worth_spec',
        'deepConversionWorthAdvancedSpec' => 'deep_conversion_worth_advanced_spec',
        'deepConversionBehaviorAdvancedSpec' => 'deep_conversion_behavior_advanced_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deepConversionType' => 'setDeepConversionType',
        'deepConversionBehaviorSpec' => 'setDeepConversionBehaviorSpec',
        'deepConversionWorthSpec' => 'setDeepConversionWorthSpec',
        'deepConversionWorthAdvancedSpec' => 'setDeepConversionWorthAdvancedSpec',
        'deepConversionBehaviorAdvancedSpec' => 'setDeepConversionBehaviorAdvancedSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deepConversionType' => 'getDeepConversionType',
        'deepConversionBehaviorSpec' => 'getDeepConversionBehaviorSpec',
        'deepConversionWorthSpec' => 'getDeepConversionWorthSpec',
        'deepConversionWorthAdvancedSpec' => 'getDeepConversionWorthAdvancedSpec',
        'deepConversionBehaviorAdvancedSpec' => 'getDeepConversionBehaviorAdvancedSpec'
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
        $this->container['deepConversionType'] = isset($data['deepConversionType']) ? $data['deepConversionType'] : null;
        $this->container['deepConversionBehaviorSpec'] = isset($data['deepConversionBehaviorSpec']) ? $data['deepConversionBehaviorSpec'] : null;
        $this->container['deepConversionWorthSpec'] = isset($data['deepConversionWorthSpec']) ? $data['deepConversionWorthSpec'] : null;
        $this->container['deepConversionWorthAdvancedSpec'] = isset($data['deepConversionWorthAdvancedSpec']) ? $data['deepConversionWorthAdvancedSpec'] : null;
        $this->container['deepConversionBehaviorAdvancedSpec'] = isset($data['deepConversionBehaviorAdvancedSpec']) ? $data['deepConversionBehaviorAdvancedSpec'] : null;
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
     * Gets deepConversionType
     *
     * @return \TencentAds\Model\DeepConversionType|mixed
     */
    public function getDeepConversionType()
    {
        return $this->container['deepConversionType'];
    }

    /**
     * Sets deepConversionType
     *
     * @param \TencentAds\Model\DeepConversionType|mixed $deepConversionType deepConversionType
     *
     * @return $this
     */
    public function setDeepConversionType($deepConversionType)
    {
        $this->container['deepConversionType'] = $deepConversionType;

        return $this;
    }

    /**
     * Gets deepConversionBehaviorSpec
     *
     * @return \TencentAds\Model\DeepConversionBehaviorSpec|mixed
     */
    public function getDeepConversionBehaviorSpec()
    {
        return $this->container['deepConversionBehaviorSpec'];
    }

    /**
     * Sets deepConversionBehaviorSpec
     *
     * @param \TencentAds\Model\DeepConversionBehaviorSpec|mixed $deepConversionBehaviorSpec deepConversionBehaviorSpec
     *
     * @return $this
     */
    public function setDeepConversionBehaviorSpec($deepConversionBehaviorSpec)
    {
        $this->container['deepConversionBehaviorSpec'] = $deepConversionBehaviorSpec;

        return $this;
    }

    /**
     * Gets deepConversionWorthSpec
     *
     * @return \TencentAds\Model\DeepConversionWorthSpec|mixed
     */
    public function getDeepConversionWorthSpec()
    {
        return $this->container['deepConversionWorthSpec'];
    }

    /**
     * Sets deepConversionWorthSpec
     *
     * @param \TencentAds\Model\DeepConversionWorthSpec|mixed $deepConversionWorthSpec deepConversionWorthSpec
     *
     * @return $this
     */
    public function setDeepConversionWorthSpec($deepConversionWorthSpec)
    {
        $this->container['deepConversionWorthSpec'] = $deepConversionWorthSpec;

        return $this;
    }

    /**
     * Gets deepConversionWorthAdvancedSpec
     *
     * @return \TencentAds\Model\DeepConversionWorthAdvancedSpec|mixed
     */
    public function getDeepConversionWorthAdvancedSpec()
    {
        return $this->container['deepConversionWorthAdvancedSpec'];
    }

    /**
     * Sets deepConversionWorthAdvancedSpec
     *
     * @param \TencentAds\Model\DeepConversionWorthAdvancedSpec|mixed $deepConversionWorthAdvancedSpec deepConversionWorthAdvancedSpec
     *
     * @return $this
     */
    public function setDeepConversionWorthAdvancedSpec($deepConversionWorthAdvancedSpec)
    {
        $this->container['deepConversionWorthAdvancedSpec'] = $deepConversionWorthAdvancedSpec;

        return $this;
    }

    /**
     * Gets deepConversionBehaviorAdvancedSpec
     *
     * @return \TencentAds\Model\DeepConversionBehaviorAdvancedSpec|mixed
     */
    public function getDeepConversionBehaviorAdvancedSpec()
    {
        return $this->container['deepConversionBehaviorAdvancedSpec'];
    }

    /**
     * Sets deepConversionBehaviorAdvancedSpec
     *
     * @param \TencentAds\Model\DeepConversionBehaviorAdvancedSpec|mixed $deepConversionBehaviorAdvancedSpec deepConversionBehaviorAdvancedSpec
     *
     * @return $this
     */
    public function setDeepConversionBehaviorAdvancedSpec($deepConversionBehaviorAdvancedSpec)
    {
        $this->container['deepConversionBehaviorAdvancedSpec'] = $deepConversionBehaviorAdvancedSpec;

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


