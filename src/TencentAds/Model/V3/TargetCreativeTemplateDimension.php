<?php
/**
 * TargetCreativeTemplateDimension
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
 * TargetCreativeTemplateDimension Class Doc Comment
 *
 * @category Class
 * @description 目标创意形式信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TargetCreativeTemplateDimension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'target_creative_template_dimension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ratioWidth' => 'int',
        'minWidth' => 'int',
        'minHeight' => 'int',
        'creativeTemplateIds' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ratioWidth' => 'int64',
        'minWidth' => 'int64',
        'minHeight' => 'int64',
        'creativeTemplateIds' => 'int64'
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
        'ratioWidth' => 'ratio_width',
        'minWidth' => 'min_width',
        'minHeight' => 'min_height',
        'creativeTemplateIds' => 'creative_template_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ratioWidth' => 'setRatioWidth',
        'minWidth' => 'setMinWidth',
        'minHeight' => 'setMinHeight',
        'creativeTemplateIds' => 'setCreativeTemplateIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ratioWidth' => 'getRatioWidth',
        'minWidth' => 'getMinWidth',
        'minHeight' => 'getMinHeight',
        'creativeTemplateIds' => 'getCreativeTemplateIds'
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
        $this->container['ratioWidth'] = isset($data['ratioWidth']) ? $data['ratioWidth'] : null;
        $this->container['minWidth'] = isset($data['minWidth']) ? $data['minWidth'] : null;
        $this->container['minHeight'] = isset($data['minHeight']) ? $data['minHeight'] : null;
        $this->container['creativeTemplateIds'] = isset($data['creativeTemplateIds']) ? $data['creativeTemplateIds'] : null;
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
     * Gets ratioWidth
     *
     * @return int|mixed
     */
    public function getRatioWidth()
    {
        return $this->container['ratioWidth'];
    }

    /**
     * Sets ratioWidth
     *
     * @param int|mixed $ratioWidth ratioWidth
     *
     * @return $this
     */
    public function setRatioWidth($ratioWidth)
    {
        $this->container['ratioWidth'] = $ratioWidth;

        return $this;
    }

    /**
     * Gets minWidth
     *
     * @return int|mixed
     */
    public function getMinWidth()
    {
        return $this->container['minWidth'];
    }

    /**
     * Sets minWidth
     *
     * @param int|mixed $minWidth minWidth
     *
     * @return $this
     */
    public function setMinWidth($minWidth)
    {
        $this->container['minWidth'] = $minWidth;

        return $this;
    }

    /**
     * Gets minHeight
     *
     * @return int|mixed
     */
    public function getMinHeight()
    {
        return $this->container['minHeight'];
    }

    /**
     * Sets minHeight
     *
     * @param int|mixed $minHeight minHeight
     *
     * @return $this
     */
    public function setMinHeight($minHeight)
    {
        $this->container['minHeight'] = $minHeight;

        return $this;
    }

    /**
     * Gets creativeTemplateIds
     *
     * @return int[]|mixed
     */
    public function getCreativeTemplateIds()
    {
        return $this->container['creativeTemplateIds'];
    }

    /**
     * Sets creativeTemplateIds
     *
     * @param int[]|mixed $creativeTemplateIds creativeTemplateIds
     *
     * @return $this
     */
    public function setCreativeTemplateIds($creativeTemplateIds)
    {
        $this->container['creativeTemplateIds'] = $creativeTemplateIds;

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


