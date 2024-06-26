<?php
/**
 * AdditionalIndustryQualificationsSpec
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
 * AdditionalIndustryQualificationsSpec Class Doc Comment
 *
 * @category Class
 * @description 附加行业资质信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdditionalIndustryQualificationsSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'additional_industry_qualifications_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'systemIndustryId' => 'int',
        'businessScopeId' => 'int',
        'qualificationCode' => 'string',
        'imageIdList' => 'string[]',
        'expandFieldList' => '\TencentAds\Model\V3\ExpandFieldStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'systemIndustryId' => 'int64',
        'businessScopeId' => 'int64',
        'qualificationCode' => null,
        'imageIdList' => null,
        'expandFieldList' => null
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
        'systemIndustryId' => 'system_industry_id',
        'businessScopeId' => 'business_scope_id',
        'qualificationCode' => 'qualification_code',
        'imageIdList' => 'image_id_list',
        'expandFieldList' => 'expand_field_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'systemIndustryId' => 'setSystemIndustryId',
        'businessScopeId' => 'setBusinessScopeId',
        'qualificationCode' => 'setQualificationCode',
        'imageIdList' => 'setImageIdList',
        'expandFieldList' => 'setExpandFieldList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'systemIndustryId' => 'getSystemIndustryId',
        'businessScopeId' => 'getBusinessScopeId',
        'qualificationCode' => 'getQualificationCode',
        'imageIdList' => 'getImageIdList',
        'expandFieldList' => 'getExpandFieldList'
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
        $this->container['systemIndustryId'] = isset($data['systemIndustryId']) ? $data['systemIndustryId'] : null;
        $this->container['businessScopeId'] = isset($data['businessScopeId']) ? $data['businessScopeId'] : null;
        $this->container['qualificationCode'] = isset($data['qualificationCode']) ? $data['qualificationCode'] : null;
        $this->container['imageIdList'] = isset($data['imageIdList']) ? $data['imageIdList'] : null;
        $this->container['expandFieldList'] = isset($data['expandFieldList']) ? $data['expandFieldList'] : null;
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
     * Gets systemIndustryId
     *
     * @return int|mixed
     */
    public function getSystemIndustryId()
    {
        return $this->container['systemIndustryId'];
    }

    /**
     * Sets systemIndustryId
     *
     * @param int|mixed $systemIndustryId systemIndustryId
     *
     * @return $this
     */
    public function setSystemIndustryId($systemIndustryId)
    {
        $this->container['systemIndustryId'] = $systemIndustryId;

        return $this;
    }

    /**
     * Gets businessScopeId
     *
     * @return int|mixed
     */
    public function getBusinessScopeId()
    {
        return $this->container['businessScopeId'];
    }

    /**
     * Sets businessScopeId
     *
     * @param int|mixed $businessScopeId businessScopeId
     *
     * @return $this
     */
    public function setBusinessScopeId($businessScopeId)
    {
        $this->container['businessScopeId'] = $businessScopeId;

        return $this;
    }

    /**
     * Gets qualificationCode
     *
     * @return string|mixed
     */
    public function getQualificationCode()
    {
        return $this->container['qualificationCode'];
    }

    /**
     * Sets qualificationCode
     *
     * @param string|mixed $qualificationCode qualificationCode
     *
     * @return $this
     */
    public function setQualificationCode($qualificationCode)
    {
        $this->container['qualificationCode'] = $qualificationCode;

        return $this;
    }

    /**
     * Gets imageIdList
     *
     * @return string[]|mixed
     */
    public function getImageIdList()
    {
        return $this->container['imageIdList'];
    }

    /**
     * Sets imageIdList
     *
     * @param string[]|mixed $imageIdList imageIdList
     *
     * @return $this
     */
    public function setImageIdList($imageIdList)
    {
        $this->container['imageIdList'] = $imageIdList;

        return $this;
    }

    /**
     * Gets expandFieldList
     *
     * @return \TencentAds\Model\V3\ExpandFieldStruct[]|mixed
     */
    public function getExpandFieldList()
    {
        return $this->container['expandFieldList'];
    }

    /**
     * Sets expandFieldList
     *
     * @param \TencentAds\Model\V3\ExpandFieldStruct[]|mixed $expandFieldList expandFieldList
     *
     * @return $this
     */
    public function setExpandFieldList($expandFieldList)
    {
        $this->container['expandFieldList'] = $expandFieldList;

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


