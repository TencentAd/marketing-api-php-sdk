<?php
/**
 * TemplateInfoStruct
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
 * TemplateInfoStruct Class Doc Comment
 *
 * @category Class
 * @description 排序
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TemplateInfoStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'template_info_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'type' => 'int',
        'name' => 'string',
        'imageUrl' => 'string',
        'videoUrl' => 'string',
        'width' => 'int',
        'height' => 'int',
        'duration' => 'double',
        'useCnt' => 'int',
        'cost' => 'int',
        'clickRate' => 'double',
        'conversionRate' => 'double',
        'conversionCost' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'type' => 'int64',
        'name' => null,
        'imageUrl' => null,
        'videoUrl' => null,
        'width' => 'int64',
        'height' => 'int64',
        'duration' => 'double',
        'useCnt' => 'int64',
        'cost' => 'int64',
        'clickRate' => 'double',
        'conversionRate' => 'double',
        'conversionCost' => 'double'
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
        'id' => 'id',
        'type' => 'type',
        'name' => 'name',
        'imageUrl' => 'image_url',
        'videoUrl' => 'video_url',
        'width' => 'width',
        'height' => 'height',
        'duration' => 'duration',
        'useCnt' => 'use_cnt',
        'cost' => 'cost',
        'clickRate' => 'click_rate',
        'conversionRate' => 'conversion_rate',
        'conversionCost' => 'conversion_cost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'name' => 'setName',
        'imageUrl' => 'setImageUrl',
        'videoUrl' => 'setVideoUrl',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'duration' => 'setDuration',
        'useCnt' => 'setUseCnt',
        'cost' => 'setCost',
        'clickRate' => 'setClickRate',
        'conversionRate' => 'setConversionRate',
        'conversionCost' => 'setConversionCost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'name' => 'getName',
        'imageUrl' => 'getImageUrl',
        'videoUrl' => 'getVideoUrl',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'duration' => 'getDuration',
        'useCnt' => 'getUseCnt',
        'cost' => 'getCost',
        'clickRate' => 'getClickRate',
        'conversionRate' => 'getConversionRate',
        'conversionCost' => 'getConversionCost'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['videoUrl'] = isset($data['videoUrl']) ? $data['videoUrl'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['useCnt'] = isset($data['useCnt']) ? $data['useCnt'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['clickRate'] = isset($data['clickRate']) ? $data['clickRate'] : null;
        $this->container['conversionRate'] = isset($data['conversionRate']) ? $data['conversionRate'] : null;
        $this->container['conversionCost'] = isset($data['conversionCost']) ? $data['conversionCost'] : null;
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
     * Gets id
     *
     * @return int|mixed
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|mixed $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|mixed
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|mixed $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|mixed
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|mixed $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string|mixed
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string|mixed $imageUrl imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets videoUrl
     *
     * @return string|mixed
     */
    public function getVideoUrl()
    {
        return $this->container['videoUrl'];
    }

    /**
     * Sets videoUrl
     *
     * @param string|mixed $videoUrl videoUrl
     *
     * @return $this
     */
    public function setVideoUrl($videoUrl)
    {
        $this->container['videoUrl'] = $videoUrl;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|mixed
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|mixed $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|mixed
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|mixed $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return double|mixed
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param double|mixed $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets useCnt
     *
     * @return int|mixed
     */
    public function getUseCnt()
    {
        return $this->container['useCnt'];
    }

    /**
     * Sets useCnt
     *
     * @param int|mixed $useCnt useCnt
     *
     * @return $this
     */
    public function setUseCnt($useCnt)
    {
        $this->container['useCnt'] = $useCnt;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return int|mixed
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param int|mixed $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets clickRate
     *
     * @return double|mixed
     */
    public function getClickRate()
    {
        return $this->container['clickRate'];
    }

    /**
     * Sets clickRate
     *
     * @param double|mixed $clickRate clickRate
     *
     * @return $this
     */
    public function setClickRate($clickRate)
    {
        $this->container['clickRate'] = $clickRate;

        return $this;
    }

    /**
     * Gets conversionRate
     *
     * @return double|mixed
     */
    public function getConversionRate()
    {
        return $this->container['conversionRate'];
    }

    /**
     * Sets conversionRate
     *
     * @param double|mixed $conversionRate conversionRate
     *
     * @return $this
     */
    public function setConversionRate($conversionRate)
    {
        $this->container['conversionRate'] = $conversionRate;

        return $this;
    }

    /**
     * Gets conversionCost
     *
     * @return double|mixed
     */
    public function getConversionCost()
    {
        return $this->container['conversionCost'];
    }

    /**
     * Sets conversionCost
     *
     * @param double|mixed $conversionCost conversionCost
     *
     * @return $this
     */
    public function setConversionCost($conversionCost)
    {
        $this->container['conversionCost'] = $conversionCost;

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

