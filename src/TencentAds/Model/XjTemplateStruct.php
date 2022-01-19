<?php
/**
 * XjTemplateStruct
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
 * XjTemplateStruct Class Doc Comment
 *
 * @category Class
 * @description 获取模板列表数据结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XjTemplateStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'xj_template_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pageTemplateId' => 'string',
        'templateOwnerId' => 'int',
        'pageTemplateName' => 'string',
        'pageTemplateCoverUrl' => 'string',
        'playableType' => '\TencentAds\Model\PlayableType',
        'labels' => 'string[]',
        'isComplex' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pageTemplateId' => null,
        'templateOwnerId' => 'int64',
        'pageTemplateName' => null,
        'pageTemplateCoverUrl' => null,
        'playableType' => null,
        'labels' => null,
        'isComplex' => null
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
        'pageTemplateId' => 'page_template_id',
        'templateOwnerId' => 'template_owner_id',
        'pageTemplateName' => 'page_template_name',
        'pageTemplateCoverUrl' => 'page_template_cover_url',
        'playableType' => 'playable_type',
        'labels' => 'labels',
        'isComplex' => 'is_complex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageTemplateId' => 'setPageTemplateId',
        'templateOwnerId' => 'setTemplateOwnerId',
        'pageTemplateName' => 'setPageTemplateName',
        'pageTemplateCoverUrl' => 'setPageTemplateCoverUrl',
        'playableType' => 'setPlayableType',
        'labels' => 'setLabels',
        'isComplex' => 'setIsComplex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageTemplateId' => 'getPageTemplateId',
        'templateOwnerId' => 'getTemplateOwnerId',
        'pageTemplateName' => 'getPageTemplateName',
        'pageTemplateCoverUrl' => 'getPageTemplateCoverUrl',
        'playableType' => 'getPlayableType',
        'labels' => 'getLabels',
        'isComplex' => 'getIsComplex'
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
        $this->container['pageTemplateId'] = isset($data['pageTemplateId']) ? $data['pageTemplateId'] : null;
        $this->container['templateOwnerId'] = isset($data['templateOwnerId']) ? $data['templateOwnerId'] : null;
        $this->container['pageTemplateName'] = isset($data['pageTemplateName']) ? $data['pageTemplateName'] : null;
        $this->container['pageTemplateCoverUrl'] = isset($data['pageTemplateCoverUrl']) ? $data['pageTemplateCoverUrl'] : null;
        $this->container['playableType'] = isset($data['playableType']) ? $data['playableType'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['isComplex'] = isset($data['isComplex']) ? $data['isComplex'] : null;
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
     * Gets pageTemplateId
     *
     * @return string|mixed
     */
    public function getPageTemplateId()
    {
        return $this->container['pageTemplateId'];
    }

    /**
     * Sets pageTemplateId
     *
     * @param string|mixed $pageTemplateId pageTemplateId
     *
     * @return $this
     */
    public function setPageTemplateId($pageTemplateId)
    {
        $this->container['pageTemplateId'] = $pageTemplateId;

        return $this;
    }

    /**
     * Gets templateOwnerId
     *
     * @return int|mixed
     */
    public function getTemplateOwnerId()
    {
        return $this->container['templateOwnerId'];
    }

    /**
     * Sets templateOwnerId
     *
     * @param int|mixed $templateOwnerId templateOwnerId
     *
     * @return $this
     */
    public function setTemplateOwnerId($templateOwnerId)
    {
        $this->container['templateOwnerId'] = $templateOwnerId;

        return $this;
    }

    /**
     * Gets pageTemplateName
     *
     * @return string|mixed
     */
    public function getPageTemplateName()
    {
        return $this->container['pageTemplateName'];
    }

    /**
     * Sets pageTemplateName
     *
     * @param string|mixed $pageTemplateName pageTemplateName
     *
     * @return $this
     */
    public function setPageTemplateName($pageTemplateName)
    {
        $this->container['pageTemplateName'] = $pageTemplateName;

        return $this;
    }

    /**
     * Gets pageTemplateCoverUrl
     *
     * @return string|mixed
     */
    public function getPageTemplateCoverUrl()
    {
        return $this->container['pageTemplateCoverUrl'];
    }

    /**
     * Sets pageTemplateCoverUrl
     *
     * @param string|mixed $pageTemplateCoverUrl pageTemplateCoverUrl
     *
     * @return $this
     */
    public function setPageTemplateCoverUrl($pageTemplateCoverUrl)
    {
        $this->container['pageTemplateCoverUrl'] = $pageTemplateCoverUrl;

        return $this;
    }

    /**
     * Gets playableType
     *
     * @return \TencentAds\Model\PlayableType|mixed
     */
    public function getPlayableType()
    {
        return $this->container['playableType'];
    }

    /**
     * Sets playableType
     *
     * @param \TencentAds\Model\PlayableType|mixed $playableType playableType
     *
     * @return $this
     */
    public function setPlayableType($playableType)
    {
        $this->container['playableType'] = $playableType;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string[]|mixed
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string[]|mixed $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets isComplex
     *
     * @return bool|mixed
     */
    public function getIsComplex()
    {
        return $this->container['isComplex'];
    }

    /**
     * Sets isComplex
     *
     * @param bool|mixed $isComplex isComplex
     *
     * @return $this
     */
    public function setIsComplex($isComplex)
    {
        $this->container['isComplex'] = $isComplex;

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


