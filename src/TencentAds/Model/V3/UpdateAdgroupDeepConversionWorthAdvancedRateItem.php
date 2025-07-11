<?php
/**
 * UpdateAdgroupDeepConversionWorthAdvancedRateItem
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
 * UpdateAdgroupDeepConversionWorthAdvancedRateItem Class Doc Comment
 *
 * @category Class
 * @description 修改广告深度优化价值的强化 ROI
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateAdgroupDeepConversionWorthAdvancedRateItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'update_adgroup_deep_conversion_worth_advanced_rate_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adgroupId' => 'int',
        'deepConversionWorthAdvancedRate' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adgroupId' => 'int64',
        'deepConversionWorthAdvancedRate' => 'double'
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
        'adgroupId' => 'adgroup_id',
        'deepConversionWorthAdvancedRate' => 'deep_conversion_worth_advanced_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adgroupId' => 'setAdgroupId',
        'deepConversionWorthAdvancedRate' => 'setDeepConversionWorthAdvancedRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adgroupId' => 'getAdgroupId',
        'deepConversionWorthAdvancedRate' => 'getDeepConversionWorthAdvancedRate'
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
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['deepConversionWorthAdvancedRate'] = isset($data['deepConversionWorthAdvancedRate']) ? $data['deepConversionWorthAdvancedRate'] : null;
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
     * Gets adgroupId
     *
     * @return int|mixed
     */
    public function getAdgroupId()
    {
        return $this->container['adgroupId'];
    }

    /**
     * Sets adgroupId
     *
     * @param int|mixed $adgroupId adgroupId
     *
     * @return $this
     */
    public function setAdgroupId($adgroupId)
    {
        $this->container['adgroupId'] = $adgroupId;

        return $this;
    }

    /**
     * Gets deepConversionWorthAdvancedRate
     *
     * @return double|mixed
     */
    public function getDeepConversionWorthAdvancedRate()
    {
        return $this->container['deepConversionWorthAdvancedRate'];
    }

    /**
     * Sets deepConversionWorthAdvancedRate
     *
     * @param double|mixed $deepConversionWorthAdvancedRate deepConversionWorthAdvancedRate
     *
     * @return $this
     */
    public function setDeepConversionWorthAdvancedRate($deepConversionWorthAdvancedRate)
    {
        $this->container['deepConversionWorthAdvancedRate'] = $deepConversionWorthAdvancedRate;

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


