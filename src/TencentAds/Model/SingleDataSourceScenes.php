<?php
/**
 * SingleDataSourceScenes
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
 * SingleDataSourceScenes Class Doc Comment
 *
 * @category Class
 * @description 数据源分发详情
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SingleDataSourceScenes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'single_data_source_scenes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dataSourceId' => 'int',
        'scenes' => '\TencentAds\Model\SingleUpdateScenes[]',
        'switchType' => '\TencentAds\Model\FileDispatchSwitch'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dataSourceId' => 'int64',
        'scenes' => null,
        'switchType' => null
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
        'dataSourceId' => 'data_source_id',
        'scenes' => 'scenes',
        'switchType' => 'switch_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataSourceId' => 'setDataSourceId',
        'scenes' => 'setScenes',
        'switchType' => 'setSwitchType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataSourceId' => 'getDataSourceId',
        'scenes' => 'getScenes',
        'switchType' => 'getSwitchType'
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
        $this->container['dataSourceId'] = isset($data['dataSourceId']) ? $data['dataSourceId'] : null;
        $this->container['scenes'] = isset($data['scenes']) ? $data['scenes'] : null;
        $this->container['switchType'] = isset($data['switchType']) ? $data['switchType'] : null;
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
     * Gets dataSourceId
     *
     * @return int|mixed
     */
    public function getDataSourceId()
    {
        return $this->container['dataSourceId'];
    }

    /**
     * Sets dataSourceId
     *
     * @param int|mixed $dataSourceId dataSourceId
     *
     * @return $this
     */
    public function setDataSourceId($dataSourceId)
    {
        $this->container['dataSourceId'] = $dataSourceId;

        return $this;
    }

    /**
     * Gets scenes
     *
     * @return \TencentAds\Model\SingleUpdateScenes[]|mixed
     */
    public function getScenes()
    {
        return $this->container['scenes'];
    }

    /**
     * Sets scenes
     *
     * @param \TencentAds\Model\SingleUpdateScenes[]|mixed $scenes scenes
     *
     * @return $this
     */
    public function setScenes($scenes)
    {
        $this->container['scenes'] = $scenes;

        return $this;
    }

    /**
     * Gets switchType
     *
     * @return \TencentAds\Model\FileDispatchSwitch|mixed
     */
    public function getSwitchType()
    {
        return $this->container['switchType'];
    }

    /**
     * Sets switchType
     *
     * @param \TencentAds\Model\FileDispatchSwitch|mixed $switchType switchType
     *
     * @return $this
     */
    public function setSwitchType($switchType)
    {
        $this->container['switchType'] = $switchType;

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


