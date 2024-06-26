<?php
/**
 * ComponentElementUrgeReviewAddResponseData
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
 * ComponentElementUrgeReviewAddResponseData Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComponentElementUrgeReviewAddResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ComponentElementUrgeReviewAddResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'urgeResult' => '\TencentAds\Model\V3\UrgeResult',
        'urgeFailedReason' => '\TencentAds\Model\V3\UrgeFailedReason',
        'reasonMsg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'urgeResult' => null,
        'urgeFailedReason' => null,
        'reasonMsg' => null
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
        'urgeResult' => 'urge_result',
        'urgeFailedReason' => 'urge_failed_reason',
        'reasonMsg' => 'reason_msg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'urgeResult' => 'setUrgeResult',
        'urgeFailedReason' => 'setUrgeFailedReason',
        'reasonMsg' => 'setReasonMsg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'urgeResult' => 'getUrgeResult',
        'urgeFailedReason' => 'getUrgeFailedReason',
        'reasonMsg' => 'getReasonMsg'
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
        $this->container['urgeResult'] = isset($data['urgeResult']) ? $data['urgeResult'] : null;
        $this->container['urgeFailedReason'] = isset($data['urgeFailedReason']) ? $data['urgeFailedReason'] : null;
        $this->container['reasonMsg'] = isset($data['reasonMsg']) ? $data['reasonMsg'] : null;
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
     * Gets urgeResult
     *
     * @return \TencentAds\Model\V3\UrgeResult|mixed
     */
    public function getUrgeResult()
    {
        return $this->container['urgeResult'];
    }

    /**
     * Sets urgeResult
     *
     * @param \TencentAds\Model\V3\UrgeResult|mixed $urgeResult urgeResult
     *
     * @return $this
     */
    public function setUrgeResult($urgeResult)
    {
        $this->container['urgeResult'] = $urgeResult;

        return $this;
    }

    /**
     * Gets urgeFailedReason
     *
     * @return \TencentAds\Model\V3\UrgeFailedReason|mixed
     */
    public function getUrgeFailedReason()
    {
        return $this->container['urgeFailedReason'];
    }

    /**
     * Sets urgeFailedReason
     *
     * @param \TencentAds\Model\V3\UrgeFailedReason|mixed $urgeFailedReason urgeFailedReason
     *
     * @return $this
     */
    public function setUrgeFailedReason($urgeFailedReason)
    {
        $this->container['urgeFailedReason'] = $urgeFailedReason;

        return $this;
    }

    /**
     * Gets reasonMsg
     *
     * @return string|mixed
     */
    public function getReasonMsg()
    {
        return $this->container['reasonMsg'];
    }

    /**
     * Sets reasonMsg
     *
     * @param string|mixed $reasonMsg reasonMsg
     *
     * @return $this
     */
    public function setReasonMsg($reasonMsg)
    {
        $this->container['reasonMsg'] = $reasonMsg;

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


