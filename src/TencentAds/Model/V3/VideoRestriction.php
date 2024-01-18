<?php
/**
 * VideoRestriction
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
 * VideoRestriction Class Doc Comment
 *
 * @category Class
 * @description 视频需满足的限制条件
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideoRestriction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'video_restriction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'width' => 'int',
        'height' => 'int',
        'minWidth' => 'int',
        'minHeight' => 'int',
        'ratioWidth' => 'int',
        'ratioHeight' => 'int',
        'fileSize' => 'int',
        'fileFormat' => 'string[]',
        'minDuration' => 'int',
        'maxDuration' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'width' => 'int64',
        'height' => 'int64',
        'minWidth' => 'int64',
        'minHeight' => 'int64',
        'ratioWidth' => 'int64',
        'ratioHeight' => 'int64',
        'fileSize' => 'int64',
        'fileFormat' => null,
        'minDuration' => 'int64',
        'maxDuration' => 'int64'
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
        'width' => 'width',
        'height' => 'height',
        'minWidth' => 'min_width',
        'minHeight' => 'min_height',
        'ratioWidth' => 'ratio_width',
        'ratioHeight' => 'ratio_height',
        'fileSize' => 'file_size',
        'fileFormat' => 'file_format',
        'minDuration' => 'min_duration',
        'maxDuration' => 'max_duration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'width' => 'setWidth',
        'height' => 'setHeight',
        'minWidth' => 'setMinWidth',
        'minHeight' => 'setMinHeight',
        'ratioWidth' => 'setRatioWidth',
        'ratioHeight' => 'setRatioHeight',
        'fileSize' => 'setFileSize',
        'fileFormat' => 'setFileFormat',
        'minDuration' => 'setMinDuration',
        'maxDuration' => 'setMaxDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'width' => 'getWidth',
        'height' => 'getHeight',
        'minWidth' => 'getMinWidth',
        'minHeight' => 'getMinHeight',
        'ratioWidth' => 'getRatioWidth',
        'ratioHeight' => 'getRatioHeight',
        'fileSize' => 'getFileSize',
        'fileFormat' => 'getFileFormat',
        'minDuration' => 'getMinDuration',
        'maxDuration' => 'getMaxDuration'
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
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['minWidth'] = isset($data['minWidth']) ? $data['minWidth'] : null;
        $this->container['minHeight'] = isset($data['minHeight']) ? $data['minHeight'] : null;
        $this->container['ratioWidth'] = isset($data['ratioWidth']) ? $data['ratioWidth'] : null;
        $this->container['ratioHeight'] = isset($data['ratioHeight']) ? $data['ratioHeight'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileFormat'] = isset($data['fileFormat']) ? $data['fileFormat'] : null;
        $this->container['minDuration'] = isset($data['minDuration']) ? $data['minDuration'] : null;
        $this->container['maxDuration'] = isset($data['maxDuration']) ? $data['maxDuration'] : null;
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
     * Gets ratioHeight
     *
     * @return int|mixed
     */
    public function getRatioHeight()
    {
        return $this->container['ratioHeight'];
    }

    /**
     * Sets ratioHeight
     *
     * @param int|mixed $ratioHeight ratioHeight
     *
     * @return $this
     */
    public function setRatioHeight($ratioHeight)
    {
        $this->container['ratioHeight'] = $ratioHeight;

        return $this;
    }

    /**
     * Gets fileSize
     *
     * @return int|mixed
     */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
     * Sets fileSize
     *
     * @param int|mixed $fileSize fileSize
     *
     * @return $this
     */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;

        return $this;
    }

    /**
     * Gets fileFormat
     *
     * @return string[]|mixed
     */
    public function getFileFormat()
    {
        return $this->container['fileFormat'];
    }

    /**
     * Sets fileFormat
     *
     * @param string[]|mixed $fileFormat fileFormat
     *
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->container['fileFormat'] = $fileFormat;

        return $this;
    }

    /**
     * Gets minDuration
     *
     * @return int|mixed
     */
    public function getMinDuration()
    {
        return $this->container['minDuration'];
    }

    /**
     * Sets minDuration
     *
     * @param int|mixed $minDuration minDuration
     *
     * @return $this
     */
    public function setMinDuration($minDuration)
    {
        $this->container['minDuration'] = $minDuration;

        return $this;
    }

    /**
     * Gets maxDuration
     *
     * @return int|mixed
     */
    public function getMaxDuration()
    {
        return $this->container['maxDuration'];
    }

    /**
     * Sets maxDuration
     *
     * @param int|mixed $maxDuration maxDuration
     *
     * @return $this
     */
    public function setMaxDuration($maxDuration)
    {
        $this->container['maxDuration'] = $maxDuration;

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


