<?php
/**
 * SingleUpdateFailedScenes
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
 * SingleUpdateFailedScenes Class Doc Comment
 *
 * @category Class
 * @description 应用场景信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SingleUpdateFailedScenes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'single_update_failed_scenes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'scene' => '\TencentAds\Model\DataNexusScene',
        'assetIds' => '\TencentAds\Model\SingleUpdateFailedAssetArray[]',
        'failReason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'scene' => null,
        'assetIds' => null,
        'failReason' => null
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
        'scene' => 'scene',
        'assetIds' => 'asset_ids',
        'failReason' => 'fail_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scene' => 'setScene',
        'assetIds' => 'setAssetIds',
        'failReason' => 'setFailReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scene' => 'getScene',
        'assetIds' => 'getAssetIds',
        'failReason' => 'getFailReason'
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
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['assetIds'] = isset($data['assetIds']) ? $data['assetIds'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
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
     * Gets scene
     *
     * @return \TencentAds\Model\DataNexusScene|mixed
     */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
     * Sets scene
     *
     * @param \TencentAds\Model\DataNexusScene|mixed $scene scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;

        return $this;
    }

    /**
     * Gets assetIds
     *
     * @return \TencentAds\Model\SingleUpdateFailedAssetArray[]|mixed
     */
    public function getAssetIds()
    {
        return $this->container['assetIds'];
    }

    /**
     * Sets assetIds
     *
     * @param \TencentAds\Model\SingleUpdateFailedAssetArray[]|mixed $assetIds assetIds
     *
     * @return $this
     */
    public function setAssetIds($assetIds)
    {
        $this->container['assetIds'] = $assetIds;

        return $this;
    }

    /**
     * Gets failReason
     *
     * @return string|mixed
     */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
     * Sets failReason
     *
     * @param string|mixed $failReason failReason
     *
     * @return $this
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

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


