<?php
/**
 * DynamicAdVideoTemplatesGetListStruct
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
 * DynamicAdVideoTemplatesGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicAdVideoTemplatesGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DynamicAdVideoTemplatesGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'templateId' => 'int',
        'templateName' => 'string',
        'templateType' => '\TencentAds\Model\V3\VideoTemplateType',
        'productCatalogId' => 'int',
        'adcreativeTemplateId' => 'int',
        'coverImageUrl' => 'string',
        'introVideoUrl' => 'string',
        'deliveryVideoUrl' => 'string',
        'supportChannel' => 'bool',
        'coverage' => 'double',
        'minVideoDuration' => 'double',
        'maxVideoDuration' => 'double',
        'videoProductFields' => 'string[]',
        'imageProductFields' => 'string[]',
        'extra' => '\TencentAds\Model\V3\Extra',
        'subTemplateList' => '\TencentAds\Model\V3\SubTemplateStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'templateId' => 'int64',
        'templateName' => null,
        'templateType' => null,
        'productCatalogId' => 'int64',
        'adcreativeTemplateId' => 'int64',
        'coverImageUrl' => null,
        'introVideoUrl' => null,
        'deliveryVideoUrl' => null,
        'supportChannel' => null,
        'coverage' => 'double',
        'minVideoDuration' => 'double',
        'maxVideoDuration' => 'double',
        'videoProductFields' => null,
        'imageProductFields' => null,
        'extra' => null,
        'subTemplateList' => null
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
        'templateId' => 'template_id',
        'templateName' => 'template_name',
        'templateType' => 'template_type',
        'productCatalogId' => 'product_catalog_id',
        'adcreativeTemplateId' => 'adcreative_template_id',
        'coverImageUrl' => 'cover_image_url',
        'introVideoUrl' => 'intro_video_url',
        'deliveryVideoUrl' => 'delivery_video_url',
        'supportChannel' => 'support_channel',
        'coverage' => 'coverage',
        'minVideoDuration' => 'min_video_duration',
        'maxVideoDuration' => 'max_video_duration',
        'videoProductFields' => 'video_product_fields',
        'imageProductFields' => 'image_product_fields',
        'extra' => 'extra',
        'subTemplateList' => 'sub_template_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'templateId' => 'setTemplateId',
        'templateName' => 'setTemplateName',
        'templateType' => 'setTemplateType',
        'productCatalogId' => 'setProductCatalogId',
        'adcreativeTemplateId' => 'setAdcreativeTemplateId',
        'coverImageUrl' => 'setCoverImageUrl',
        'introVideoUrl' => 'setIntroVideoUrl',
        'deliveryVideoUrl' => 'setDeliveryVideoUrl',
        'supportChannel' => 'setSupportChannel',
        'coverage' => 'setCoverage',
        'minVideoDuration' => 'setMinVideoDuration',
        'maxVideoDuration' => 'setMaxVideoDuration',
        'videoProductFields' => 'setVideoProductFields',
        'imageProductFields' => 'setImageProductFields',
        'extra' => 'setExtra',
        'subTemplateList' => 'setSubTemplateList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'templateId' => 'getTemplateId',
        'templateName' => 'getTemplateName',
        'templateType' => 'getTemplateType',
        'productCatalogId' => 'getProductCatalogId',
        'adcreativeTemplateId' => 'getAdcreativeTemplateId',
        'coverImageUrl' => 'getCoverImageUrl',
        'introVideoUrl' => 'getIntroVideoUrl',
        'deliveryVideoUrl' => 'getDeliveryVideoUrl',
        'supportChannel' => 'getSupportChannel',
        'coverage' => 'getCoverage',
        'minVideoDuration' => 'getMinVideoDuration',
        'maxVideoDuration' => 'getMaxVideoDuration',
        'videoProductFields' => 'getVideoProductFields',
        'imageProductFields' => 'getImageProductFields',
        'extra' => 'getExtra',
        'subTemplateList' => 'getSubTemplateList'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['productCatalogId'] = isset($data['productCatalogId']) ? $data['productCatalogId'] : null;
        $this->container['adcreativeTemplateId'] = isset($data['adcreativeTemplateId']) ? $data['adcreativeTemplateId'] : null;
        $this->container['coverImageUrl'] = isset($data['coverImageUrl']) ? $data['coverImageUrl'] : null;
        $this->container['introVideoUrl'] = isset($data['introVideoUrl']) ? $data['introVideoUrl'] : null;
        $this->container['deliveryVideoUrl'] = isset($data['deliveryVideoUrl']) ? $data['deliveryVideoUrl'] : null;
        $this->container['supportChannel'] = isset($data['supportChannel']) ? $data['supportChannel'] : null;
        $this->container['coverage'] = isset($data['coverage']) ? $data['coverage'] : null;
        $this->container['minVideoDuration'] = isset($data['minVideoDuration']) ? $data['minVideoDuration'] : null;
        $this->container['maxVideoDuration'] = isset($data['maxVideoDuration']) ? $data['maxVideoDuration'] : null;
        $this->container['videoProductFields'] = isset($data['videoProductFields']) ? $data['videoProductFields'] : null;
        $this->container['imageProductFields'] = isset($data['imageProductFields']) ? $data['imageProductFields'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
        $this->container['subTemplateList'] = isset($data['subTemplateList']) ? $data['subTemplateList'] : null;
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
     * Gets templateId
     *
     * @return int|mixed
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param int|mixed $templateId templateId
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets templateName
     *
     * @return string|mixed
     */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
     * Sets templateName
     *
     * @param string|mixed $templateName templateName
     *
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;

        return $this;
    }

    /**
     * Gets templateType
     *
     * @return \TencentAds\Model\V3\VideoTemplateType|mixed
     */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
     * Sets templateType
     *
     * @param \TencentAds\Model\V3\VideoTemplateType|mixed $templateType templateType
     *
     * @return $this
     */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;

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
     * Gets adcreativeTemplateId
     *
     * @return int|mixed
     */
    public function getAdcreativeTemplateId()
    {
        return $this->container['adcreativeTemplateId'];
    }

    /**
     * Sets adcreativeTemplateId
     *
     * @param int|mixed $adcreativeTemplateId adcreativeTemplateId
     *
     * @return $this
     */
    public function setAdcreativeTemplateId($adcreativeTemplateId)
    {
        $this->container['adcreativeTemplateId'] = $adcreativeTemplateId;

        return $this;
    }

    /**
     * Gets coverImageUrl
     *
     * @return string|mixed
     */
    public function getCoverImageUrl()
    {
        return $this->container['coverImageUrl'];
    }

    /**
     * Sets coverImageUrl
     *
     * @param string|mixed $coverImageUrl coverImageUrl
     *
     * @return $this
     */
    public function setCoverImageUrl($coverImageUrl)
    {
        $this->container['coverImageUrl'] = $coverImageUrl;

        return $this;
    }

    /**
     * Gets introVideoUrl
     *
     * @return string|mixed
     */
    public function getIntroVideoUrl()
    {
        return $this->container['introVideoUrl'];
    }

    /**
     * Sets introVideoUrl
     *
     * @param string|mixed $introVideoUrl introVideoUrl
     *
     * @return $this
     */
    public function setIntroVideoUrl($introVideoUrl)
    {
        $this->container['introVideoUrl'] = $introVideoUrl;

        return $this;
    }

    /**
     * Gets deliveryVideoUrl
     *
     * @return string|mixed
     */
    public function getDeliveryVideoUrl()
    {
        return $this->container['deliveryVideoUrl'];
    }

    /**
     * Sets deliveryVideoUrl
     *
     * @param string|mixed $deliveryVideoUrl deliveryVideoUrl
     *
     * @return $this
     */
    public function setDeliveryVideoUrl($deliveryVideoUrl)
    {
        $this->container['deliveryVideoUrl'] = $deliveryVideoUrl;

        return $this;
    }

    /**
     * Gets supportChannel
     *
     * @return bool|mixed
     */
    public function getSupportChannel()
    {
        return $this->container['supportChannel'];
    }

    /**
     * Sets supportChannel
     *
     * @param bool|mixed $supportChannel supportChannel
     *
     * @return $this
     */
    public function setSupportChannel($supportChannel)
    {
        $this->container['supportChannel'] = $supportChannel;

        return $this;
    }

    /**
     * Gets coverage
     *
     * @return double|mixed
     */
    public function getCoverage()
    {
        return $this->container['coverage'];
    }

    /**
     * Sets coverage
     *
     * @param double|mixed $coverage coverage
     *
     * @return $this
     */
    public function setCoverage($coverage)
    {
        $this->container['coverage'] = $coverage;

        return $this;
    }

    /**
     * Gets minVideoDuration
     *
     * @return double|mixed
     */
    public function getMinVideoDuration()
    {
        return $this->container['minVideoDuration'];
    }

    /**
     * Sets minVideoDuration
     *
     * @param double|mixed $minVideoDuration minVideoDuration
     *
     * @return $this
     */
    public function setMinVideoDuration($minVideoDuration)
    {
        $this->container['minVideoDuration'] = $minVideoDuration;

        return $this;
    }

    /**
     * Gets maxVideoDuration
     *
     * @return double|mixed
     */
    public function getMaxVideoDuration()
    {
        return $this->container['maxVideoDuration'];
    }

    /**
     * Sets maxVideoDuration
     *
     * @param double|mixed $maxVideoDuration maxVideoDuration
     *
     * @return $this
     */
    public function setMaxVideoDuration($maxVideoDuration)
    {
        $this->container['maxVideoDuration'] = $maxVideoDuration;

        return $this;
    }

    /**
     * Gets videoProductFields
     *
     * @return string[]|mixed
     */
    public function getVideoProductFields()
    {
        return $this->container['videoProductFields'];
    }

    /**
     * Sets videoProductFields
     *
     * @param string[]|mixed $videoProductFields videoProductFields
     *
     * @return $this
     */
    public function setVideoProductFields($videoProductFields)
    {
        $this->container['videoProductFields'] = $videoProductFields;

        return $this;
    }

    /**
     * Gets imageProductFields
     *
     * @return string[]|mixed
     */
    public function getImageProductFields()
    {
        return $this->container['imageProductFields'];
    }

    /**
     * Sets imageProductFields
     *
     * @param string[]|mixed $imageProductFields imageProductFields
     *
     * @return $this
     */
    public function setImageProductFields($imageProductFields)
    {
        $this->container['imageProductFields'] = $imageProductFields;

        return $this;
    }

    /**
     * Gets extra
     *
     * @return \TencentAds\Model\V3\Extra|mixed
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param \TencentAds\Model\V3\Extra|mixed $extra extra
     *
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;

        return $this;
    }

    /**
     * Gets subTemplateList
     *
     * @return \TencentAds\Model\V3\SubTemplateStruct[]|mixed
     */
    public function getSubTemplateList()
    {
        return $this->container['subTemplateList'];
    }

    /**
     * Sets subTemplateList
     *
     * @param \TencentAds\Model\V3\SubTemplateStruct[]|mixed $subTemplateList subTemplateList
     *
     * @return $this
     */
    public function setSubTemplateList($subTemplateList)
    {
        $this->container['subTemplateList'] = $subTemplateList;

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


