<?php
/**
 * HeadClickSpec
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
 * HeadClickSpec Class Doc Comment
 *
 * @category Class
 * @description 头像点击跳转信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HeadClickSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'head_click_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'brandAppId' => 'string',
        'searchBrandAreaKeyword' => 'string',
        'finderUsername' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'brandAppId' => null,
        'searchBrandAreaKeyword' => null,
        'finderUsername' => null
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
        'brandAppId' => 'brand_app_id',
        'searchBrandAreaKeyword' => 'search_brand_area_keyword',
        'finderUsername' => 'finder_username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brandAppId' => 'setBrandAppId',
        'searchBrandAreaKeyword' => 'setSearchBrandAreaKeyword',
        'finderUsername' => 'setFinderUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brandAppId' => 'getBrandAppId',
        'searchBrandAreaKeyword' => 'getSearchBrandAreaKeyword',
        'finderUsername' => 'getFinderUsername'
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
        $this->container['brandAppId'] = isset($data['brandAppId']) ? $data['brandAppId'] : null;
        $this->container['searchBrandAreaKeyword'] = isset($data['searchBrandAreaKeyword']) ? $data['searchBrandAreaKeyword'] : null;
        $this->container['finderUsername'] = isset($data['finderUsername']) ? $data['finderUsername'] : null;
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
     * Gets brandAppId
     *
     * @return string|mixed
     */
    public function getBrandAppId()
    {
        return $this->container['brandAppId'];
    }

    /**
     * Sets brandAppId
     *
     * @param string|mixed $brandAppId brandAppId
     *
     * @return $this
     */
    public function setBrandAppId($brandAppId)
    {
        $this->container['brandAppId'] = $brandAppId;

        return $this;
    }

    /**
     * Gets searchBrandAreaKeyword
     *
     * @return string|mixed
     */
    public function getSearchBrandAreaKeyword()
    {
        return $this->container['searchBrandAreaKeyword'];
    }

    /**
     * Sets searchBrandAreaKeyword
     *
     * @param string|mixed $searchBrandAreaKeyword searchBrandAreaKeyword
     *
     * @return $this
     */
    public function setSearchBrandAreaKeyword($searchBrandAreaKeyword)
    {
        $this->container['searchBrandAreaKeyword'] = $searchBrandAreaKeyword;

        return $this;
    }

    /**
     * Gets finderUsername
     *
     * @return string|mixed
     */
    public function getFinderUsername()
    {
        return $this->container['finderUsername'];
    }

    /**
     * Sets finderUsername
     *
     * @param string|mixed $finderUsername finderUsername
     *
     * @return $this
     */
    public function setFinderUsername($finderUsername)
    {
        $this->container['finderUsername'] = $finderUsername;

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


