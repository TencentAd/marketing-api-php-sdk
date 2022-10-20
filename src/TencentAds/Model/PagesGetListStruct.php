<?php
/**
 * PagesGetListStruct
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
 * PagesGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PagesGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PagesGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pageId' => 'int',
        'pageName' => 'string',
        'previewUrl' => 'string',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'promotedObjectId' => 'string',
        'productCatalogId' => 'int',
        'pageType' => '\TencentAds\Model\WechatPagePageType',
        'playableType' => '\TencentAds\Model\PlayableType',
        'pageStatus' => '\TencentAds\Model\PageStatus',
        'fengyeSubType' => '\TencentAds\Model\LandingPageFengyeSubType',
        'ownerUid' => 'int',
        'quoteCreativeMaterial' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pageId' => 'int64',
        'pageName' => null,
        'previewUrl' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'promotedObjectId' => null,
        'productCatalogId' => 'int64',
        'pageType' => null,
        'playableType' => null,
        'pageStatus' => null,
        'fengyeSubType' => null,
        'ownerUid' => 'int64',
        'quoteCreativeMaterial' => null
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
        'previewUrl' => 'preview_url',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'promotedObjectId' => 'promoted_object_id',
        'productCatalogId' => 'product_catalog_id',
        'pageType' => 'page_type',
        'playableType' => 'playable_type',
        'pageStatus' => 'page_status',
        'fengyeSubType' => 'fengye_sub_type',
        'ownerUid' => 'owner_uid',
        'quoteCreativeMaterial' => 'quote_creative_material'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageId' => 'setPageId',
        'pageName' => 'setPageName',
        'previewUrl' => 'setPreviewUrl',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'promotedObjectId' => 'setPromotedObjectId',
        'productCatalogId' => 'setProductCatalogId',
        'pageType' => 'setPageType',
        'playableType' => 'setPlayableType',
        'pageStatus' => 'setPageStatus',
        'fengyeSubType' => 'setFengyeSubType',
        'ownerUid' => 'setOwnerUid',
        'quoteCreativeMaterial' => 'setQuoteCreativeMaterial'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageId' => 'getPageId',
        'pageName' => 'getPageName',
        'previewUrl' => 'getPreviewUrl',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'promotedObjectId' => 'getPromotedObjectId',
        'productCatalogId' => 'getProductCatalogId',
        'pageType' => 'getPageType',
        'playableType' => 'getPlayableType',
        'pageStatus' => 'getPageStatus',
        'fengyeSubType' => 'getFengyeSubType',
        'ownerUid' => 'getOwnerUid',
        'quoteCreativeMaterial' => 'getQuoteCreativeMaterial'
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
        $this->container['previewUrl'] = isset($data['previewUrl']) ? $data['previewUrl'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['promotedObjectId'] = isset($data['promotedObjectId']) ? $data['promotedObjectId'] : null;
        $this->container['productCatalogId'] = isset($data['productCatalogId']) ? $data['productCatalogId'] : null;
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['playableType'] = isset($data['playableType']) ? $data['playableType'] : null;
        $this->container['pageStatus'] = isset($data['pageStatus']) ? $data['pageStatus'] : null;
        $this->container['fengyeSubType'] = isset($data['fengyeSubType']) ? $data['fengyeSubType'] : null;
        $this->container['ownerUid'] = isset($data['ownerUid']) ? $data['ownerUid'] : null;
        $this->container['quoteCreativeMaterial'] = isset($data['quoteCreativeMaterial']) ? $data['quoteCreativeMaterial'] : null;
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
     * Gets promotedObjectId
     *
     * @return string|mixed
     */
    public function getPromotedObjectId()
    {
        return $this->container['promotedObjectId'];
    }

    /**
     * Sets promotedObjectId
     *
     * @param string|mixed $promotedObjectId promotedObjectId
     *
     * @return $this
     */
    public function setPromotedObjectId($promotedObjectId)
    {
        $this->container['promotedObjectId'] = $promotedObjectId;

        return $this;
    }

    /**
     * Gets productCatalogId
     *
     * @return int|mixed
     */
    public function getProductCatalogId()
    {
        return $this->container['productCatalogId'];
    }

    /**
     * Sets productCatalogId
     *
     * @param int|mixed $productCatalogId productCatalogId
     *
     * @return $this
     */
    public function setProductCatalogId($productCatalogId)
    {
        $this->container['productCatalogId'] = $productCatalogId;

        return $this;
    }

    /**
     * Gets pageType
     *
     * @return \TencentAds\Model\WechatPagePageType|mixed
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\WechatPagePageType|mixed $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

        return $this;
    }

    /**
     * Gets playableType
     *
     * @return \TencentAds\Model\PlayableType|mixed
     */
    public function getPlayableType()
    {
        return $this->container['playableType'];
    }

    /**
     * Sets playableType
     *
     * @param \TencentAds\Model\PlayableType|mixed $playableType playableType
     *
     * @return $this
     */
    public function setPlayableType($playableType)
    {
        $this->container['playableType'] = $playableType;

        return $this;
    }

    /**
     * Gets pageStatus
     *
     * @return \TencentAds\Model\PageStatus|mixed
     */
    public function getPageStatus()
    {
        return $this->container['pageStatus'];
    }

    /**
     * Sets pageStatus
     *
     * @param \TencentAds\Model\PageStatus|mixed $pageStatus pageStatus
     *
     * @return $this
     */
    public function setPageStatus($pageStatus)
    {
        $this->container['pageStatus'] = $pageStatus;

        return $this;
    }

    /**
     * Gets fengyeSubType
     *
     * @return \TencentAds\Model\LandingPageFengyeSubType|mixed
     */
    public function getFengyeSubType()
    {
        return $this->container['fengyeSubType'];
    }

    /**
     * Sets fengyeSubType
     *
     * @param \TencentAds\Model\LandingPageFengyeSubType|mixed $fengyeSubType fengyeSubType
     *
     * @return $this
     */
    public function setFengyeSubType($fengyeSubType)
    {
        $this->container['fengyeSubType'] = $fengyeSubType;

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
     * Gets quoteCreativeMaterial
     *
     * @return bool|mixed
     */
    public function getQuoteCreativeMaterial()
    {
        return $this->container['quoteCreativeMaterial'];
    }

    /**
     * Sets quoteCreativeMaterial
     *
     * @param bool|mixed $quoteCreativeMaterial quoteCreativeMaterial
     *
     * @return $this
     */
    public function setQuoteCreativeMaterial($quoteCreativeMaterial)
    {
        $this->container['quoteCreativeMaterial'] = $quoteCreativeMaterial;

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


