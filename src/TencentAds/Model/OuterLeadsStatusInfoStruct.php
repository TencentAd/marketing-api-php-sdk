<?php
/**
 * OuterLeadsStatusInfoStruct
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
 * OuterLeadsStatusInfoStruct Class Doc Comment
 *
 * @category Class
 * @description 回传信息结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OuterLeadsStatusInfoStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'outer_leads_status_info_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'outerLeadsId' => 'string',
        'leadsId' => 'int',
        'leadsTel' => 'string',
        'leadsQq' => 'int',
        'leadsWechat' => 'string',
        'clickId' => 'string',
        'outerLeadsConvertType' => 'string',
        'outerLeadsIneffectReason' => 'string',
        'customizedTags' => '\TencentAds\Model\CustomizedTagsStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'outerLeadsId' => null,
        'leadsId' => 'int64',
        'leadsTel' => null,
        'leadsQq' => 'int64',
        'leadsWechat' => null,
        'clickId' => null,
        'outerLeadsConvertType' => null,
        'outerLeadsIneffectReason' => null,
        'customizedTags' => null
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
        'outerLeadsId' => 'outer_leads_id',
        'leadsId' => 'leads_id',
        'leadsTel' => 'leads_tel',
        'leadsQq' => 'leads_qq',
        'leadsWechat' => 'leads_wechat',
        'clickId' => 'click_id',
        'outerLeadsConvertType' => 'outer_leads_convert_type',
        'outerLeadsIneffectReason' => 'outer_leads_ineffect_reason',
        'customizedTags' => 'customized_tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'outerLeadsId' => 'setOuterLeadsId',
        'leadsId' => 'setLeadsId',
        'leadsTel' => 'setLeadsTel',
        'leadsQq' => 'setLeadsQq',
        'leadsWechat' => 'setLeadsWechat',
        'clickId' => 'setClickId',
        'outerLeadsConvertType' => 'setOuterLeadsConvertType',
        'outerLeadsIneffectReason' => 'setOuterLeadsIneffectReason',
        'customizedTags' => 'setCustomizedTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'outerLeadsId' => 'getOuterLeadsId',
        'leadsId' => 'getLeadsId',
        'leadsTel' => 'getLeadsTel',
        'leadsQq' => 'getLeadsQq',
        'leadsWechat' => 'getLeadsWechat',
        'clickId' => 'getClickId',
        'outerLeadsConvertType' => 'getOuterLeadsConvertType',
        'outerLeadsIneffectReason' => 'getOuterLeadsIneffectReason',
        'customizedTags' => 'getCustomizedTags'
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
        $this->container['outerLeadsId'] = isset($data['outerLeadsId']) ? $data['outerLeadsId'] : null;
        $this->container['leadsId'] = isset($data['leadsId']) ? $data['leadsId'] : null;
        $this->container['leadsTel'] = isset($data['leadsTel']) ? $data['leadsTel'] : null;
        $this->container['leadsQq'] = isset($data['leadsQq']) ? $data['leadsQq'] : null;
        $this->container['leadsWechat'] = isset($data['leadsWechat']) ? $data['leadsWechat'] : null;
        $this->container['clickId'] = isset($data['clickId']) ? $data['clickId'] : null;
        $this->container['outerLeadsConvertType'] = isset($data['outerLeadsConvertType']) ? $data['outerLeadsConvertType'] : null;
        $this->container['outerLeadsIneffectReason'] = isset($data['outerLeadsIneffectReason']) ? $data['outerLeadsIneffectReason'] : null;
        $this->container['customizedTags'] = isset($data['customizedTags']) ? $data['customizedTags'] : null;
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
     * Gets outerLeadsId
     *
     * @return string|mixed
     */
    public function getOuterLeadsId()
    {
        return $this->container['outerLeadsId'];
    }

    /**
     * Sets outerLeadsId
     *
     * @param string|mixed $outerLeadsId outerLeadsId
     *
     * @return $this
     */
    public function setOuterLeadsId($outerLeadsId)
    {
        $this->container['outerLeadsId'] = $outerLeadsId;

        return $this;
    }

    /**
     * Gets leadsId
     *
     * @return int|mixed
     */
    public function getLeadsId()
    {
        return $this->container['leadsId'];
    }

    /**
     * Sets leadsId
     *
     * @param int|mixed $leadsId leadsId
     *
     * @return $this
     */
    public function setLeadsId($leadsId)
    {
        $this->container['leadsId'] = $leadsId;

        return $this;
    }

    /**
     * Gets leadsTel
     *
     * @return string|mixed
     */
    public function getLeadsTel()
    {
        return $this->container['leadsTel'];
    }

    /**
     * Sets leadsTel
     *
     * @param string|mixed $leadsTel leadsTel
     *
     * @return $this
     */
    public function setLeadsTel($leadsTel)
    {
        $this->container['leadsTel'] = $leadsTel;

        return $this;
    }

    /**
     * Gets leadsQq
     *
     * @return int|mixed
     */
    public function getLeadsQq()
    {
        return $this->container['leadsQq'];
    }

    /**
     * Sets leadsQq
     *
     * @param int|mixed $leadsQq leadsQq
     *
     * @return $this
     */
    public function setLeadsQq($leadsQq)
    {
        $this->container['leadsQq'] = $leadsQq;

        return $this;
    }

    /**
     * Gets leadsWechat
     *
     * @return string|mixed
     */
    public function getLeadsWechat()
    {
        return $this->container['leadsWechat'];
    }

    /**
     * Sets leadsWechat
     *
     * @param string|mixed $leadsWechat leadsWechat
     *
     * @return $this
     */
    public function setLeadsWechat($leadsWechat)
    {
        $this->container['leadsWechat'] = $leadsWechat;

        return $this;
    }

    /**
     * Gets clickId
     *
     * @return string|mixed
     */
    public function getClickId()
    {
        return $this->container['clickId'];
    }

    /**
     * Sets clickId
     *
     * @param string|mixed $clickId clickId
     *
     * @return $this
     */
    public function setClickId($clickId)
    {
        $this->container['clickId'] = $clickId;

        return $this;
    }

    /**
     * Gets outerLeadsConvertType
     *
     * @return string|mixed
     */
    public function getOuterLeadsConvertType()
    {
        return $this->container['outerLeadsConvertType'];
    }

    /**
     * Sets outerLeadsConvertType
     *
     * @param string|mixed $outerLeadsConvertType outerLeadsConvertType
     *
     * @return $this
     */
    public function setOuterLeadsConvertType($outerLeadsConvertType)
    {
        $this->container['outerLeadsConvertType'] = $outerLeadsConvertType;

        return $this;
    }

    /**
     * Gets outerLeadsIneffectReason
     *
     * @return string|mixed
     */
    public function getOuterLeadsIneffectReason()
    {
        return $this->container['outerLeadsIneffectReason'];
    }

    /**
     * Sets outerLeadsIneffectReason
     *
     * @param string|mixed $outerLeadsIneffectReason outerLeadsIneffectReason
     *
     * @return $this
     */
    public function setOuterLeadsIneffectReason($outerLeadsIneffectReason)
    {
        $this->container['outerLeadsIneffectReason'] = $outerLeadsIneffectReason;

        return $this;
    }

    /**
     * Gets customizedTags
     *
     * @return \TencentAds\Model\CustomizedTagsStruct[]|mixed
     */
    public function getCustomizedTags()
    {
        return $this->container['customizedTags'];
    }

    /**
     * Sets customizedTags
     *
     * @param \TencentAds\Model\CustomizedTagsStruct[]|mixed $customizedTags customizedTags
     *
     * @return $this
     */
    public function setCustomizedTags($customizedTags)
    {
        $this->container['customizedTags'] = $customizedTags;

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


