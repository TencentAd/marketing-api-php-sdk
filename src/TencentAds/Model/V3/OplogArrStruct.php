<?php
/**
 * OplogArrStruct
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
 * OplogArrStruct Class Doc Comment
 *
 * @category Class
 * @description 操作日志结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OplogArrStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'oplog_arr_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operationAction' => '\TencentAds\Model\V3\OperationActionType',
        'frontedOperator' => 'string',
        'operationObjectId' => 'int',
        'operationObjectName' => 'string',
        'operatorPlatform' => '\TencentAds\Model\V3\OperatorPlatformType',
        'operationLog' => 'string[]',
        'createdTime' => 'int',
        'operationInfoList' => '\TencentAds\Model\V3\OperationInfoListStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operationAction' => null,
        'frontedOperator' => null,
        'operationObjectId' => 'int64',
        'operationObjectName' => null,
        'operatorPlatform' => null,
        'operationLog' => null,
        'createdTime' => 'int64',
        'operationInfoList' => null
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
        'operationAction' => 'operation_action',
        'frontedOperator' => 'fronted_operator',
        'operationObjectId' => 'operation_object_id',
        'operationObjectName' => 'operation_object_name',
        'operatorPlatform' => 'operator_platform',
        'operationLog' => 'operation_log',
        'createdTime' => 'created_time',
        'operationInfoList' => 'operation_info_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operationAction' => 'setOperationAction',
        'frontedOperator' => 'setFrontedOperator',
        'operationObjectId' => 'setOperationObjectId',
        'operationObjectName' => 'setOperationObjectName',
        'operatorPlatform' => 'setOperatorPlatform',
        'operationLog' => 'setOperationLog',
        'createdTime' => 'setCreatedTime',
        'operationInfoList' => 'setOperationInfoList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operationAction' => 'getOperationAction',
        'frontedOperator' => 'getFrontedOperator',
        'operationObjectId' => 'getOperationObjectId',
        'operationObjectName' => 'getOperationObjectName',
        'operatorPlatform' => 'getOperatorPlatform',
        'operationLog' => 'getOperationLog',
        'createdTime' => 'getCreatedTime',
        'operationInfoList' => 'getOperationInfoList'
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
        $this->container['operationAction'] = isset($data['operationAction']) ? $data['operationAction'] : null;
        $this->container['frontedOperator'] = isset($data['frontedOperator']) ? $data['frontedOperator'] : null;
        $this->container['operationObjectId'] = isset($data['operationObjectId']) ? $data['operationObjectId'] : null;
        $this->container['operationObjectName'] = isset($data['operationObjectName']) ? $data['operationObjectName'] : null;
        $this->container['operatorPlatform'] = isset($data['operatorPlatform']) ? $data['operatorPlatform'] : null;
        $this->container['operationLog'] = isset($data['operationLog']) ? $data['operationLog'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['operationInfoList'] = isset($data['operationInfoList']) ? $data['operationInfoList'] : null;
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
     * Gets operationAction
     *
     * @return \TencentAds\Model\V3\OperationActionType|mixed
     */
    public function getOperationAction()
    {
        return $this->container['operationAction'];
    }

    /**
     * Sets operationAction
     *
     * @param \TencentAds\Model\V3\OperationActionType|mixed $operationAction operationAction
     *
     * @return $this
     */
    public function setOperationAction($operationAction)
    {
        $this->container['operationAction'] = $operationAction;

        return $this;
    }

    /**
     * Gets frontedOperator
     *
     * @return string|mixed
     */
    public function getFrontedOperator()
    {
        return $this->container['frontedOperator'];
    }

    /**
     * Sets frontedOperator
     *
     * @param string|mixed $frontedOperator frontedOperator
     *
     * @return $this
     */
    public function setFrontedOperator($frontedOperator)
    {
        $this->container['frontedOperator'] = $frontedOperator;

        return $this;
    }

    /**
     * Gets operationObjectId
     *
     * @return int|mixed
     */
    public function getOperationObjectId()
    {
        return $this->container['operationObjectId'];
    }

    /**
     * Sets operationObjectId
     *
     * @param int|mixed $operationObjectId operationObjectId
     *
     * @return $this
     */
    public function setOperationObjectId($operationObjectId)
    {
        $this->container['operationObjectId'] = $operationObjectId;

        return $this;
    }

    /**
     * Gets operationObjectName
     *
     * @return string|mixed
     */
    public function getOperationObjectName()
    {
        return $this->container['operationObjectName'];
    }

    /**
     * Sets operationObjectName
     *
     * @param string|mixed $operationObjectName operationObjectName
     *
     * @return $this
     */
    public function setOperationObjectName($operationObjectName)
    {
        $this->container['operationObjectName'] = $operationObjectName;

        return $this;
    }

    /**
     * Gets operatorPlatform
     *
     * @return \TencentAds\Model\V3\OperatorPlatformType|mixed
     */
    public function getOperatorPlatform()
    {
        return $this->container['operatorPlatform'];
    }

    /**
     * Sets operatorPlatform
     *
     * @param \TencentAds\Model\V3\OperatorPlatformType|mixed $operatorPlatform operatorPlatform
     *
     * @return $this
     */
    public function setOperatorPlatform($operatorPlatform)
    {
        $this->container['operatorPlatform'] = $operatorPlatform;

        return $this;
    }

    /**
     * Gets operationLog
     *
     * @return string[]|mixed
     */
    public function getOperationLog()
    {
        return $this->container['operationLog'];
    }

    /**
     * Sets operationLog
     *
     * @param string[]|mixed $operationLog operationLog
     *
     * @return $this
     */
    public function setOperationLog($operationLog)
    {
        $this->container['operationLog'] = $operationLog;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return int|mixed
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param int|mixed $createdTime createdTime
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets operationInfoList
     *
     * @return \TencentAds\Model\V3\OperationInfoListStruct[]|mixed
     */
    public function getOperationInfoList()
    {
        return $this->container['operationInfoList'];
    }

    /**
     * Sets operationInfoList
     *
     * @param \TencentAds\Model\V3\OperationInfoListStruct[]|mixed $operationInfoList operationInfoList
     *
     * @return $this
     */
    public function setOperationInfoList($operationInfoList)
    {
        $this->container['operationInfoList'] = $operationInfoList;

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


