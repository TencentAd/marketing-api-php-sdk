<?php
/**
 * PreReviewResultRejectReasonDetailStruct
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
 * PreReviewResultRejectReasonDetailStruct Class Doc Comment
 *
 * @category Class
 * @description 拒绝原因明细
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PreReviewResultRejectReasonDetailStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'pre_review_result_reject_reason_detail_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rejectReasonId' => 'string',
        'rejectReasonContent' => 'string',
        'caseDoc' => 'string',
        'caseContent' => 'string',
        'rejectInfoLocations' => '\TencentAds\Model\V3\PreReviewRejectInfoLocation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rejectReasonId' => null,
        'rejectReasonContent' => null,
        'caseDoc' => null,
        'caseContent' => null,
        'rejectInfoLocations' => null
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
        'rejectReasonId' => 'reject_reason_id',
        'rejectReasonContent' => 'reject_reason_content',
        'caseDoc' => 'case_doc',
        'caseContent' => 'case_content',
        'rejectInfoLocations' => 'reject_info_locations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rejectReasonId' => 'setRejectReasonId',
        'rejectReasonContent' => 'setRejectReasonContent',
        'caseDoc' => 'setCaseDoc',
        'caseContent' => 'setCaseContent',
        'rejectInfoLocations' => 'setRejectInfoLocations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rejectReasonId' => 'getRejectReasonId',
        'rejectReasonContent' => 'getRejectReasonContent',
        'caseDoc' => 'getCaseDoc',
        'caseContent' => 'getCaseContent',
        'rejectInfoLocations' => 'getRejectInfoLocations'
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
        $this->container['rejectReasonId'] = isset($data['rejectReasonId']) ? $data['rejectReasonId'] : null;
        $this->container['rejectReasonContent'] = isset($data['rejectReasonContent']) ? $data['rejectReasonContent'] : null;
        $this->container['caseDoc'] = isset($data['caseDoc']) ? $data['caseDoc'] : null;
        $this->container['caseContent'] = isset($data['caseContent']) ? $data['caseContent'] : null;
        $this->container['rejectInfoLocations'] = isset($data['rejectInfoLocations']) ? $data['rejectInfoLocations'] : null;
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
     * Gets rejectReasonId
     *
     * @return string|mixed
     */
    public function getRejectReasonId()
    {
        return $this->container['rejectReasonId'];
    }

    /**
     * Sets rejectReasonId
     *
     * @param string|mixed $rejectReasonId rejectReasonId
     *
     * @return $this
     */
    public function setRejectReasonId($rejectReasonId)
    {
        $this->container['rejectReasonId'] = $rejectReasonId;

        return $this;
    }

    /**
     * Gets rejectReasonContent
     *
     * @return string|mixed
     */
    public function getRejectReasonContent()
    {
        return $this->container['rejectReasonContent'];
    }

    /**
     * Sets rejectReasonContent
     *
     * @param string|mixed $rejectReasonContent rejectReasonContent
     *
     * @return $this
     */
    public function setRejectReasonContent($rejectReasonContent)
    {
        $this->container['rejectReasonContent'] = $rejectReasonContent;

        return $this;
    }

    /**
     * Gets caseDoc
     *
     * @return string|mixed
     */
    public function getCaseDoc()
    {
        return $this->container['caseDoc'];
    }

    /**
     * Sets caseDoc
     *
     * @param string|mixed $caseDoc caseDoc
     *
     * @return $this
     */
    public function setCaseDoc($caseDoc)
    {
        $this->container['caseDoc'] = $caseDoc;

        return $this;
    }

    /**
     * Gets caseContent
     *
     * @return string|mixed
     */
    public function getCaseContent()
    {
        return $this->container['caseContent'];
    }

    /**
     * Sets caseContent
     *
     * @param string|mixed $caseContent caseContent
     *
     * @return $this
     */
    public function setCaseContent($caseContent)
    {
        $this->container['caseContent'] = $caseContent;

        return $this;
    }

    /**
     * Gets rejectInfoLocations
     *
     * @return \TencentAds\Model\V3\PreReviewRejectInfoLocation[]|mixed
     */
    public function getRejectInfoLocations()
    {
        return $this->container['rejectInfoLocations'];
    }

    /**
     * Sets rejectInfoLocations
     *
     * @param \TencentAds\Model\V3\PreReviewRejectInfoLocation[]|mixed $rejectInfoLocations rejectInfoLocations
     *
     * @return $this
     */
    public function setRejectInfoLocations($rejectInfoLocations)
    {
        $this->container['rejectInfoLocations'] = $rejectInfoLocations;

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


