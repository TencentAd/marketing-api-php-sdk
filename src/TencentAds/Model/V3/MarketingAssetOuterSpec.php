<?php
/**
 * MarketingAssetOuterSpec
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
 * MarketingAssetOuterSpec Class Doc Comment
 *
 * @category Class
 * @description 产品外部ID数据
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketingAssetOuterSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'marketing_asset_outer_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketingTargetType' => '\TencentAds\Model\V3\MarketingTargetType',
        'marketingAssetOuterId' => 'string',
        'marketingAssetOuterSubId' => 'string',
        'marketingAssetOuterName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketingTargetType' => null,
        'marketingAssetOuterId' => null,
        'marketingAssetOuterSubId' => null,
        'marketingAssetOuterName' => null
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
        'marketingTargetType' => 'marketing_target_type',
        'marketingAssetOuterId' => 'marketing_asset_outer_id',
        'marketingAssetOuterSubId' => 'marketing_asset_outer_sub_id',
        'marketingAssetOuterName' => 'marketing_asset_outer_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketingTargetType' => 'setMarketingTargetType',
        'marketingAssetOuterId' => 'setMarketingAssetOuterId',
        'marketingAssetOuterSubId' => 'setMarketingAssetOuterSubId',
        'marketingAssetOuterName' => 'setMarketingAssetOuterName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketingTargetType' => 'getMarketingTargetType',
        'marketingAssetOuterId' => 'getMarketingAssetOuterId',
        'marketingAssetOuterSubId' => 'getMarketingAssetOuterSubId',
        'marketingAssetOuterName' => 'getMarketingAssetOuterName'
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
        $this->container['marketingTargetType'] = isset($data['marketingTargetType']) ? $data['marketingTargetType'] : null;
        $this->container['marketingAssetOuterId'] = isset($data['marketingAssetOuterId']) ? $data['marketingAssetOuterId'] : null;
        $this->container['marketingAssetOuterSubId'] = isset($data['marketingAssetOuterSubId']) ? $data['marketingAssetOuterSubId'] : null;
        $this->container['marketingAssetOuterName'] = isset($data['marketingAssetOuterName']) ? $data['marketingAssetOuterName'] : null;
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
     * Gets marketingTargetType
     *
     * @return \TencentAds\Model\V3\MarketingTargetType|mixed
     */
    public function getMarketingTargetType()
    {
        return $this->container['marketingTargetType'];
    }

    /**
     * Sets marketingTargetType
     *
     * @param \TencentAds\Model\V3\MarketingTargetType|mixed $marketingTargetType marketingTargetType
     *
     * @return $this
     */
    public function setMarketingTargetType($marketingTargetType)
    {
        $this->container['marketingTargetType'] = $marketingTargetType;

        return $this;
    }

    /**
     * Gets marketingAssetOuterId
     *
     * @return string|mixed
     */
    public function getMarketingAssetOuterId()
    {
        return $this->container['marketingAssetOuterId'];
    }

    /**
     * Sets marketingAssetOuterId
     *
     * @param string|mixed $marketingAssetOuterId marketingAssetOuterId
     *
     * @return $this
     */
    public function setMarketingAssetOuterId($marketingAssetOuterId)
    {
        $this->container['marketingAssetOuterId'] = $marketingAssetOuterId;

        return $this;
    }

    /**
     * Gets marketingAssetOuterSubId
     *
     * @return string|mixed
     */
    public function getMarketingAssetOuterSubId()
    {
        return $this->container['marketingAssetOuterSubId'];
    }

    /**
     * Sets marketingAssetOuterSubId
     *
     * @param string|mixed $marketingAssetOuterSubId marketingAssetOuterSubId
     *
     * @return $this
     */
    public function setMarketingAssetOuterSubId($marketingAssetOuterSubId)
    {
        $this->container['marketingAssetOuterSubId'] = $marketingAssetOuterSubId;

        return $this;
    }

    /**
     * Gets marketingAssetOuterName
     *
     * @return string|mixed
     */
    public function getMarketingAssetOuterName()
    {
        return $this->container['marketingAssetOuterName'];
    }

    /**
     * Sets marketingAssetOuterName
     *
     * @param string|mixed $marketingAssetOuterName marketingAssetOuterName
     *
     * @return $this
     */
    public function setMarketingAssetOuterName($marketingAssetOuterName)
    {
        $this->container['marketingAssetOuterName'] = $marketingAssetOuterName;

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


