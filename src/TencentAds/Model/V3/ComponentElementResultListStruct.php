<?php
/**
 * ComponentElementResultListStruct
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
 * ComponentElementResultListStruct Class Doc Comment
 *
 * @category Class
 * @description 组件元素粒度审核结果
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComponentElementResultListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'component_element_result_list_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'imageId' => 'string',
        'videoId' => 'string',
        'elementName' => 'string',
        'elementValue' => 'string',
        'elementType' => '\TencentAds\Model\V3\ReviewElementType',
        'reviewStatus' => '\TencentAds\Model\V3\ReviewResultStatus',
        'elementRejectDetailInfo' => '\TencentAds\Model\V3\ComponentElementRejectDetailInfoListStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'imageId' => null,
        'videoId' => null,
        'elementName' => null,
        'elementValue' => null,
        'elementType' => null,
        'reviewStatus' => null,
        'elementRejectDetailInfo' => null
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
        'imageId' => 'image_id',
        'videoId' => 'video_id',
        'elementName' => 'element_name',
        'elementValue' => 'element_value',
        'elementType' => 'element_type',
        'reviewStatus' => 'review_status',
        'elementRejectDetailInfo' => 'element_reject_detail_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'imageId' => 'setImageId',
        'videoId' => 'setVideoId',
        'elementName' => 'setElementName',
        'elementValue' => 'setElementValue',
        'elementType' => 'setElementType',
        'reviewStatus' => 'setReviewStatus',
        'elementRejectDetailInfo' => 'setElementRejectDetailInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'imageId' => 'getImageId',
        'videoId' => 'getVideoId',
        'elementName' => 'getElementName',
        'elementValue' => 'getElementValue',
        'elementType' => 'getElementType',
        'reviewStatus' => 'getReviewStatus',
        'elementRejectDetailInfo' => 'getElementRejectDetailInfo'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['videoId'] = isset($data['videoId']) ? $data['videoId'] : null;
        $this->container['elementName'] = isset($data['elementName']) ? $data['elementName'] : null;
        $this->container['elementValue'] = isset($data['elementValue']) ? $data['elementValue'] : null;
        $this->container['elementType'] = isset($data['elementType']) ? $data['elementType'] : null;
        $this->container['reviewStatus'] = isset($data['reviewStatus']) ? $data['reviewStatus'] : null;
        $this->container['elementRejectDetailInfo'] = isset($data['elementRejectDetailInfo']) ? $data['elementRejectDetailInfo'] : null;
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
     * Gets imageId
     *
     * @return string|mixed
     */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
     * Sets imageId
     *
     * @param string|mixed $imageId imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;

        return $this;
    }

    /**
     * Gets videoId
     *
     * @return string|mixed
     */
    public function getVideoId()
    {
        return $this->container['videoId'];
    }

    /**
     * Sets videoId
     *
     * @param string|mixed $videoId videoId
     *
     * @return $this
     */
    public function setVideoId($videoId)
    {
        $this->container['videoId'] = $videoId;

        return $this;
    }

    /**
     * Gets elementName
     *
     * @return string|mixed
     */
    public function getElementName()
    {
        return $this->container['elementName'];
    }

    /**
     * Sets elementName
     *
     * @param string|mixed $elementName elementName
     *
     * @return $this
     */
    public function setElementName($elementName)
    {
        $this->container['elementName'] = $elementName;

        return $this;
    }

    /**
     * Gets elementValue
     *
     * @return string|mixed
     */
    public function getElementValue()
    {
        return $this->container['elementValue'];
    }

    /**
     * Sets elementValue
     *
     * @param string|mixed $elementValue elementValue
     *
     * @return $this
     */
    public function setElementValue($elementValue)
    {
        $this->container['elementValue'] = $elementValue;

        return $this;
    }

    /**
     * Gets elementType
     *
     * @return \TencentAds\Model\V3\ReviewElementType|mixed
     */
    public function getElementType()
    {
        return $this->container['elementType'];
    }

    /**
     * Sets elementType
     *
     * @param \TencentAds\Model\V3\ReviewElementType|mixed $elementType elementType
     *
     * @return $this
     */
    public function setElementType($elementType)
    {
        $this->container['elementType'] = $elementType;

        return $this;
    }

    /**
     * Gets reviewStatus
     *
     * @return \TencentAds\Model\V3\ReviewResultStatus|mixed
     */
    public function getReviewStatus()
    {
        return $this->container['reviewStatus'];
    }

    /**
     * Sets reviewStatus
     *
     * @param \TencentAds\Model\V3\ReviewResultStatus|mixed $reviewStatus reviewStatus
     *
     * @return $this
     */
    public function setReviewStatus($reviewStatus)
    {
        $this->container['reviewStatus'] = $reviewStatus;

        return $this;
    }

    /**
     * Gets elementRejectDetailInfo
     *
     * @return \TencentAds\Model\V3\ComponentElementRejectDetailInfoListStruct[]|mixed
     */
    public function getElementRejectDetailInfo()
    {
        return $this->container['elementRejectDetailInfo'];
    }

    /**
     * Sets elementRejectDetailInfo
     *
     * @param \TencentAds\Model\V3\ComponentElementRejectDetailInfoListStruct[]|mixed $elementRejectDetailInfo elementRejectDetailInfo
     *
     * @return $this
     */
    public function setElementRejectDetailInfo($elementRejectDetailInfo)
    {
        $this->container['elementRejectDetailInfo'] = $elementRejectDetailInfo;

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

