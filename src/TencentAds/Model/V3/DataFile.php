<?php
/**
 * DataFile
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
 * DataFile Class Doc Comment
 *
 * @category Class
 * @description data_file返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataFile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'data_file';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'audienceId' => 'int',
        'customAudienceFileId' => 'int',
        'name' => 'string',
        'userIdType' => '\TencentAds\Model\V3\UserIdType',
        'operationType' => '\TencentAds\Model\V3\OperationType',
        'openAppId' => 'string',
        'processStatus' => '\TencentAds\Model\V3\FileProcessStatus',
        'processCode' => 'int',
        'errorMessage' => 'string',
        'lineCount' => 'int',
        'validLineCount' => 'int',
        'userCount' => 'int',
        'size' => 'int',
        'createdTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'audienceId' => 'int64',
        'customAudienceFileId' => 'int64',
        'name' => null,
        'userIdType' => null,
        'operationType' => null,
        'openAppId' => null,
        'processStatus' => null,
        'processCode' => 'int64',
        'errorMessage' => null,
        'lineCount' => 'int64',
        'validLineCount' => 'int64',
        'userCount' => 'int64',
        'size' => 'int64',
        'createdTime' => null
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
        'audienceId' => 'audience_id',
        'customAudienceFileId' => 'custom_audience_file_id',
        'name' => 'name',
        'userIdType' => 'user_id_type',
        'operationType' => 'operation_type',
        'openAppId' => 'open_app_id',
        'processStatus' => 'process_status',
        'processCode' => 'process_code',
        'errorMessage' => 'error_message',
        'lineCount' => 'line_count',
        'validLineCount' => 'valid_line_count',
        'userCount' => 'user_count',
        'size' => 'size',
        'createdTime' => 'created_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audienceId' => 'setAudienceId',
        'customAudienceFileId' => 'setCustomAudienceFileId',
        'name' => 'setName',
        'userIdType' => 'setUserIdType',
        'operationType' => 'setOperationType',
        'openAppId' => 'setOpenAppId',
        'processStatus' => 'setProcessStatus',
        'processCode' => 'setProcessCode',
        'errorMessage' => 'setErrorMessage',
        'lineCount' => 'setLineCount',
        'validLineCount' => 'setValidLineCount',
        'userCount' => 'setUserCount',
        'size' => 'setSize',
        'createdTime' => 'setCreatedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audienceId' => 'getAudienceId',
        'customAudienceFileId' => 'getCustomAudienceFileId',
        'name' => 'getName',
        'userIdType' => 'getUserIdType',
        'operationType' => 'getOperationType',
        'openAppId' => 'getOpenAppId',
        'processStatus' => 'getProcessStatus',
        'processCode' => 'getProcessCode',
        'errorMessage' => 'getErrorMessage',
        'lineCount' => 'getLineCount',
        'validLineCount' => 'getValidLineCount',
        'userCount' => 'getUserCount',
        'size' => 'getSize',
        'createdTime' => 'getCreatedTime'
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
        $this->container['audienceId'] = isset($data['audienceId']) ? $data['audienceId'] : null;
        $this->container['customAudienceFileId'] = isset($data['customAudienceFileId']) ? $data['customAudienceFileId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['userIdType'] = isset($data['userIdType']) ? $data['userIdType'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['openAppId'] = isset($data['openAppId']) ? $data['openAppId'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['processCode'] = isset($data['processCode']) ? $data['processCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['lineCount'] = isset($data['lineCount']) ? $data['lineCount'] : null;
        $this->container['validLineCount'] = isset($data['validLineCount']) ? $data['validLineCount'] : null;
        $this->container['userCount'] = isset($data['userCount']) ? $data['userCount'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
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
     * Gets audienceId
     *
     * @return int|mixed
     */
    public function getAudienceId()
    {
        return $this->container['audienceId'];
    }

    /**
     * Sets audienceId
     *
     * @param int|mixed $audienceId audienceId
     *
     * @return $this
     */
    public function setAudienceId($audienceId)
    {
        $this->container['audienceId'] = $audienceId;

        return $this;
    }

    /**
     * Gets customAudienceFileId
     *
     * @return int|mixed
     */
    public function getCustomAudienceFileId()
    {
        return $this->container['customAudienceFileId'];
    }

    /**
     * Sets customAudienceFileId
     *
     * @param int|mixed $customAudienceFileId customAudienceFileId
     *
     * @return $this
     */
    public function setCustomAudienceFileId($customAudienceFileId)
    {
        $this->container['customAudienceFileId'] = $customAudienceFileId;

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
     * Gets userIdType
     *
     * @return \TencentAds\Model\V3\UserIdType|mixed
     */
    public function getUserIdType()
    {
        return $this->container['userIdType'];
    }

    /**
     * Sets userIdType
     *
     * @param \TencentAds\Model\V3\UserIdType|mixed $userIdType userIdType
     *
     * @return $this
     */
    public function setUserIdType($userIdType)
    {
        $this->container['userIdType'] = $userIdType;

        return $this;
    }

    /**
     * Gets operationType
     *
     * @return \TencentAds\Model\V3\OperationType|mixed
     */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
     * Sets operationType
     *
     * @param \TencentAds\Model\V3\OperationType|mixed $operationType operationType
     *
     * @return $this
     */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;

        return $this;
    }

    /**
     * Gets openAppId
     *
     * @return string|mixed
     */
    public function getOpenAppId()
    {
        return $this->container['openAppId'];
    }

    /**
     * Sets openAppId
     *
     * @param string|mixed $openAppId openAppId
     *
     * @return $this
     */
    public function setOpenAppId($openAppId)
    {
        $this->container['openAppId'] = $openAppId;

        return $this;
    }

    /**
     * Gets processStatus
     *
     * @return \TencentAds\Model\V3\FileProcessStatus|mixed
     */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
     * Sets processStatus
     *
     * @param \TencentAds\Model\V3\FileProcessStatus|mixed $processStatus processStatus
     *
     * @return $this
     */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;

        return $this;
    }

    /**
     * Gets processCode
     *
     * @return int|mixed
     */
    public function getProcessCode()
    {
        return $this->container['processCode'];
    }

    /**
     * Sets processCode
     *
     * @param int|mixed $processCode processCode
     *
     * @return $this
     */
    public function setProcessCode($processCode)
    {
        $this->container['processCode'] = $processCode;

        return $this;
    }

    /**
     * Gets errorMessage
     *
     * @return string|mixed
     */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
     * Sets errorMessage
     *
     * @param string|mixed $errorMessage errorMessage
     *
     * @return $this
     */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;

        return $this;
    }

    /**
     * Gets lineCount
     *
     * @return int|mixed
     */
    public function getLineCount()
    {
        return $this->container['lineCount'];
    }

    /**
     * Sets lineCount
     *
     * @param int|mixed $lineCount lineCount
     *
     * @return $this
     */
    public function setLineCount($lineCount)
    {
        $this->container['lineCount'] = $lineCount;

        return $this;
    }

    /**
     * Gets validLineCount
     *
     * @return int|mixed
     */
    public function getValidLineCount()
    {
        return $this->container['validLineCount'];
    }

    /**
     * Sets validLineCount
     *
     * @param int|mixed $validLineCount validLineCount
     *
     * @return $this
     */
    public function setValidLineCount($validLineCount)
    {
        $this->container['validLineCount'] = $validLineCount;

        return $this;
    }

    /**
     * Gets userCount
     *
     * @return int|mixed
     */
    public function getUserCount()
    {
        return $this->container['userCount'];
    }

    /**
     * Sets userCount
     *
     * @param int|mixed $userCount userCount
     *
     * @return $this
     */
    public function setUserCount($userCount)
    {
        $this->container['userCount'] = $userCount;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|mixed
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|mixed $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return string|mixed
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param string|mixed $createdTime createdTime
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

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


