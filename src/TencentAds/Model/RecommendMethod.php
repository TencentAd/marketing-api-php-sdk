<?php
/**
 * RecommendMethod
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
 * RecommendMethod Class Doc Comment
 *
 * @category Class
 * @description 推荐方式
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecommendMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'recommend_method';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'methodId' => 'int',
        'methodName' => 'string',
        'methodDescription' => 'string',
        'subMethodOperators' => 'string[]',
        'subMethods' => '\TencentAds\Model\SubMethod[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'methodId' => 'int64',
        'methodName' => null,
        'methodDescription' => null,
        'subMethodOperators' => null,
        'subMethods' => null
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
        'methodId' => 'method_id',
        'methodName' => 'method_name',
        'methodDescription' => 'method_description',
        'subMethodOperators' => 'sub_method_operators',
        'subMethods' => 'sub_methods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'methodId' => 'setMethodId',
        'methodName' => 'setMethodName',
        'methodDescription' => 'setMethodDescription',
        'subMethodOperators' => 'setSubMethodOperators',
        'subMethods' => 'setSubMethods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'methodId' => 'getMethodId',
        'methodName' => 'getMethodName',
        'methodDescription' => 'getMethodDescription',
        'subMethodOperators' => 'getSubMethodOperators',
        'subMethods' => 'getSubMethods'
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
        $this->container['methodId'] = isset($data['methodId']) ? $data['methodId'] : null;
        $this->container['methodName'] = isset($data['methodName']) ? $data['methodName'] : null;
        $this->container['methodDescription'] = isset($data['methodDescription']) ? $data['methodDescription'] : null;
        $this->container['subMethodOperators'] = isset($data['subMethodOperators']) ? $data['subMethodOperators'] : null;
        $this->container['subMethods'] = isset($data['subMethods']) ? $data['subMethods'] : null;
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
     * Gets methodId
     *
     * @return int|mixed
     */
    public function getMethodId()
    {
        return $this->container['methodId'];
    }

    /**
     * Sets methodId
     *
     * @param int|mixed $methodId methodId
     *
     * @return $this
     */
    public function setMethodId($methodId)
    {
        $this->container['methodId'] = $methodId;

        return $this;
    }

    /**
     * Gets methodName
     *
     * @return string|mixed
     */
    public function getMethodName()
    {
        return $this->container['methodName'];
    }

    /**
     * Sets methodName
     *
     * @param string|mixed $methodName methodName
     *
     * @return $this
     */
    public function setMethodName($methodName)
    {
        $this->container['methodName'] = $methodName;

        return $this;
    }

    /**
     * Gets methodDescription
     *
     * @return string|mixed
     */
    public function getMethodDescription()
    {
        return $this->container['methodDescription'];
    }

    /**
     * Sets methodDescription
     *
     * @param string|mixed $methodDescription methodDescription
     *
     * @return $this
     */
    public function setMethodDescription($methodDescription)
    {
        $this->container['methodDescription'] = $methodDescription;

        return $this;
    }

    /**
     * Gets subMethodOperators
     *
     * @return string[]|mixed
     */
    public function getSubMethodOperators()
    {
        return $this->container['subMethodOperators'];
    }

    /**
     * Sets subMethodOperators
     *
     * @param string[]|mixed $subMethodOperators subMethodOperators
     *
     * @return $this
     */
    public function setSubMethodOperators($subMethodOperators)
    {
        $this->container['subMethodOperators'] = $subMethodOperators;

        return $this;
    }

    /**
     * Gets subMethods
     *
     * @return \TencentAds\Model\SubMethod[]|mixed
     */
    public function getSubMethods()
    {
        return $this->container['subMethods'];
    }

    /**
     * Sets subMethods
     *
     * @param \TencentAds\Model\SubMethod[]|mixed $subMethods subMethods
     *
     * @return $this
     */
    public function setSubMethods($subMethods)
    {
        $this->container['subMethods'] = $subMethods;

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


