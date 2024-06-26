<?php
/**
 * PropertyStruct
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
 * PropertyStruct Class Doc Comment
 *
 * @category Class
 * @description 推广资产属性信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'property_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'propertyName' => '\TencentAds\Model\V3\PromotedAssetAttrKey',
        'propertyValue' => 'string[]',
        'propertyClass' => '\TencentAds\Model\V3\MarketingAssetAttrClass',
        'propertyCn' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'propertyName' => null,
        'propertyValue' => null,
        'propertyClass' => null,
        'propertyCn' => null
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
        'propertyName' => 'property_name',
        'propertyValue' => 'property_value',
        'propertyClass' => 'property_class',
        'propertyCn' => 'property_cn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'propertyName' => 'setPropertyName',
        'propertyValue' => 'setPropertyValue',
        'propertyClass' => 'setPropertyClass',
        'propertyCn' => 'setPropertyCn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'propertyName' => 'getPropertyName',
        'propertyValue' => 'getPropertyValue',
        'propertyClass' => 'getPropertyClass',
        'propertyCn' => 'getPropertyCn'
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
        $this->container['propertyName'] = isset($data['propertyName']) ? $data['propertyName'] : null;
        $this->container['propertyValue'] = isset($data['propertyValue']) ? $data['propertyValue'] : null;
        $this->container['propertyClass'] = isset($data['propertyClass']) ? $data['propertyClass'] : null;
        $this->container['propertyCn'] = isset($data['propertyCn']) ? $data['propertyCn'] : null;
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
     * Gets propertyName
     *
     * @return \TencentAds\Model\V3\PromotedAssetAttrKey|mixed
     */
    public function getPropertyName()
    {
        return $this->container['propertyName'];
    }

    /**
     * Sets propertyName
     *
     * @param \TencentAds\Model\V3\PromotedAssetAttrKey|mixed $propertyName propertyName
     *
     * @return $this
     */
    public function setPropertyName($propertyName)
    {
        $this->container['propertyName'] = $propertyName;

        return $this;
    }

    /**
     * Gets propertyValue
     *
     * @return string[]|mixed
     */
    public function getPropertyValue()
    {
        return $this->container['propertyValue'];
    }

    /**
     * Sets propertyValue
     *
     * @param string[]|mixed $propertyValue propertyValue
     *
     * @return $this
     */
    public function setPropertyValue($propertyValue)
    {
        $this->container['propertyValue'] = $propertyValue;

        return $this;
    }

    /**
     * Gets propertyClass
     *
     * @return \TencentAds\Model\V3\MarketingAssetAttrClass|mixed
     */
    public function getPropertyClass()
    {
        return $this->container['propertyClass'];
    }

    /**
     * Sets propertyClass
     *
     * @param \TencentAds\Model\V3\MarketingAssetAttrClass|mixed $propertyClass propertyClass
     *
     * @return $this
     */
    public function setPropertyClass($propertyClass)
    {
        $this->container['propertyClass'] = $propertyClass;

        return $this;
    }

    /**
     * Gets propertyCn
     *
     * @return string|mixed
     */
    public function getPropertyCn()
    {
        return $this->container['propertyCn'];
    }

    /**
     * Sets propertyCn
     *
     * @param string|mixed $propertyCn propertyCn
     *
     * @return $this
     */
    public function setPropertyCn($propertyCn)
    {
        $this->container['propertyCn'] = $propertyCn;

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


