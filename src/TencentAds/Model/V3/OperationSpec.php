<?php
/**
 * OperationSpec
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
 * OperationSpec Class Doc Comment
 *
 * @category Class
 * @description 处理操作信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OperationSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'operation_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cropCustomizedSpec' => '\TencentAds\Model\V3\CropCustomizedSpec',
        'cropSmartSpec' => '\TencentAds\Model\V3\CropSmartSpec',
        'resizeSpec' => '\TencentAds\Model\V3\ResizeSpec',
        'cropCustomizedSpecAndResize' => '\TencentAds\Model\V3\CropCustomizedSpecAndResize'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cropCustomizedSpec' => null,
        'cropSmartSpec' => null,
        'resizeSpec' => null,
        'cropCustomizedSpecAndResize' => null
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
        'cropCustomizedSpec' => 'crop_customized_spec',
        'cropSmartSpec' => 'crop_smart_spec',
        'resizeSpec' => 'resize_spec',
        'cropCustomizedSpecAndResize' => 'crop_customized_spec_and_resize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cropCustomizedSpec' => 'setCropCustomizedSpec',
        'cropSmartSpec' => 'setCropSmartSpec',
        'resizeSpec' => 'setResizeSpec',
        'cropCustomizedSpecAndResize' => 'setCropCustomizedSpecAndResize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cropCustomizedSpec' => 'getCropCustomizedSpec',
        'cropSmartSpec' => 'getCropSmartSpec',
        'resizeSpec' => 'getResizeSpec',
        'cropCustomizedSpecAndResize' => 'getCropCustomizedSpecAndResize'
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
        $this->container['cropCustomizedSpec'] = isset($data['cropCustomizedSpec']) ? $data['cropCustomizedSpec'] : null;
        $this->container['cropSmartSpec'] = isset($data['cropSmartSpec']) ? $data['cropSmartSpec'] : null;
        $this->container['resizeSpec'] = isset($data['resizeSpec']) ? $data['resizeSpec'] : null;
        $this->container['cropCustomizedSpecAndResize'] = isset($data['cropCustomizedSpecAndResize']) ? $data['cropCustomizedSpecAndResize'] : null;
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
     * Gets cropCustomizedSpec
     *
     * @return \TencentAds\Model\V3\CropCustomizedSpec|mixed
     */
    public function getCropCustomizedSpec()
    {
        return $this->container['cropCustomizedSpec'];
    }

    /**
     * Sets cropCustomizedSpec
     *
     * @param \TencentAds\Model\V3\CropCustomizedSpec|mixed $cropCustomizedSpec cropCustomizedSpec
     *
     * @return $this
     */
    public function setCropCustomizedSpec($cropCustomizedSpec)
    {
        $this->container['cropCustomizedSpec'] = $cropCustomizedSpec;

        return $this;
    }

    /**
     * Gets cropSmartSpec
     *
     * @return \TencentAds\Model\V3\CropSmartSpec|mixed
     */
    public function getCropSmartSpec()
    {
        return $this->container['cropSmartSpec'];
    }

    /**
     * Sets cropSmartSpec
     *
     * @param \TencentAds\Model\V3\CropSmartSpec|mixed $cropSmartSpec cropSmartSpec
     *
     * @return $this
     */
    public function setCropSmartSpec($cropSmartSpec)
    {
        $this->container['cropSmartSpec'] = $cropSmartSpec;

        return $this;
    }

    /**
     * Gets resizeSpec
     *
     * @return \TencentAds\Model\V3\ResizeSpec|mixed
     */
    public function getResizeSpec()
    {
        return $this->container['resizeSpec'];
    }

    /**
     * Sets resizeSpec
     *
     * @param \TencentAds\Model\V3\ResizeSpec|mixed $resizeSpec resizeSpec
     *
     * @return $this
     */
    public function setResizeSpec($resizeSpec)
    {
        $this->container['resizeSpec'] = $resizeSpec;

        return $this;
    }

    /**
     * Gets cropCustomizedSpecAndResize
     *
     * @return \TencentAds\Model\V3\CropCustomizedSpecAndResize|mixed
     */
    public function getCropCustomizedSpecAndResize()
    {
        return $this->container['cropCustomizedSpecAndResize'];
    }

    /**
     * Sets cropCustomizedSpecAndResize
     *
     * @param \TencentAds\Model\V3\CropCustomizedSpecAndResize|mixed $cropCustomizedSpecAndResize cropCustomizedSpecAndResize
     *
     * @return $this
     */
    public function setCropCustomizedSpecAndResize($cropCustomizedSpecAndResize)
    {
        $this->container['cropCustomizedSpecAndResize'] = $cropCustomizedSpecAndResize;

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


