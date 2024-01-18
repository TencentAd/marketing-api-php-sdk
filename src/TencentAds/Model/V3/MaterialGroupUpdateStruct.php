<?php
/**
 * MaterialGroupUpdateStruct
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
 * MaterialGroupUpdateStruct Class Doc Comment
 *
 * @category Class
 * @description 素材组信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MaterialGroupUpdateStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'material_group_update_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'materialGroupId' => 'int',
        'materials' => '\TencentAds\Model\V3\MaterialUpdateStruct[]',
        'previews' => '\TencentAds\Model\V3\PreviewUpdateStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'materialGroupId' => 'int64',
        'materials' => null,
        'previews' => null
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
        'materialGroupId' => 'material_group_id',
        'materials' => 'materials',
        'previews' => 'previews'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'materialGroupId' => 'setMaterialGroupId',
        'materials' => 'setMaterials',
        'previews' => 'setPreviews'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'materialGroupId' => 'getMaterialGroupId',
        'materials' => 'getMaterials',
        'previews' => 'getPreviews'
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
        $this->container['materialGroupId'] = isset($data['materialGroupId']) ? $data['materialGroupId'] : null;
        $this->container['materials'] = isset($data['materials']) ? $data['materials'] : null;
        $this->container['previews'] = isset($data['previews']) ? $data['previews'] : null;
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
     * Gets materialGroupId
     *
     * @return int|mixed
     */
    public function getMaterialGroupId()
    {
        return $this->container['materialGroupId'];
    }

    /**
     * Sets materialGroupId
     *
     * @param int|mixed $materialGroupId materialGroupId
     *
     * @return $this
     */
    public function setMaterialGroupId($materialGroupId)
    {
        $this->container['materialGroupId'] = $materialGroupId;

        return $this;
    }

    /**
     * Gets materials
     *
     * @return \TencentAds\Model\V3\MaterialUpdateStruct[]|mixed
     */
    public function getMaterials()
    {
        return $this->container['materials'];
    }

    /**
     * Sets materials
     *
     * @param \TencentAds\Model\V3\MaterialUpdateStruct[]|mixed $materials materials
     *
     * @return $this
     */
    public function setMaterials($materials)
    {
        $this->container['materials'] = $materials;

        return $this;
    }

    /**
     * Gets previews
     *
     * @return \TencentAds\Model\V3\PreviewUpdateStruct[]|mixed
     */
    public function getPreviews()
    {
        return $this->container['previews'];
    }

    /**
     * Sets previews
     *
     * @param \TencentAds\Model\V3\PreviewUpdateStruct[]|mixed $previews previews
     *
     * @return $this
     */
    public function setPreviews($previews)
    {
        $this->container['previews'] = $previews;

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


