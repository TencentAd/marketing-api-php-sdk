<?php
/**
 * CallListStruct
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
 * CallListStruct Class Doc Comment
 *
 * @category Class
 * @description 通话记录结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'call_list_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'callId' => 'string',
        'accountId' => 'int',
        'leadsId' => 'int',
        'caller' => 'string',
        'callee' => 'string',
        'callDirection' => 'string',
        'duration' => 'int',
        'callStartTime' => 'string',
        'callEndTime' => 'string',
        'ringTime' => 'string',
        'answerTime' => 'string',
        'endStatus' => 'int',
        'callRecordUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'callId' => null,
        'accountId' => 'int64',
        'leadsId' => 'int64',
        'caller' => null,
        'callee' => null,
        'callDirection' => null,
        'duration' => 'int64',
        'callStartTime' => null,
        'callEndTime' => null,
        'ringTime' => null,
        'answerTime' => null,
        'endStatus' => 'int64',
        'callRecordUrl' => null
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
        'callId' => 'call_id',
        'accountId' => 'account_id',
        'leadsId' => 'leads_id',
        'caller' => 'caller',
        'callee' => 'callee',
        'callDirection' => 'call_direction',
        'duration' => 'duration',
        'callStartTime' => 'call_start_time',
        'callEndTime' => 'call_end_time',
        'ringTime' => 'ring_time',
        'answerTime' => 'answer_time',
        'endStatus' => 'end_status',
        'callRecordUrl' => 'call_record_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callId' => 'setCallId',
        'accountId' => 'setAccountId',
        'leadsId' => 'setLeadsId',
        'caller' => 'setCaller',
        'callee' => 'setCallee',
        'callDirection' => 'setCallDirection',
        'duration' => 'setDuration',
        'callStartTime' => 'setCallStartTime',
        'callEndTime' => 'setCallEndTime',
        'ringTime' => 'setRingTime',
        'answerTime' => 'setAnswerTime',
        'endStatus' => 'setEndStatus',
        'callRecordUrl' => 'setCallRecordUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callId' => 'getCallId',
        'accountId' => 'getAccountId',
        'leadsId' => 'getLeadsId',
        'caller' => 'getCaller',
        'callee' => 'getCallee',
        'callDirection' => 'getCallDirection',
        'duration' => 'getDuration',
        'callStartTime' => 'getCallStartTime',
        'callEndTime' => 'getCallEndTime',
        'ringTime' => 'getRingTime',
        'answerTime' => 'getAnswerTime',
        'endStatus' => 'getEndStatus',
        'callRecordUrl' => 'getCallRecordUrl'
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
        $this->container['callId'] = isset($data['callId']) ? $data['callId'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['leadsId'] = isset($data['leadsId']) ? $data['leadsId'] : null;
        $this->container['caller'] = isset($data['caller']) ? $data['caller'] : null;
        $this->container['callee'] = isset($data['callee']) ? $data['callee'] : null;
        $this->container['callDirection'] = isset($data['callDirection']) ? $data['callDirection'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['callStartTime'] = isset($data['callStartTime']) ? $data['callStartTime'] : null;
        $this->container['callEndTime'] = isset($data['callEndTime']) ? $data['callEndTime'] : null;
        $this->container['ringTime'] = isset($data['ringTime']) ? $data['ringTime'] : null;
        $this->container['answerTime'] = isset($data['answerTime']) ? $data['answerTime'] : null;
        $this->container['endStatus'] = isset($data['endStatus']) ? $data['endStatus'] : null;
        $this->container['callRecordUrl'] = isset($data['callRecordUrl']) ? $data['callRecordUrl'] : null;
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
     * Gets callId
     *
     * @return string|mixed
     */
    public function getCallId()
    {
        return $this->container['callId'];
    }

    /**
     * Sets callId
     *
     * @param string|mixed $callId callId
     *
     * @return $this
     */
    public function setCallId($callId)
    {
        $this->container['callId'] = $callId;

        return $this;
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
     * Gets caller
     *
     * @return string|mixed
     */
    public function getCaller()
    {
        return $this->container['caller'];
    }

    /**
     * Sets caller
     *
     * @param string|mixed $caller caller
     *
     * @return $this
     */
    public function setCaller($caller)
    {
        $this->container['caller'] = $caller;

        return $this;
    }

    /**
     * Gets callee
     *
     * @return string|mixed
     */
    public function getCallee()
    {
        return $this->container['callee'];
    }

    /**
     * Sets callee
     *
     * @param string|mixed $callee callee
     *
     * @return $this
     */
    public function setCallee($callee)
    {
        $this->container['callee'] = $callee;

        return $this;
    }

    /**
     * Gets callDirection
     *
     * @return string|mixed
     */
    public function getCallDirection()
    {
        return $this->container['callDirection'];
    }

    /**
     * Sets callDirection
     *
     * @param string|mixed $callDirection callDirection
     *
     * @return $this
     */
    public function setCallDirection($callDirection)
    {
        $this->container['callDirection'] = $callDirection;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|mixed
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|mixed $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets callStartTime
     *
     * @return string|mixed
     */
    public function getCallStartTime()
    {
        return $this->container['callStartTime'];
    }

    /**
     * Sets callStartTime
     *
     * @param string|mixed $callStartTime callStartTime
     *
     * @return $this
     */
    public function setCallStartTime($callStartTime)
    {
        $this->container['callStartTime'] = $callStartTime;

        return $this;
    }

    /**
     * Gets callEndTime
     *
     * @return string|mixed
     */
    public function getCallEndTime()
    {
        return $this->container['callEndTime'];
    }

    /**
     * Sets callEndTime
     *
     * @param string|mixed $callEndTime callEndTime
     *
     * @return $this
     */
    public function setCallEndTime($callEndTime)
    {
        $this->container['callEndTime'] = $callEndTime;

        return $this;
    }

    /**
     * Gets ringTime
     *
     * @return string|mixed
     */
    public function getRingTime()
    {
        return $this->container['ringTime'];
    }

    /**
     * Sets ringTime
     *
     * @param string|mixed $ringTime ringTime
     *
     * @return $this
     */
    public function setRingTime($ringTime)
    {
        $this->container['ringTime'] = $ringTime;

        return $this;
    }

    /**
     * Gets answerTime
     *
     * @return string|mixed
     */
    public function getAnswerTime()
    {
        return $this->container['answerTime'];
    }

    /**
     * Sets answerTime
     *
     * @param string|mixed $answerTime answerTime
     *
     * @return $this
     */
    public function setAnswerTime($answerTime)
    {
        $this->container['answerTime'] = $answerTime;

        return $this;
    }

    /**
     * Gets endStatus
     *
     * @return int|mixed
     */
    public function getEndStatus()
    {
        return $this->container['endStatus'];
    }

    /**
     * Sets endStatus
     *
     * @param int|mixed $endStatus endStatus
     *
     * @return $this
     */
    public function setEndStatus($endStatus)
    {
        $this->container['endStatus'] = $endStatus;

        return $this;
    }

    /**
     * Gets callRecordUrl
     *
     * @return string|mixed
     */
    public function getCallRecordUrl()
    {
        return $this->container['callRecordUrl'];
    }

    /**
     * Sets callRecordUrl
     *
     * @param string|mixed $callRecordUrl callRecordUrl
     *
     * @return $this
     */
    public function setCallRecordUrl($callRecordUrl)
    {
        $this->container['callRecordUrl'] = $callRecordUrl;

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


