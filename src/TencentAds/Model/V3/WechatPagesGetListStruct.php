<?php
/**
 * WechatPagesGetListStruct
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
 * WechatPagesGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatPagesGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WechatPagesGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pageId' => 'int',
        'pageName' => 'string',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'pageTemplateId' => 'int',
        'pageElements' => '\TencentAds\Model\V3\PageElementsStruct[]',
        'shareContentSpec' => '\TencentAds\Model\V3\ShareContentSpec',
        'previewUrl' => 'string',
        'pageType' => '\TencentAds\Model\V3\PageTypeRead',
        'sourceType' => '\TencentAds\Model\V3\WechatPageSourceType',
        'videoResourceStatus' => '\TencentAds\Model\V3\WechatPageResourceStatus',
        'canvasType' => '\TencentAds\Model\V3\CanvasType',
        'ownerUid' => 'int',
        'pageStatus' => '\TencentAds\Model\V3\PageStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pageId' => 'int64',
        'pageName' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'pageTemplateId' => 'int64',
        'pageElements' => null,
        'shareContentSpec' => null,
        'previewUrl' => null,
        'pageType' => null,
        'sourceType' => null,
        'videoResourceStatus' => null,
        'canvasType' => null,
        'ownerUid' => 'int64',
        'pageStatus' => null
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
        'pageName' => 'page_name',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'pageTemplateId' => 'page_template_id',
        'pageElements' => 'page_elements',
        'shareContentSpec' => 'share_content_spec',
        'previewUrl' => 'preview_url',
        'pageType' => 'page_type',
        'sourceType' => 'source_type',
        'videoResourceStatus' => 'video_resource_status',
        'canvasType' => 'canvas_type',
        'ownerUid' => 'owner_uid',
        'pageStatus' => 'page_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageId' => 'setPageId',
        'pageName' => 'setPageName',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'pageTemplateId' => 'setPageTemplateId',
        'pageElements' => 'setPageElements',
        'shareContentSpec' => 'setShareContentSpec',
        'previewUrl' => 'setPreviewUrl',
        'pageType' => 'setPageType',
        'sourceType' => 'setSourceType',
        'videoResourceStatus' => 'setVideoResourceStatus',
        'canvasType' => 'setCanvasType',
        'ownerUid' => 'setOwnerUid',
        'pageStatus' => 'setPageStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageId' => 'getPageId',
        'pageName' => 'getPageName',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'pageTemplateId' => 'getPageTemplateId',
        'pageElements' => 'getPageElements',
        'shareContentSpec' => 'getShareContentSpec',
        'previewUrl' => 'getPreviewUrl',
        'pageType' => 'getPageType',
        'sourceType' => 'getSourceType',
        'videoResourceStatus' => 'getVideoResourceStatus',
        'canvasType' => 'getCanvasType',
        'ownerUid' => 'getOwnerUid',
        'pageStatus' => 'getPageStatus'
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
        $this->container['pageName'] = isset($data['pageName']) ? $data['pageName'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['pageTemplateId'] = isset($data['pageTemplateId']) ? $data['pageTemplateId'] : null;
        $this->container['pageElements'] = isset($data['pageElements']) ? $data['pageElements'] : null;
        $this->container['shareContentSpec'] = isset($data['shareContentSpec']) ? $data['shareContentSpec'] : null;
        $this->container['previewUrl'] = isset($data['previewUrl']) ? $data['previewUrl'] : null;
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['videoResourceStatus'] = isset($data['videoResourceStatus']) ? $data['videoResourceStatus'] : null;
        $this->container['canvasType'] = isset($data['canvasType']) ? $data['canvasType'] : null;
        $this->container['ownerUid'] = isset($data['ownerUid']) ? $data['ownerUid'] : null;
        $this->container['pageStatus'] = isset($data['pageStatus']) ? $data['pageStatus'] : null;
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
     * Gets lastModifiedTime
     *
     * @return int|mixed
     */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
     * Sets lastModifiedTime
     *
     * @param int|mixed $lastModifiedTime lastModifiedTime
     *
     * @return $this
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;

        return $this;
    }

    /**
     * Gets pageTemplateId
     *
     * @return int|mixed
     */
    public function getPageTemplateId()
    {
        return $this->container['pageTemplateId'];
    }

    /**
     * Sets pageTemplateId
     *
     * @param int|mixed $pageTemplateId pageTemplateId
     *
     * @return $this
     */
    public function setPageTemplateId($pageTemplateId)
    {
        $this->container['pageTemplateId'] = $pageTemplateId;

        return $this;
    }

    /**
     * Gets pageElements
     *
     * @return \TencentAds\Model\V3\PageElementsStruct[]|mixed
     */
    public function getPageElements()
    {
        return $this->container['pageElements'];
    }

    /**
     * Sets pageElements
     *
     * @param \TencentAds\Model\V3\PageElementsStruct[]|mixed $pageElements pageElements
     *
     * @return $this
     */
    public function setPageElements($pageElements)
    {
        $this->container['pageElements'] = $pageElements;

        return $this;
    }

    /**
     * Gets shareContentSpec
     *
     * @return \TencentAds\Model\V3\ShareContentSpec|mixed
     */
    public function getShareContentSpec()
    {
        return $this->container['shareContentSpec'];
    }

    /**
     * Sets shareContentSpec
     *
     * @param \TencentAds\Model\V3\ShareContentSpec|mixed $shareContentSpec shareContentSpec
     *
     * @return $this
     */
    public function setShareContentSpec($shareContentSpec)
    {
        $this->container['shareContentSpec'] = $shareContentSpec;

        return $this;
    }

    /**
     * Gets previewUrl
     *
     * @return string|mixed
     */
    public function getPreviewUrl()
    {
        return $this->container['previewUrl'];
    }

    /**
     * Sets previewUrl
     *
     * @param string|mixed $previewUrl previewUrl
     *
     * @return $this
     */
    public function setPreviewUrl($previewUrl)
    {
        $this->container['previewUrl'] = $previewUrl;

        return $this;
    }

    /**
     * Gets pageType
     *
     * @return \TencentAds\Model\V3\PageTypeRead|mixed
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\V3\PageTypeRead|mixed $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

        return $this;
    }

    /**
     * Gets sourceType
     *
     * @return \TencentAds\Model\V3\WechatPageSourceType|mixed
     */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
     * Sets sourceType
     *
     * @param \TencentAds\Model\V3\WechatPageSourceType|mixed $sourceType sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;

        return $this;
    }

    /**
     * Gets videoResourceStatus
     *
     * @return \TencentAds\Model\V3\WechatPageResourceStatus|mixed
     */
    public function getVideoResourceStatus()
    {
        return $this->container['videoResourceStatus'];
    }

    /**
     * Sets videoResourceStatus
     *
     * @param \TencentAds\Model\V3\WechatPageResourceStatus|mixed $videoResourceStatus videoResourceStatus
     *
     * @return $this
     */
    public function setVideoResourceStatus($videoResourceStatus)
    {
        $this->container['videoResourceStatus'] = $videoResourceStatus;

        return $this;
    }

    /**
     * Gets canvasType
     *
     * @return \TencentAds\Model\V3\CanvasType|mixed
     */
    public function getCanvasType()
    {
        return $this->container['canvasType'];
    }

    /**
     * Sets canvasType
     *
     * @param \TencentAds\Model\V3\CanvasType|mixed $canvasType canvasType
     *
     * @return $this
     */
    public function setCanvasType($canvasType)
    {
        $this->container['canvasType'] = $canvasType;

        return $this;
    }

    /**
     * Gets ownerUid
     *
     * @return int|mixed
     */
    public function getOwnerUid()
    {
        return $this->container['ownerUid'];
    }

    /**
     * Sets ownerUid
     *
     * @param int|mixed $ownerUid ownerUid
     *
     * @return $this
     */
    public function setOwnerUid($ownerUid)
    {
        $this->container['ownerUid'] = $ownerUid;

        return $this;
    }

    /**
     * Gets pageStatus
     *
     * @return \TencentAds\Model\V3\PageStatus|mixed
     */
    public function getPageStatus()
    {
        return $this->container['pageStatus'];
    }

    /**
     * Sets pageStatus
     *
     * @param \TencentAds\Model\V3\PageStatus|mixed $pageStatus pageStatus
     *
     * @return $this
     */
    public function setPageStatus($pageStatus)
    {
        $this->container['pageStatus'] = $pageStatus;

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

