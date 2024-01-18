<?php
/**
 * CreateLabel
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
 * CreateLabel Class Doc Comment
 *
 * @category Class
 * @description 标签信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateLabel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'create_label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'labelName' => 'string',
        'firstLabelLevelName' => 'string',
        'secondLabelLevelName' => 'string',
        'businessScenario' => '\TencentAds\Model\V3\BusinessScenario'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'labelName' => null,
        'firstLabelLevelName' => null,
        'secondLabelLevelName' => null,
        'businessScenario' => null
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
        'labelName' => 'label_name',
        'firstLabelLevelName' => 'first_label_level_name',
        'secondLabelLevelName' => 'second_label_level_name',
        'businessScenario' => 'business_scenario'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'labelName' => 'setLabelName',
        'firstLabelLevelName' => 'setFirstLabelLevelName',
        'secondLabelLevelName' => 'setSecondLabelLevelName',
        'businessScenario' => 'setBusinessScenario'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'labelName' => 'getLabelName',
        'firstLabelLevelName' => 'getFirstLabelLevelName',
        'secondLabelLevelName' => 'getSecondLabelLevelName',
        'businessScenario' => 'getBusinessScenario'
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
        $this->container['labelName'] = isset($data['labelName']) ? $data['labelName'] : null;
        $this->container['firstLabelLevelName'] = isset($data['firstLabelLevelName']) ? $data['firstLabelLevelName'] : null;
        $this->container['secondLabelLevelName'] = isset($data['secondLabelLevelName']) ? $data['secondLabelLevelName'] : null;
        $this->container['businessScenario'] = isset($data['businessScenario']) ? $data['businessScenario'] : null;
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
     * Gets labelName
     *
     * @return string|mixed
     */
    public function getLabelName()
    {
        return $this->container['labelName'];
    }

    /**
     * Sets labelName
     *
     * @param string|mixed $labelName labelName
     *
     * @return $this
     */
    public function setLabelName($labelName)
    {
        $this->container['labelName'] = $labelName;

        return $this;
    }

    /**
     * Gets firstLabelLevelName
     *
     * @return string|mixed
     */
    public function getFirstLabelLevelName()
    {
        return $this->container['firstLabelLevelName'];
    }

    /**
     * Sets firstLabelLevelName
     *
     * @param string|mixed $firstLabelLevelName firstLabelLevelName
     *
     * @return $this
     */
    public function setFirstLabelLevelName($firstLabelLevelName)
    {
        $this->container['firstLabelLevelName'] = $firstLabelLevelName;

        return $this;
    }

    /**
     * Gets secondLabelLevelName
     *
     * @return string|mixed
     */
    public function getSecondLabelLevelName()
    {
        return $this->container['secondLabelLevelName'];
    }

    /**
     * Sets secondLabelLevelName
     *
     * @param string|mixed $secondLabelLevelName secondLabelLevelName
     *
     * @return $this
     */
    public function setSecondLabelLevelName($secondLabelLevelName)
    {
        $this->container['secondLabelLevelName'] = $secondLabelLevelName;

        return $this;
    }

    /**
     * Gets businessScenario
     *
     * @return \TencentAds\Model\V3\BusinessScenario|mixed
     */
    public function getBusinessScenario()
    {
        return $this->container['businessScenario'];
    }

    /**
     * Sets businessScenario
     *
     * @param \TencentAds\Model\V3\BusinessScenario|mixed $businessScenario businessScenario
     *
     * @return $this
     */
    public function setBusinessScenario($businessScenario)
    {
        $this->container['businessScenario'] = $businessScenario;

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


