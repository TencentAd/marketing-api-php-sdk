<?php
/**
 * DeriveDataStruct
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
 * DeriveDataStruct Class Doc Comment
 *
 * @category Class
 * @description 衍生信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeriveDataStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'derive_data_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deriveTemplateId' => 'int',
        'deriveAdcreativeTemplateIdList' => 'int[]',
        'creativeElementsUsage' => '\TencentAds\Model\V3\CreativeElementsUsage',
        'materialDerivePreviewId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deriveTemplateId' => 'int64',
        'deriveAdcreativeTemplateIdList' => 'int64',
        'creativeElementsUsage' => null,
        'materialDerivePreviewId' => 'int64'
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
        'deriveTemplateId' => 'derive_template_id',
        'deriveAdcreativeTemplateIdList' => 'derive_adcreative_template_id_list',
        'creativeElementsUsage' => 'creative_elements_usage',
        'materialDerivePreviewId' => 'material_derive_preview_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deriveTemplateId' => 'setDeriveTemplateId',
        'deriveAdcreativeTemplateIdList' => 'setDeriveAdcreativeTemplateIdList',
        'creativeElementsUsage' => 'setCreativeElementsUsage',
        'materialDerivePreviewId' => 'setMaterialDerivePreviewId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deriveTemplateId' => 'getDeriveTemplateId',
        'deriveAdcreativeTemplateIdList' => 'getDeriveAdcreativeTemplateIdList',
        'creativeElementsUsage' => 'getCreativeElementsUsage',
        'materialDerivePreviewId' => 'getMaterialDerivePreviewId'
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
        $this->container['deriveTemplateId'] = isset($data['deriveTemplateId']) ? $data['deriveTemplateId'] : null;
        $this->container['deriveAdcreativeTemplateIdList'] = isset($data['deriveAdcreativeTemplateIdList']) ? $data['deriveAdcreativeTemplateIdList'] : null;
        $this->container['creativeElementsUsage'] = isset($data['creativeElementsUsage']) ? $data['creativeElementsUsage'] : null;
        $this->container['materialDerivePreviewId'] = isset($data['materialDerivePreviewId']) ? $data['materialDerivePreviewId'] : null;
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
     * Gets deriveTemplateId
     *
     * @return int|mixed
     */
    public function getDeriveTemplateId()
    {
        return $this->container['deriveTemplateId'];
    }

    /**
     * Sets deriveTemplateId
     *
     * @param int|mixed $deriveTemplateId deriveTemplateId
     *
     * @return $this
     */
    public function setDeriveTemplateId($deriveTemplateId)
    {
        $this->container['deriveTemplateId'] = $deriveTemplateId;

        return $this;
    }

    /**
     * Gets deriveAdcreativeTemplateIdList
     *
     * @return int[]|mixed
     */
    public function getDeriveAdcreativeTemplateIdList()
    {
        return $this->container['deriveAdcreativeTemplateIdList'];
    }

    /**
     * Sets deriveAdcreativeTemplateIdList
     *
     * @param int[]|mixed $deriveAdcreativeTemplateIdList deriveAdcreativeTemplateIdList
     *
     * @return $this
     */
    public function setDeriveAdcreativeTemplateIdList($deriveAdcreativeTemplateIdList)
    {
        $this->container['deriveAdcreativeTemplateIdList'] = $deriveAdcreativeTemplateIdList;

        return $this;
    }

    /**
     * Gets creativeElementsUsage
     *
     * @return \TencentAds\Model\V3\CreativeElementsUsage|mixed
     */
    public function getCreativeElementsUsage()
    {
        return $this->container['creativeElementsUsage'];
    }

    /**
     * Sets creativeElementsUsage
     *
     * @param \TencentAds\Model\V3\CreativeElementsUsage|mixed $creativeElementsUsage creativeElementsUsage
     *
     * @return $this
     */
    public function setCreativeElementsUsage($creativeElementsUsage)
    {
        $this->container['creativeElementsUsage'] = $creativeElementsUsage;

        return $this;
    }

    /**
     * Gets materialDerivePreviewId
     *
     * @return int|mixed
     */
    public function getMaterialDerivePreviewId()
    {
        return $this->container['materialDerivePreviewId'];
    }

    /**
     * Sets materialDerivePreviewId
     *
     * @param int|mixed $materialDerivePreviewId materialDerivePreviewId
     *
     * @return $this
     */
    public function setMaterialDerivePreviewId($materialDerivePreviewId)
    {
        $this->container['materialDerivePreviewId'] = $materialDerivePreviewId;

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

