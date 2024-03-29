<?php
/**
 * GetData
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
 * GetData Class Doc Comment
 *
 * @category Class
 * @description 已绑定信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'imageId' => 'int',
        'mediaId' => 'int',
        'marketingAssetId' => 'int',
        'auditStatus' => 'int',
        'auditMsg' => 'string',
        'dcatagList' => '\TencentAds\Model\V3\Dactag[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'imageId' => 'int64',
        'mediaId' => 'int64',
        'marketingAssetId' => 'int64',
        'auditStatus' => 'int64',
        'auditMsg' => null,
        'dcatagList' => null
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
        'mediaId' => 'media_id',
        'marketingAssetId' => 'marketing_asset_id',
        'auditStatus' => 'audit_status',
        'auditMsg' => 'audit_msg',
        'dcatagList' => 'dcatag_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'imageId' => 'setImageId',
        'mediaId' => 'setMediaId',
        'marketingAssetId' => 'setMarketingAssetId',
        'auditStatus' => 'setAuditStatus',
        'auditMsg' => 'setAuditMsg',
        'dcatagList' => 'setDcatagList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'imageId' => 'getImageId',
        'mediaId' => 'getMediaId',
        'marketingAssetId' => 'getMarketingAssetId',
        'auditStatus' => 'getAuditStatus',
        'auditMsg' => 'getAuditMsg',
        'dcatagList' => 'getDcatagList'
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
        $this->container['mediaId'] = isset($data['mediaId']) ? $data['mediaId'] : null;
        $this->container['marketingAssetId'] = isset($data['marketingAssetId']) ? $data['marketingAssetId'] : null;
        $this->container['auditStatus'] = isset($data['auditStatus']) ? $data['auditStatus'] : null;
        $this->container['auditMsg'] = isset($data['auditMsg']) ? $data['auditMsg'] : null;
        $this->container['dcatagList'] = isset($data['dcatagList']) ? $data['dcatagList'] : null;
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
     * @return int|mixed
     */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
     * Sets imageId
     *
     * @param int|mixed $imageId imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;

        return $this;
    }

    /**
     * Gets mediaId
     *
     * @return int|mixed
     */
    public function getMediaId()
    {
        return $this->container['mediaId'];
    }

    /**
     * Sets mediaId
     *
     * @param int|mixed $mediaId mediaId
     *
     * @return $this
     */
    public function setMediaId($mediaId)
    {
        $this->container['mediaId'] = $mediaId;

        return $this;
    }

    /**
     * Gets marketingAssetId
     *
     * @return int|mixed
     */
    public function getMarketingAssetId()
    {
        return $this->container['marketingAssetId'];
    }

    /**
     * Sets marketingAssetId
     *
     * @param int|mixed $marketingAssetId marketingAssetId
     *
     * @return $this
     */
    public function setMarketingAssetId($marketingAssetId)
    {
        $this->container['marketingAssetId'] = $marketingAssetId;

        return $this;
    }

    /**
     * Gets auditStatus
     *
     * @return int|mixed
     */
    public function getAuditStatus()
    {
        return $this->container['auditStatus'];
    }

    /**
     * Sets auditStatus
     *
     * @param int|mixed $auditStatus auditStatus
     *
     * @return $this
     */
    public function setAuditStatus($auditStatus)
    {
        $this->container['auditStatus'] = $auditStatus;

        return $this;
    }

    /**
     * Gets auditMsg
     *
     * @return string|mixed
     */
    public function getAuditMsg()
    {
        return $this->container['auditMsg'];
    }

    /**
     * Sets auditMsg
     *
     * @param string|mixed $auditMsg auditMsg
     *
     * @return $this
     */
    public function setAuditMsg($auditMsg)
    {
        $this->container['auditMsg'] = $auditMsg;

        return $this;
    }

    /**
     * Gets dcatagList
     *
     * @return \TencentAds\Model\V3\Dactag[]|mixed
     */
    public function getDcatagList()
    {
        return $this->container['dcatagList'];
    }

    /**
     * Sets dcatagList
     *
     * @param \TencentAds\Model\V3\Dactag[]|mixed $dcatagList dcatagList
     *
     * @return $this
     */
    public function setDcatagList($dcatagList)
    {
        $this->container['dcatagList'] = $dcatagList;

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


