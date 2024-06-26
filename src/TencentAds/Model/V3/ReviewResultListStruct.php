<?php
/**
 * ReviewResultListStruct
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
 * ReviewResultListStruct Class Doc Comment
 *
 * @category Class
 * @description 审核结果
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReviewResultListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'review_result_list_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dynamicCreativeId' => 'int',
        'elementResultList' => '\TencentAds\Model\V3\ElementResultListStruct[]',
        'siteSetResultList' => '\TencentAds\Model\V3\SiteSetResultListStruct[]',
        'rejectMessageList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dynamicCreativeId' => 'int64',
        'elementResultList' => null,
        'siteSetResultList' => null,
        'rejectMessageList' => null
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
        'dynamicCreativeId' => 'dynamic_creative_id',
        'elementResultList' => 'element_result_list',
        'siteSetResultList' => 'site_set_result_list',
        'rejectMessageList' => 'reject_message_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dynamicCreativeId' => 'setDynamicCreativeId',
        'elementResultList' => 'setElementResultList',
        'siteSetResultList' => 'setSiteSetResultList',
        'rejectMessageList' => 'setRejectMessageList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dynamicCreativeId' => 'getDynamicCreativeId',
        'elementResultList' => 'getElementResultList',
        'siteSetResultList' => 'getSiteSetResultList',
        'rejectMessageList' => 'getRejectMessageList'
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
        $this->container['dynamicCreativeId'] = isset($data['dynamicCreativeId']) ? $data['dynamicCreativeId'] : null;
        $this->container['elementResultList'] = isset($data['elementResultList']) ? $data['elementResultList'] : null;
        $this->container['siteSetResultList'] = isset($data['siteSetResultList']) ? $data['siteSetResultList'] : null;
        $this->container['rejectMessageList'] = isset($data['rejectMessageList']) ? $data['rejectMessageList'] : null;
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
     * Gets elementResultList
     *
     * @return \TencentAds\Model\V3\ElementResultListStruct[]|mixed
     */
    public function getElementResultList()
    {
        return $this->container['elementResultList'];
    }

    /**
     * Sets elementResultList
     *
     * @param \TencentAds\Model\V3\ElementResultListStruct[]|mixed $elementResultList elementResultList
     *
     * @return $this
     */
    public function setElementResultList($elementResultList)
    {
        $this->container['elementResultList'] = $elementResultList;

        return $this;
    }

    /**
     * Gets siteSetResultList
     *
     * @return \TencentAds\Model\V3\SiteSetResultListStruct[]|mixed
     */
    public function getSiteSetResultList()
    {
        return $this->container['siteSetResultList'];
    }

    /**
     * Sets siteSetResultList
     *
     * @param \TencentAds\Model\V3\SiteSetResultListStruct[]|mixed $siteSetResultList siteSetResultList
     *
     * @return $this
     */
    public function setSiteSetResultList($siteSetResultList)
    {
        $this->container['siteSetResultList'] = $siteSetResultList;

        return $this;
    }

    /**
     * Gets rejectMessageList
     *
     * @return string[]|mixed
     */
    public function getRejectMessageList()
    {
        return $this->container['rejectMessageList'];
    }

    /**
     * Sets rejectMessageList
     *
     * @param string[]|mixed $rejectMessageList rejectMessageList
     *
     * @return $this
     */
    public function setRejectMessageList($rejectMessageList)
    {
        $this->container['rejectMessageList'] = $rejectMessageList;

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


