<?php
/**
 * ElementAppealReviewGetResponseData
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
 * ElementAppealReviewGetResponseData Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ElementAppealReviewGetResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ElementAppealReviewGetResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'dynamicCreativeId' => 'int',
        'componentId' => 'int',
        'elementId' => 'int',
        'elementType' => '\TencentAds\Model\V3\ReviewElementType',
        'elementValue' => 'string',
        'elementFingerPrint' => 'string',
        'appealDemand' => 'string',
        'appealReason' => 'string',
        'historyApprovalComponentId' => 'int',
        'appealResult' => 'string',
        'appealStatus' => '\TencentAds\Model\V3\AppealStatus',
        'description' => 'string',
        'imageList' => 'string[]',
        'replyImageUrlList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'dynamicCreativeId' => 'int64',
        'componentId' => 'int64',
        'elementId' => 'int64',
        'elementType' => null,
        'elementValue' => null,
        'elementFingerPrint' => null,
        'appealDemand' => null,
        'appealReason' => null,
        'historyApprovalComponentId' => 'int64',
        'appealResult' => null,
        'appealStatus' => null,
        'description' => null,
        'imageList' => null,
        'replyImageUrlList' => null
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
        'dynamicCreativeId' => 'dynamic_creative_id',
        'componentId' => 'component_id',
        'elementId' => 'element_id',
        'elementType' => 'element_type',
        'elementValue' => 'element_value',
        'elementFingerPrint' => 'element_finger_print',
        'appealDemand' => 'appeal_demand',
        'appealReason' => 'appeal_reason',
        'historyApprovalComponentId' => 'history_approval_component_id',
        'appealResult' => 'appeal_result',
        'appealStatus' => 'appeal_status',
        'description' => 'description',
        'imageList' => 'image_list',
        'replyImageUrlList' => 'reply_image_url_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'dynamicCreativeId' => 'setDynamicCreativeId',
        'componentId' => 'setComponentId',
        'elementId' => 'setElementId',
        'elementType' => 'setElementType',
        'elementValue' => 'setElementValue',
        'elementFingerPrint' => 'setElementFingerPrint',
        'appealDemand' => 'setAppealDemand',
        'appealReason' => 'setAppealReason',
        'historyApprovalComponentId' => 'setHistoryApprovalComponentId',
        'appealResult' => 'setAppealResult',
        'appealStatus' => 'setAppealStatus',
        'description' => 'setDescription',
        'imageList' => 'setImageList',
        'replyImageUrlList' => 'setReplyImageUrlList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'dynamicCreativeId' => 'getDynamicCreativeId',
        'componentId' => 'getComponentId',
        'elementId' => 'getElementId',
        'elementType' => 'getElementType',
        'elementValue' => 'getElementValue',
        'elementFingerPrint' => 'getElementFingerPrint',
        'appealDemand' => 'getAppealDemand',
        'appealReason' => 'getAppealReason',
        'historyApprovalComponentId' => 'getHistoryApprovalComponentId',
        'appealResult' => 'getAppealResult',
        'appealStatus' => 'getAppealStatus',
        'description' => 'getDescription',
        'imageList' => 'getImageList',
        'replyImageUrlList' => 'getReplyImageUrlList'
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
        $this->container['dynamicCreativeId'] = isset($data['dynamicCreativeId']) ? $data['dynamicCreativeId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['elementId'] = isset($data['elementId']) ? $data['elementId'] : null;
        $this->container['elementType'] = isset($data['elementType']) ? $data['elementType'] : null;
        $this->container['elementValue'] = isset($data['elementValue']) ? $data['elementValue'] : null;
        $this->container['elementFingerPrint'] = isset($data['elementFingerPrint']) ? $data['elementFingerPrint'] : null;
        $this->container['appealDemand'] = isset($data['appealDemand']) ? $data['appealDemand'] : null;
        $this->container['appealReason'] = isset($data['appealReason']) ? $data['appealReason'] : null;
        $this->container['historyApprovalComponentId'] = isset($data['historyApprovalComponentId']) ? $data['historyApprovalComponentId'] : null;
        $this->container['appealResult'] = isset($data['appealResult']) ? $data['appealResult'] : null;
        $this->container['appealStatus'] = isset($data['appealStatus']) ? $data['appealStatus'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['imageList'] = isset($data['imageList']) ? $data['imageList'] : null;
        $this->container['replyImageUrlList'] = isset($data['replyImageUrlList']) ? $data['replyImageUrlList'] : null;
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
     * Gets componentId
     *
     * @return int|mixed
     */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
     * Sets componentId
     *
     * @param int|mixed $componentId componentId
     *
     * @return $this
     */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;

        return $this;
    }

    /**
     * Gets elementId
     *
     * @return int|mixed
     */
    public function getElementId()
    {
        return $this->container['elementId'];
    }

    /**
     * Sets elementId
     *
     * @param int|mixed $elementId elementId
     *
     * @return $this
     */
    public function setElementId($elementId)
    {
        $this->container['elementId'] = $elementId;

        return $this;
    }

    /**
     * Gets elementType
     *
     * @return \TencentAds\Model\V3\ReviewElementType|mixed
     */
    public function getElementType()
    {
        return $this->container['elementType'];
    }

    /**
     * Sets elementType
     *
     * @param \TencentAds\Model\V3\ReviewElementType|mixed $elementType elementType
     *
     * @return $this
     */
    public function setElementType($elementType)
    {
        $this->container['elementType'] = $elementType;

        return $this;
    }

    /**
     * Gets elementValue
     *
     * @return string|mixed
     */
    public function getElementValue()
    {
        return $this->container['elementValue'];
    }

    /**
     * Sets elementValue
     *
     * @param string|mixed $elementValue elementValue
     *
     * @return $this
     */
    public function setElementValue($elementValue)
    {
        $this->container['elementValue'] = $elementValue;

        return $this;
    }

    /**
     * Gets elementFingerPrint
     *
     * @return string|mixed
     */
    public function getElementFingerPrint()
    {
        return $this->container['elementFingerPrint'];
    }

    /**
     * Sets elementFingerPrint
     *
     * @param string|mixed $elementFingerPrint elementFingerPrint
     *
     * @return $this
     */
    public function setElementFingerPrint($elementFingerPrint)
    {
        $this->container['elementFingerPrint'] = $elementFingerPrint;

        return $this;
    }

    /**
     * Gets appealDemand
     *
     * @return string|mixed
     */
    public function getAppealDemand()
    {
        return $this->container['appealDemand'];
    }

    /**
     * Sets appealDemand
     *
     * @param string|mixed $appealDemand appealDemand
     *
     * @return $this
     */
    public function setAppealDemand($appealDemand)
    {
        $this->container['appealDemand'] = $appealDemand;

        return $this;
    }

    /**
     * Gets appealReason
     *
     * @return string|mixed
     */
    public function getAppealReason()
    {
        return $this->container['appealReason'];
    }

    /**
     * Sets appealReason
     *
     * @param string|mixed $appealReason appealReason
     *
     * @return $this
     */
    public function setAppealReason($appealReason)
    {
        $this->container['appealReason'] = $appealReason;

        return $this;
    }

    /**
     * Gets historyApprovalComponentId
     *
     * @return int|mixed
     */
    public function getHistoryApprovalComponentId()
    {
        return $this->container['historyApprovalComponentId'];
    }

    /**
     * Sets historyApprovalComponentId
     *
     * @param int|mixed $historyApprovalComponentId historyApprovalComponentId
     *
     * @return $this
     */
    public function setHistoryApprovalComponentId($historyApprovalComponentId)
    {
        $this->container['historyApprovalComponentId'] = $historyApprovalComponentId;

        return $this;
    }

    /**
     * Gets appealResult
     *
     * @return string|mixed
     */
    public function getAppealResult()
    {
        return $this->container['appealResult'];
    }

    /**
     * Sets appealResult
     *
     * @param string|mixed $appealResult appealResult
     *
     * @return $this
     */
    public function setAppealResult($appealResult)
    {
        $this->container['appealResult'] = $appealResult;

        return $this;
    }

    /**
     * Gets appealStatus
     *
     * @return \TencentAds\Model\V3\AppealStatus|mixed
     */
    public function getAppealStatus()
    {
        return $this->container['appealStatus'];
    }

    /**
     * Sets appealStatus
     *
     * @param \TencentAds\Model\V3\AppealStatus|mixed $appealStatus appealStatus
     *
     * @return $this
     */
    public function setAppealStatus($appealStatus)
    {
        $this->container['appealStatus'] = $appealStatus;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|mixed
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|mixed $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets imageList
     *
     * @return string[]|mixed
     */
    public function getImageList()
    {
        return $this->container['imageList'];
    }

    /**
     * Sets imageList
     *
     * @param string[]|mixed $imageList imageList
     *
     * @return $this
     */
    public function setImageList($imageList)
    {
        $this->container['imageList'] = $imageList;

        return $this;
    }

    /**
     * Gets replyImageUrlList
     *
     * @return string[]|mixed
     */
    public function getReplyImageUrlList()
    {
        return $this->container['replyImageUrlList'];
    }

    /**
     * Sets replyImageUrlList
     *
     * @param string[]|mixed $replyImageUrlList replyImageUrlList
     *
     * @return $this
     */
    public function setReplyImageUrlList($replyImageUrlList)
    {
        $this->container['replyImageUrlList'] = $replyImageUrlList;

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

