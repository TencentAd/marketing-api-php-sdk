<?php
/**
 * RecommendWordStructs
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
 * RecommendWordStructs Class Doc Comment
 *
 * @category Class
 * @description 推荐词信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecommendWordStructs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'recommend_word_structs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'word' => 'string',
        'monthQueryCount' => 'int',
        'clickCount' => 'int',
        'price' => 'double',
        'totalAccts' => 'int',
        'recommendReason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'word' => null,
        'monthQueryCount' => 'int64',
        'clickCount' => 'int64',
        'price' => 'double',
        'totalAccts' => 'int64',
        'recommendReason' => null
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
        'word' => 'word',
        'monthQueryCount' => 'month_query_count',
        'clickCount' => 'click_count',
        'price' => 'price',
        'totalAccts' => 'total_accts',
        'recommendReason' => 'recommend_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'word' => 'setWord',
        'monthQueryCount' => 'setMonthQueryCount',
        'clickCount' => 'setClickCount',
        'price' => 'setPrice',
        'totalAccts' => 'setTotalAccts',
        'recommendReason' => 'setRecommendReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'word' => 'getWord',
        'monthQueryCount' => 'getMonthQueryCount',
        'clickCount' => 'getClickCount',
        'price' => 'getPrice',
        'totalAccts' => 'getTotalAccts',
        'recommendReason' => 'getRecommendReason'
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
        $this->container['word'] = isset($data['word']) ? $data['word'] : null;
        $this->container['monthQueryCount'] = isset($data['monthQueryCount']) ? $data['monthQueryCount'] : null;
        $this->container['clickCount'] = isset($data['clickCount']) ? $data['clickCount'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['totalAccts'] = isset($data['totalAccts']) ? $data['totalAccts'] : null;
        $this->container['recommendReason'] = isset($data['recommendReason']) ? $data['recommendReason'] : null;
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
     * Gets word
     *
     * @return string|mixed
     */
    public function getWord()
    {
        return $this->container['word'];
    }

    /**
     * Sets word
     *
     * @param string|mixed $word word
     *
     * @return $this
     */
    public function setWord($word)
    {
        $this->container['word'] = $word;

        return $this;
    }

    /**
     * Gets monthQueryCount
     *
     * @return int|mixed
     */
    public function getMonthQueryCount()
    {
        return $this->container['monthQueryCount'];
    }

    /**
     * Sets monthQueryCount
     *
     * @param int|mixed $monthQueryCount monthQueryCount
     *
     * @return $this
     */
    public function setMonthQueryCount($monthQueryCount)
    {
        $this->container['monthQueryCount'] = $monthQueryCount;

        return $this;
    }

    /**
     * Gets clickCount
     *
     * @return int|mixed
     */
    public function getClickCount()
    {
        return $this->container['clickCount'];
    }

    /**
     * Sets clickCount
     *
     * @param int|mixed $clickCount clickCount
     *
     * @return $this
     */
    public function setClickCount($clickCount)
    {
        $this->container['clickCount'] = $clickCount;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double|mixed
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double|mixed $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets totalAccts
     *
     * @return int|mixed
     */
    public function getTotalAccts()
    {
        return $this->container['totalAccts'];
    }

    /**
     * Sets totalAccts
     *
     * @param int|mixed $totalAccts totalAccts
     *
     * @return $this
     */
    public function setTotalAccts($totalAccts)
    {
        $this->container['totalAccts'] = $totalAccts;

        return $this;
    }

    /**
     * Gets recommendReason
     *
     * @return string|mixed
     */
    public function getRecommendReason()
    {
        return $this->container['recommendReason'];
    }

    /**
     * Sets recommendReason
     *
     * @param string|mixed $recommendReason recommendReason
     *
     * @return $this
     */
    public function setRecommendReason($recommendReason)
    {
        $this->container['recommendReason'] = $recommendReason;

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


