<?php
/**
 * RspListStruct
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
 * RspListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RspListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'rsp_list_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'materialId' => 'string',
        'materialType' => 'int',
        'preAuditStatus' => 'int',
        'rejectPlacementGroupId' => 'string',
        'preAuditMsg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'materialId' => null,
        'materialType' => 'int64',
        'preAuditStatus' => 'int64',
        'rejectPlacementGroupId' => null,
        'preAuditMsg' => null
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
        'accountId' => 'account_id',
        'materialId' => 'material_id',
        'materialType' => 'material_type',
        'preAuditStatus' => 'pre_audit_status',
        'rejectPlacementGroupId' => 'reject_placement_group_id',
        'preAuditMsg' => 'pre_audit_msg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'materialId' => 'setMaterialId',
        'materialType' => 'setMaterialType',
        'preAuditStatus' => 'setPreAuditStatus',
        'rejectPlacementGroupId' => 'setRejectPlacementGroupId',
        'preAuditMsg' => 'setPreAuditMsg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'materialId' => 'getMaterialId',
        'materialType' => 'getMaterialType',
        'preAuditStatus' => 'getPreAuditStatus',
        'rejectPlacementGroupId' => 'getRejectPlacementGroupId',
        'preAuditMsg' => 'getPreAuditMsg'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['materialId'] = isset($data['materialId']) ? $data['materialId'] : null;
        $this->container['materialType'] = isset($data['materialType']) ? $data['materialType'] : null;
        $this->container['preAuditStatus'] = isset($data['preAuditStatus']) ? $data['preAuditStatus'] : null;
        $this->container['rejectPlacementGroupId'] = isset($data['rejectPlacementGroupId']) ? $data['rejectPlacementGroupId'] : null;
        $this->container['preAuditMsg'] = isset($data['preAuditMsg']) ? $data['preAuditMsg'] : null;
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
     * Gets accountId
     *
     * @return int|mixed
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int|mixed $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets materialId
     *
     * @return string|mixed
     */
    public function getMaterialId()
    {
        return $this->container['materialId'];
    }

    /**
     * Sets materialId
     *
     * @param string|mixed $materialId materialId
     *
     * @return $this
     */
    public function setMaterialId($materialId)
    {
        $this->container['materialId'] = $materialId;

        return $this;
    }

    /**
     * Gets materialType
     *
     * @return int|mixed
     */
    public function getMaterialType()
    {
        return $this->container['materialType'];
    }

    /**
     * Sets materialType
     *
     * @param int|mixed $materialType materialType
     *
     * @return $this
     */
    public function setMaterialType($materialType)
    {
        $this->container['materialType'] = $materialType;

        return $this;
    }

    /**
     * Gets preAuditStatus
     *
     * @return int|mixed
     */
    public function getPreAuditStatus()
    {
        return $this->container['preAuditStatus'];
    }

    /**
     * Sets preAuditStatus
     *
     * @param int|mixed $preAuditStatus preAuditStatus
     *
     * @return $this
     */
    public function setPreAuditStatus($preAuditStatus)
    {
        $this->container['preAuditStatus'] = $preAuditStatus;

        return $this;
    }

    /**
     * Gets rejectPlacementGroupId
     *
     * @return string|mixed
     */
    public function getRejectPlacementGroupId()
    {
        return $this->container['rejectPlacementGroupId'];
    }

    /**
     * Sets rejectPlacementGroupId
     *
     * @param string|mixed $rejectPlacementGroupId rejectPlacementGroupId
     *
     * @return $this
     */
    public function setRejectPlacementGroupId($rejectPlacementGroupId)
    {
        $this->container['rejectPlacementGroupId'] = $rejectPlacementGroupId;

        return $this;
    }

    /**
     * Gets preAuditMsg
     *
     * @return string|mixed
     */
    public function getPreAuditMsg()
    {
        return $this->container['preAuditMsg'];
    }

    /**
     * Sets preAuditMsg
     *
     * @param string|mixed $preAuditMsg preAuditMsg
     *
     * @return $this
     */
    public function setPreAuditMsg($preAuditMsg)
    {
        $this->container['preAuditMsg'] = $preAuditMsg;

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


