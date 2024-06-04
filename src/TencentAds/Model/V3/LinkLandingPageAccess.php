<?php
/**
 * LinkLandingPageAccess
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
 * LinkLandingPageAccess Class Doc Comment
 *
 * @category Class
 * @description 落地页准入控制
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkLandingPageAccess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'link_landing_page_access';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'supportPageTypes' => 'string[]',
        'mustNotPageTypes' => 'string[]',
        'mustPageTypes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'supportPageTypes' => null,
        'mustNotPageTypes' => null,
        'mustPageTypes' => null
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
        'supportPageTypes' => 'support_page_types',
        'mustNotPageTypes' => 'must_not_page_types',
        'mustPageTypes' => 'must_page_types'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'supportPageTypes' => 'setSupportPageTypes',
        'mustNotPageTypes' => 'setMustNotPageTypes',
        'mustPageTypes' => 'setMustPageTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'supportPageTypes' => 'getSupportPageTypes',
        'mustNotPageTypes' => 'getMustNotPageTypes',
        'mustPageTypes' => 'getMustPageTypes'
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
        $this->container['supportPageTypes'] = isset($data['supportPageTypes']) ? $data['supportPageTypes'] : null;
        $this->container['mustNotPageTypes'] = isset($data['mustNotPageTypes']) ? $data['mustNotPageTypes'] : null;
        $this->container['mustPageTypes'] = isset($data['mustPageTypes']) ? $data['mustPageTypes'] : null;
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
     * Gets supportPageTypes
     *
     * @return string[]|mixed
     */
    public function getSupportPageTypes()
    {
        return $this->container['supportPageTypes'];
    }

    /**
     * Sets supportPageTypes
     *
     * @param string[]|mixed $supportPageTypes supportPageTypes
     *
     * @return $this
     */
    public function setSupportPageTypes($supportPageTypes)
    {
        $this->container['supportPageTypes'] = $supportPageTypes;

        return $this;
    }

    /**
     * Gets mustNotPageTypes
     *
     * @return string[]|mixed
     */
    public function getMustNotPageTypes()
    {
        return $this->container['mustNotPageTypes'];
    }

    /**
     * Sets mustNotPageTypes
     *
     * @param string[]|mixed $mustNotPageTypes mustNotPageTypes
     *
     * @return $this
     */
    public function setMustNotPageTypes($mustNotPageTypes)
    {
        $this->container['mustNotPageTypes'] = $mustNotPageTypes;

        return $this;
    }

    /**
     * Gets mustPageTypes
     *
     * @return string[]|mixed
     */
    public function getMustPageTypes()
    {
        return $this->container['mustPageTypes'];
    }

    /**
     * Sets mustPageTypes
     *
     * @param string[]|mixed $mustPageTypes mustPageTypes
     *
     * @return $this
     */
    public function setMustPageTypes($mustPageTypes)
    {
        $this->container['mustPageTypes'] = $mustPageTypes;

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


