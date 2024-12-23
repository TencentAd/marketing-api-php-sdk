<?php
/**
 * ProgrammedCommponentResultGetResponseData
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
 * ProgrammedCommponentResultGetResponseData Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgrammedCommponentResultGetResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgrammedCommponentResultGetResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'materialDeriveId' => 'int',
        'deriveDataVersion' => '\TencentAds\Model\V3\DeriveDataVersion',
        'dynamicCreativeId' => 'int',
        'adgroupId' => 'int',
        'list' => '\TencentAds\Model\V3\DeriveProductGetStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'materialDeriveId' => 'int64',
        'deriveDataVersion' => null,
        'dynamicCreativeId' => 'int64',
        'adgroupId' => 'int64',
        'list' => null
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
        'materialDeriveId' => 'material_derive_id',
        'deriveDataVersion' => 'derive_data_version',
        'dynamicCreativeId' => 'dynamic_creative_id',
        'adgroupId' => 'adgroup_id',
        'list' => 'list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'materialDeriveId' => 'setMaterialDeriveId',
        'deriveDataVersion' => 'setDeriveDataVersion',
        'dynamicCreativeId' => 'setDynamicCreativeId',
        'adgroupId' => 'setAdgroupId',
        'list' => 'setList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'materialDeriveId' => 'getMaterialDeriveId',
        'deriveDataVersion' => 'getDeriveDataVersion',
        'dynamicCreativeId' => 'getDynamicCreativeId',
        'adgroupId' => 'getAdgroupId',
        'list' => 'getList'
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
        $this->container['materialDeriveId'] = isset($data['materialDeriveId']) ? $data['materialDeriveId'] : null;
        $this->container['deriveDataVersion'] = isset($data['deriveDataVersion']) ? $data['deriveDataVersion'] : null;
        $this->container['dynamicCreativeId'] = isset($data['dynamicCreativeId']) ? $data['dynamicCreativeId'] : null;
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
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
     * Gets materialDeriveId
     *
     * @return int|mixed
     */
    public function getMaterialDeriveId()
    {
        return $this->container['materialDeriveId'];
    }

    /**
     * Sets materialDeriveId
     *
     * @param int|mixed $materialDeriveId materialDeriveId
     *
     * @return $this
     */
    public function setMaterialDeriveId($materialDeriveId)
    {
        $this->container['materialDeriveId'] = $materialDeriveId;

        return $this;
    }

    /**
     * Gets deriveDataVersion
     *
     * @return \TencentAds\Model\V3\DeriveDataVersion|mixed
     */
    public function getDeriveDataVersion()
    {
        return $this->container['deriveDataVersion'];
    }

    /**
     * Sets deriveDataVersion
     *
     * @param \TencentAds\Model\V3\DeriveDataVersion|mixed $deriveDataVersion deriveDataVersion
     *
     * @return $this
     */
    public function setDeriveDataVersion($deriveDataVersion)
    {
        $this->container['deriveDataVersion'] = $deriveDataVersion;

        return $this;
    }

    /**
     * Gets dynamicCreativeId
     *
     * @return int|mixed
     */
    public function getDynamicCreativeId()
    {
        return $this->container['dynamicCreativeId'];
    }

    /**
     * Sets dynamicCreativeId
     *
     * @param int|mixed $dynamicCreativeId dynamicCreativeId
     *
     * @return $this
     */
    public function setDynamicCreativeId($dynamicCreativeId)
    {
        $this->container['dynamicCreativeId'] = $dynamicCreativeId;

        return $this;
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
     * Gets list
     *
     * @return \TencentAds\Model\V3\DeriveProductGetStruct[]|mixed
     */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
     * Sets list
     *
     * @param \TencentAds\Model\V3\DeriveProductGetStruct[]|mixed $list list
     *
     * @return $this
     */
    public function setList($list)
    {
        $this->container['list'] = $list;

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


