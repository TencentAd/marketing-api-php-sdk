<?php
/**
 * PageStruct
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
 * PageStruct Class Doc Comment
 *
 * @category Class
 * @description 获取落地页列表落地页数据结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PageStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'page_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pageId' => 'int',
        'pageServiceId' => 'string',
        'pageName' => 'string',
        'pageType' => '\TencentAds\Model\V3\XJPageType',
        'pagePublishStatus' => '\TencentAds\Model\V3\PagePublishStatus',
        'pageStatus' => '\TencentAds\Model\V3\PageAuditStatus',
        'pageLastModifyTime' => 'string',
        'pageOwnerId' => 'int',
        'publishUrl' => 'string',
        'rejectReason' => 'string',
        'playableType' => '\TencentAds\Model\V3\XJPlayableType',
        'publishAppId' => '\TencentAds\Model\V3\PublishAppId',
        'unpublishAppId' => '\TencentAds\Model\V3\UnpublishAppId'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pageId' => 'int64',
        'pageServiceId' => null,
        'pageName' => null,
        'pageType' => null,
        'pagePublishStatus' => null,
        'pageStatus' => null,
        'pageLastModifyTime' => null,
        'pageOwnerId' => 'int64',
        'publishUrl' => null,
        'rejectReason' => null,
        'playableType' => null,
        'publishAppId' => null,
        'unpublishAppId' => null
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
        'pageId' => 'page_id',
        'pageServiceId' => 'page_service_id',
        'pageName' => 'page_name',
        'pageType' => 'page_type',
        'pagePublishStatus' => 'page_publish_status',
        'pageStatus' => 'page_status',
        'pageLastModifyTime' => 'page_last_modify_time',
        'pageOwnerId' => 'page_owner_id',
        'publishUrl' => 'publish_url',
        'rejectReason' => 'reject_reason',
        'playableType' => 'playable_type',
        'publishAppId' => 'publish_app_id',
        'unpublishAppId' => 'unpublish_app_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageId' => 'setPageId',
        'pageServiceId' => 'setPageServiceId',
        'pageName' => 'setPageName',
        'pageType' => 'setPageType',
        'pagePublishStatus' => 'setPagePublishStatus',
        'pageStatus' => 'setPageStatus',
        'pageLastModifyTime' => 'setPageLastModifyTime',
        'pageOwnerId' => 'setPageOwnerId',
        'publishUrl' => 'setPublishUrl',
        'rejectReason' => 'setRejectReason',
        'playableType' => 'setPlayableType',
        'publishAppId' => 'setPublishAppId',
        'unpublishAppId' => 'setUnpublishAppId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageId' => 'getPageId',
        'pageServiceId' => 'getPageServiceId',
        'pageName' => 'getPageName',
        'pageType' => 'getPageType',
        'pagePublishStatus' => 'getPagePublishStatus',
        'pageStatus' => 'getPageStatus',
        'pageLastModifyTime' => 'getPageLastModifyTime',
        'pageOwnerId' => 'getPageOwnerId',
        'publishUrl' => 'getPublishUrl',
        'rejectReason' => 'getRejectReason',
        'playableType' => 'getPlayableType',
        'publishAppId' => 'getPublishAppId',
        'unpublishAppId' => 'getUnpublishAppId'
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
        $this->container['pageId'] = isset($data['pageId']) ? $data['pageId'] : null;
        $this->container['pageServiceId'] = isset($data['pageServiceId']) ? $data['pageServiceId'] : null;
        $this->container['pageName'] = isset($data['pageName']) ? $data['pageName'] : null;
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['pagePublishStatus'] = isset($data['pagePublishStatus']) ? $data['pagePublishStatus'] : null;
        $this->container['pageStatus'] = isset($data['pageStatus']) ? $data['pageStatus'] : null;
        $this->container['pageLastModifyTime'] = isset($data['pageLastModifyTime']) ? $data['pageLastModifyTime'] : null;
        $this->container['pageOwnerId'] = isset($data['pageOwnerId']) ? $data['pageOwnerId'] : null;
        $this->container['publishUrl'] = isset($data['publishUrl']) ? $data['publishUrl'] : null;
        $this->container['rejectReason'] = isset($data['rejectReason']) ? $data['rejectReason'] : null;
        $this->container['playableType'] = isset($data['playableType']) ? $data['playableType'] : null;
        $this->container['publishAppId'] = isset($data['publishAppId']) ? $data['publishAppId'] : null;
        $this->container['unpublishAppId'] = isset($data['unpublishAppId']) ? $data['unpublishAppId'] : null;
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
     * Gets pageId
     *
     * @return int|mixed
     */
    public function getPageId()
    {
        return $this->container['pageId'];
    }

    /**
     * Sets pageId
     *
     * @param int|mixed $pageId pageId
     *
     * @return $this
     */
    public function setPageId($pageId)
    {
        $this->container['pageId'] = $pageId;

        return $this;
    }

    /**
     * Gets pageServiceId
     *
     * @return string|mixed
     */
    public function getPageServiceId()
    {
        return $this->container['pageServiceId'];
    }

    /**
     * Sets pageServiceId
     *
     * @param string|mixed $pageServiceId pageServiceId
     *
     * @return $this
     */
    public function setPageServiceId($pageServiceId)
    {
        $this->container['pageServiceId'] = $pageServiceId;

        return $this;
    }

    /**
     * Gets pageName
     *
     * @return string|mixed
     */
    public function getPageName()
    {
        return $this->container['pageName'];
    }

    /**
     * Sets pageName
     *
     * @param string|mixed $pageName pageName
     *
     * @return $this
     */
    public function setPageName($pageName)
    {
        $this->container['pageName'] = $pageName;

        return $this;
    }

    /**
     * Gets pageType
     *
     * @return \TencentAds\Model\V3\XJPageType|mixed
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\V3\XJPageType|mixed $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

        return $this;
    }

    /**
     * Gets pagePublishStatus
     *
     * @return \TencentAds\Model\V3\PagePublishStatus|mixed
     */
    public function getPagePublishStatus()
    {
        return $this->container['pagePublishStatus'];
    }

    /**
     * Sets pagePublishStatus
     *
     * @param \TencentAds\Model\V3\PagePublishStatus|mixed $pagePublishStatus pagePublishStatus
     *
     * @return $this
     */
    public function setPagePublishStatus($pagePublishStatus)
    {
        $this->container['pagePublishStatus'] = $pagePublishStatus;

        return $this;
    }

    /**
     * Gets pageStatus
     *
     * @return \TencentAds\Model\V3\PageAuditStatus|mixed
     */
    public function getPageStatus()
    {
        return $this->container['pageStatus'];
    }

    /**
     * Sets pageStatus
     *
     * @param \TencentAds\Model\V3\PageAuditStatus|mixed $pageStatus pageStatus
     *
     * @return $this
     */
    public function setPageStatus($pageStatus)
    {
        $this->container['pageStatus'] = $pageStatus;

        return $this;
    }

    /**
     * Gets pageLastModifyTime
     *
     * @return string|mixed
     */
    public function getPageLastModifyTime()
    {
        return $this->container['pageLastModifyTime'];
    }

    /**
     * Sets pageLastModifyTime
     *
     * @param string|mixed $pageLastModifyTime pageLastModifyTime
     *
     * @return $this
     */
    public function setPageLastModifyTime($pageLastModifyTime)
    {
        $this->container['pageLastModifyTime'] = $pageLastModifyTime;

        return $this;
    }

    /**
     * Gets pageOwnerId
     *
     * @return int|mixed
     */
    public function getPageOwnerId()
    {
        return $this->container['pageOwnerId'];
    }

    /**
     * Sets pageOwnerId
     *
     * @param int|mixed $pageOwnerId pageOwnerId
     *
     * @return $this
     */
    public function setPageOwnerId($pageOwnerId)
    {
        $this->container['pageOwnerId'] = $pageOwnerId;

        return $this;
    }

    /**
     * Gets publishUrl
     *
     * @return string|mixed
     */
    public function getPublishUrl()
    {
        return $this->container['publishUrl'];
    }

    /**
     * Sets publishUrl
     *
     * @param string|mixed $publishUrl publishUrl
     *
     * @return $this
     */
    public function setPublishUrl($publishUrl)
    {
        $this->container['publishUrl'] = $publishUrl;

        return $this;
    }

    /**
     * Gets rejectReason
     *
     * @return string|mixed
     */
    public function getRejectReason()
    {
        return $this->container['rejectReason'];
    }

    /**
     * Sets rejectReason
     *
     * @param string|mixed $rejectReason rejectReason
     *
     * @return $this
     */
    public function setRejectReason($rejectReason)
    {
        $this->container['rejectReason'] = $rejectReason;

        return $this;
    }

    /**
     * Gets playableType
     *
     * @return \TencentAds\Model\V3\XJPlayableType|mixed
     */
    public function getPlayableType()
    {
        return $this->container['playableType'];
    }

    /**
     * Sets playableType
     *
     * @param \TencentAds\Model\V3\XJPlayableType|mixed $playableType playableType
     *
     * @return $this
     */
    public function setPlayableType($playableType)
    {
        $this->container['playableType'] = $playableType;

        return $this;
    }

    /**
     * Gets publishAppId
     *
     * @return \TencentAds\Model\V3\PublishAppId|mixed
     */
    public function getPublishAppId()
    {
        return $this->container['publishAppId'];
    }

    /**
     * Sets publishAppId
     *
     * @param \TencentAds\Model\V3\PublishAppId|mixed $publishAppId publishAppId
     *
     * @return $this
     */
    public function setPublishAppId($publishAppId)
    {
        $this->container['publishAppId'] = $publishAppId;

        return $this;
    }

    /**
     * Gets unpublishAppId
     *
     * @return \TencentAds\Model\V3\UnpublishAppId|mixed
     */
    public function getUnpublishAppId()
    {
        return $this->container['unpublishAppId'];
    }

    /**
     * Sets unpublishAppId
     *
     * @param \TencentAds\Model\V3\UnpublishAppId|mixed $unpublishAppId unpublishAppId
     *
     * @return $this
     */
    public function setUnpublishAppId($unpublishAppId)
    {
        $this->container['unpublishAppId'] = $unpublishAppId;

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


