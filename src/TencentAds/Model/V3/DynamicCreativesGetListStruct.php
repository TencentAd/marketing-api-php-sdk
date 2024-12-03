<?php
/**
 * DynamicCreativesGetListStruct
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
 * DynamicCreativesGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicCreativesGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DynamicCreativesGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adgroupId' => 'int',
        'dynamicCreativeId' => 'int',
        'dynamicCreativeName' => 'string',
        'creativeTemplateId' => 'int',
        'deliveryMode' => '\TencentAds\Model\V3\DeliveryMode',
        'dynamicCreativeType' => '\TencentAds\Model\V3\DynamicCreativeType',
        'creativeComponents' => '\TencentAds\Model\V3\CreativeComponents',
        'impressionTrackingUrl' => 'string',
        'clickTrackingUrl' => 'string',
        'programCreativeInfo' => '\TencentAds\Model\V3\ProgramCreativeInfo',
        'pageTrackUrl' => 'string',
        'configuredStatus' => '\TencentAds\Model\V3\ConfiguredStatus',
        'isDeleted' => 'bool',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'marketingAssetVerification' => '\TencentAds\Model\V3\MarketingAssetVerification',
        'source' => '\TencentAds\Model\V3\AdCreativeSource',
        'assetInconsistentStatus' => '\TencentAds\Model\V3\AssetInconsistentStatus',
        'potentialStatus' => '\TencentAds\Model\V3\DynamicCreativePotentialStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adgroupId' => 'int64',
        'dynamicCreativeId' => 'int64',
        'dynamicCreativeName' => null,
        'creativeTemplateId' => 'int64',
        'deliveryMode' => null,
        'dynamicCreativeType' => null,
        'creativeComponents' => null,
        'impressionTrackingUrl' => null,
        'clickTrackingUrl' => null,
        'programCreativeInfo' => null,
        'pageTrackUrl' => null,
        'configuredStatus' => null,
        'isDeleted' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'marketingAssetVerification' => null,
        'source' => null,
        'assetInconsistentStatus' => null,
        'potentialStatus' => null
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
        'adgroupId' => 'adgroup_id',
        'dynamicCreativeId' => 'dynamic_creative_id',
        'dynamicCreativeName' => 'dynamic_creative_name',
        'creativeTemplateId' => 'creative_template_id',
        'deliveryMode' => 'delivery_mode',
        'dynamicCreativeType' => 'dynamic_creative_type',
        'creativeComponents' => 'creative_components',
        'impressionTrackingUrl' => 'impression_tracking_url',
        'clickTrackingUrl' => 'click_tracking_url',
        'programCreativeInfo' => 'program_creative_info',
        'pageTrackUrl' => 'page_track_url',
        'configuredStatus' => 'configured_status',
        'isDeleted' => 'is_deleted',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'marketingAssetVerification' => 'marketing_asset_verification',
        'source' => 'source',
        'assetInconsistentStatus' => 'asset_inconsistent_status',
        'potentialStatus' => 'potential_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adgroupId' => 'setAdgroupId',
        'dynamicCreativeId' => 'setDynamicCreativeId',
        'dynamicCreativeName' => 'setDynamicCreativeName',
        'creativeTemplateId' => 'setCreativeTemplateId',
        'deliveryMode' => 'setDeliveryMode',
        'dynamicCreativeType' => 'setDynamicCreativeType',
        'creativeComponents' => 'setCreativeComponents',
        'impressionTrackingUrl' => 'setImpressionTrackingUrl',
        'clickTrackingUrl' => 'setClickTrackingUrl',
        'programCreativeInfo' => 'setProgramCreativeInfo',
        'pageTrackUrl' => 'setPageTrackUrl',
        'configuredStatus' => 'setConfiguredStatus',
        'isDeleted' => 'setIsDeleted',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'marketingAssetVerification' => 'setMarketingAssetVerification',
        'source' => 'setSource',
        'assetInconsistentStatus' => 'setAssetInconsistentStatus',
        'potentialStatus' => 'setPotentialStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adgroupId' => 'getAdgroupId',
        'dynamicCreativeId' => 'getDynamicCreativeId',
        'dynamicCreativeName' => 'getDynamicCreativeName',
        'creativeTemplateId' => 'getCreativeTemplateId',
        'deliveryMode' => 'getDeliveryMode',
        'dynamicCreativeType' => 'getDynamicCreativeType',
        'creativeComponents' => 'getCreativeComponents',
        'impressionTrackingUrl' => 'getImpressionTrackingUrl',
        'clickTrackingUrl' => 'getClickTrackingUrl',
        'programCreativeInfo' => 'getProgramCreativeInfo',
        'pageTrackUrl' => 'getPageTrackUrl',
        'configuredStatus' => 'getConfiguredStatus',
        'isDeleted' => 'getIsDeleted',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'marketingAssetVerification' => 'getMarketingAssetVerification',
        'source' => 'getSource',
        'assetInconsistentStatus' => 'getAssetInconsistentStatus',
        'potentialStatus' => 'getPotentialStatus'
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
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['dynamicCreativeId'] = isset($data['dynamicCreativeId']) ? $data['dynamicCreativeId'] : null;
        $this->container['dynamicCreativeName'] = isset($data['dynamicCreativeName']) ? $data['dynamicCreativeName'] : null;
        $this->container['creativeTemplateId'] = isset($data['creativeTemplateId']) ? $data['creativeTemplateId'] : null;
        $this->container['deliveryMode'] = isset($data['deliveryMode']) ? $data['deliveryMode'] : null;
        $this->container['dynamicCreativeType'] = isset($data['dynamicCreativeType']) ? $data['dynamicCreativeType'] : null;
        $this->container['creativeComponents'] = isset($data['creativeComponents']) ? $data['creativeComponents'] : null;
        $this->container['impressionTrackingUrl'] = isset($data['impressionTrackingUrl']) ? $data['impressionTrackingUrl'] : null;
        $this->container['clickTrackingUrl'] = isset($data['clickTrackingUrl']) ? $data['clickTrackingUrl'] : null;
        $this->container['programCreativeInfo'] = isset($data['programCreativeInfo']) ? $data['programCreativeInfo'] : null;
        $this->container['pageTrackUrl'] = isset($data['pageTrackUrl']) ? $data['pageTrackUrl'] : null;
        $this->container['configuredStatus'] = isset($data['configuredStatus']) ? $data['configuredStatus'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['marketingAssetVerification'] = isset($data['marketingAssetVerification']) ? $data['marketingAssetVerification'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['assetInconsistentStatus'] = isset($data['assetInconsistentStatus']) ? $data['assetInconsistentStatus'] : null;
        $this->container['potentialStatus'] = isset($data['potentialStatus']) ? $data['potentialStatus'] : null;
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
     * Gets adgroupId
     *
     * @return int|mixed
     */
    public function getAdgroupId()
    {
        return $this->container['adgroupId'];
    }

    /**
     * Sets adgroupId
     *
     * @param int|mixed $adgroupId adgroupId
     *
     * @return $this
     */
    public function setAdgroupId($adgroupId)
    {
        $this->container['adgroupId'] = $adgroupId;

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
     * Gets dynamicCreativeName
     *
     * @return string|mixed
     */
    public function getDynamicCreativeName()
    {
        return $this->container['dynamicCreativeName'];
    }

    /**
     * Sets dynamicCreativeName
     *
     * @param string|mixed $dynamicCreativeName dynamicCreativeName
     *
     * @return $this
     */
    public function setDynamicCreativeName($dynamicCreativeName)
    {
        $this->container['dynamicCreativeName'] = $dynamicCreativeName;

        return $this;
    }

    /**
     * Gets creativeTemplateId
     *
     * @return int|mixed
     */
    public function getCreativeTemplateId()
    {
        return $this->container['creativeTemplateId'];
    }

    /**
     * Sets creativeTemplateId
     *
     * @param int|mixed $creativeTemplateId creativeTemplateId
     *
     * @return $this
     */
    public function setCreativeTemplateId($creativeTemplateId)
    {
        $this->container['creativeTemplateId'] = $creativeTemplateId;

        return $this;
    }

    /**
     * Gets deliveryMode
     *
     * @return \TencentAds\Model\V3\DeliveryMode|mixed
     */
    public function getDeliveryMode()
    {
        return $this->container['deliveryMode'];
    }

    /**
     * Sets deliveryMode
     *
     * @param \TencentAds\Model\V3\DeliveryMode|mixed $deliveryMode deliveryMode
     *
     * @return $this
     */
    public function setDeliveryMode($deliveryMode)
    {
        $this->container['deliveryMode'] = $deliveryMode;

        return $this;
    }

    /**
     * Gets dynamicCreativeType
     *
     * @return \TencentAds\Model\V3\DynamicCreativeType|mixed
     */
    public function getDynamicCreativeType()
    {
        return $this->container['dynamicCreativeType'];
    }

    /**
     * Sets dynamicCreativeType
     *
     * @param \TencentAds\Model\V3\DynamicCreativeType|mixed $dynamicCreativeType dynamicCreativeType
     *
     * @return $this
     */
    public function setDynamicCreativeType($dynamicCreativeType)
    {
        $this->container['dynamicCreativeType'] = $dynamicCreativeType;

        return $this;
    }

    /**
     * Gets creativeComponents
     *
     * @return \TencentAds\Model\V3\CreativeComponents|mixed
     */
    public function getCreativeComponents()
    {
        return $this->container['creativeComponents'];
    }

    /**
     * Sets creativeComponents
     *
     * @param \TencentAds\Model\V3\CreativeComponents|mixed $creativeComponents creativeComponents
     *
     * @return $this
     */
    public function setCreativeComponents($creativeComponents)
    {
        $this->container['creativeComponents'] = $creativeComponents;

        return $this;
    }

    /**
     * Gets impressionTrackingUrl
     *
     * @return string|mixed
     */
    public function getImpressionTrackingUrl()
    {
        return $this->container['impressionTrackingUrl'];
    }

    /**
     * Sets impressionTrackingUrl
     *
     * @param string|mixed $impressionTrackingUrl impressionTrackingUrl
     *
     * @return $this
     */
    public function setImpressionTrackingUrl($impressionTrackingUrl)
    {
        $this->container['impressionTrackingUrl'] = $impressionTrackingUrl;

        return $this;
    }

    /**
     * Gets clickTrackingUrl
     *
     * @return string|mixed
     */
    public function getClickTrackingUrl()
    {
        return $this->container['clickTrackingUrl'];
    }

    /**
     * Sets clickTrackingUrl
     *
     * @param string|mixed $clickTrackingUrl clickTrackingUrl
     *
     * @return $this
     */
    public function setClickTrackingUrl($clickTrackingUrl)
    {
        $this->container['clickTrackingUrl'] = $clickTrackingUrl;

        return $this;
    }

    /**
     * Gets programCreativeInfo
     *
     * @return \TencentAds\Model\V3\ProgramCreativeInfo|mixed
     */
    public function getProgramCreativeInfo()
    {
        return $this->container['programCreativeInfo'];
    }

    /**
     * Sets programCreativeInfo
     *
     * @param \TencentAds\Model\V3\ProgramCreativeInfo|mixed $programCreativeInfo programCreativeInfo
     *
     * @return $this
     */
    public function setProgramCreativeInfo($programCreativeInfo)
    {
        $this->container['programCreativeInfo'] = $programCreativeInfo;

        return $this;
    }

    /**
     * Gets pageTrackUrl
     *
     * @return string|mixed
     */
    public function getPageTrackUrl()
    {
        return $this->container['pageTrackUrl'];
    }

    /**
     * Sets pageTrackUrl
     *
     * @param string|mixed $pageTrackUrl pageTrackUrl
     *
     * @return $this
     */
    public function setPageTrackUrl($pageTrackUrl)
    {
        $this->container['pageTrackUrl'] = $pageTrackUrl;

        return $this;
    }

    /**
     * Gets configuredStatus
     *
     * @return \TencentAds\Model\V3\ConfiguredStatus|mixed
     */
    public function getConfiguredStatus()
    {
        return $this->container['configuredStatus'];
    }

    /**
     * Sets configuredStatus
     *
     * @param \TencentAds\Model\V3\ConfiguredStatus|mixed $configuredStatus configuredStatus
     *
     * @return $this
     */
    public function setConfiguredStatus($configuredStatus)
    {
        $this->container['configuredStatus'] = $configuredStatus;

        return $this;
    }

    /**
     * Gets isDeleted
     *
     * @return bool|mixed
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool|mixed $isDeleted isDeleted
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;

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
     * Gets marketingAssetVerification
     *
     * @return \TencentAds\Model\V3\MarketingAssetVerification|mixed
     */
    public function getMarketingAssetVerification()
    {
        return $this->container['marketingAssetVerification'];
    }

    /**
     * Sets marketingAssetVerification
     *
     * @param \TencentAds\Model\V3\MarketingAssetVerification|mixed $marketingAssetVerification marketingAssetVerification
     *
     * @return $this
     */
    public function setMarketingAssetVerification($marketingAssetVerification)
    {
        $this->container['marketingAssetVerification'] = $marketingAssetVerification;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \TencentAds\Model\V3\AdCreativeSource|mixed
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \TencentAds\Model\V3\AdCreativeSource|mixed $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets assetInconsistentStatus
     *
     * @return \TencentAds\Model\V3\AssetInconsistentStatus|mixed
     */
    public function getAssetInconsistentStatus()
    {
        return $this->container['assetInconsistentStatus'];
    }

    /**
     * Sets assetInconsistentStatus
     *
     * @param \TencentAds\Model\V3\AssetInconsistentStatus|mixed $assetInconsistentStatus assetInconsistentStatus
     *
     * @return $this
     */
    public function setAssetInconsistentStatus($assetInconsistentStatus)
    {
        $this->container['assetInconsistentStatus'] = $assetInconsistentStatus;

        return $this;
    }

    /**
     * Gets potentialStatus
     *
     * @return \TencentAds\Model\V3\DynamicCreativePotentialStatus|mixed
     */
    public function getPotentialStatus()
    {
        return $this->container['potentialStatus'];
    }

    /**
     * Sets potentialStatus
     *
     * @param \TencentAds\Model\V3\DynamicCreativePotentialStatus|mixed $potentialStatus potentialStatus
     *
     * @return $this
     */
    public function setPotentialStatus($potentialStatus)
    {
        $this->container['potentialStatus'] = $potentialStatus;

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


