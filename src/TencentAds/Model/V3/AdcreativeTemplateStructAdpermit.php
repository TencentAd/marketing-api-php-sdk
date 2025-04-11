<?php
/**
 * AdcreativeTemplateStructAdpermit
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
 * AdcreativeTemplateStructAdpermit Class Doc Comment
 *
 * @category Class
 * @description 创意形式和投放权限数据结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdcreativeTemplateStructAdpermit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'adcreative_template_struct_adpermit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'creativeTemplateId' => 'int',
        'creativeTemplateStyle' => 'string',
        'creativeTemplateAppellation' => 'string',
        'creativeSampleImage' => 'string',
        'siteSet' => 'string[]',
        'creativeComponents' => '\TencentAds\Model\V3\AdcreativeElement[]',
        'unsupportSitesetDetailSpec' => '\TencentAds\Model\V3\UnsupportSiteAdpermit[]',
        'supportDynamicAbilitySpecList' => '\TencentAds\Model\V3\SupportDynamicAbilitySpecList',
        'supportMpa' => 'bool',
        'supportMpaImageTemplate' => 'bool',
        'supportMpaVideoTemplate' => 'bool',
        'creativePermissions' => '\TencentAds\Model\V3\CreativePermissions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'creativeTemplateId' => 'int64',
        'creativeTemplateStyle' => null,
        'creativeTemplateAppellation' => null,
        'creativeSampleImage' => null,
        'siteSet' => null,
        'creativeComponents' => null,
        'unsupportSitesetDetailSpec' => null,
        'supportDynamicAbilitySpecList' => null,
        'supportMpa' => null,
        'supportMpaImageTemplate' => null,
        'supportMpaVideoTemplate' => null,
        'creativePermissions' => null
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
        'creativeTemplateId' => 'creative_template_id',
        'creativeTemplateStyle' => 'creative_template_style',
        'creativeTemplateAppellation' => 'creative_template_appellation',
        'creativeSampleImage' => 'creative_sample_image',
        'siteSet' => 'site_set',
        'creativeComponents' => 'creative_components',
        'unsupportSitesetDetailSpec' => 'unsupport_siteset_detail_spec',
        'supportDynamicAbilitySpecList' => 'support_dynamic_ability_spec_list',
        'supportMpa' => 'support_mpa',
        'supportMpaImageTemplate' => 'support_mpa_image_template',
        'supportMpaVideoTemplate' => 'support_mpa_video_template',
        'creativePermissions' => 'creative_permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creativeTemplateId' => 'setCreativeTemplateId',
        'creativeTemplateStyle' => 'setCreativeTemplateStyle',
        'creativeTemplateAppellation' => 'setCreativeTemplateAppellation',
        'creativeSampleImage' => 'setCreativeSampleImage',
        'siteSet' => 'setSiteSet',
        'creativeComponents' => 'setCreativeComponents',
        'unsupportSitesetDetailSpec' => 'setUnsupportSitesetDetailSpec',
        'supportDynamicAbilitySpecList' => 'setSupportDynamicAbilitySpecList',
        'supportMpa' => 'setSupportMpa',
        'supportMpaImageTemplate' => 'setSupportMpaImageTemplate',
        'supportMpaVideoTemplate' => 'setSupportMpaVideoTemplate',
        'creativePermissions' => 'setCreativePermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creativeTemplateId' => 'getCreativeTemplateId',
        'creativeTemplateStyle' => 'getCreativeTemplateStyle',
        'creativeTemplateAppellation' => 'getCreativeTemplateAppellation',
        'creativeSampleImage' => 'getCreativeSampleImage',
        'siteSet' => 'getSiteSet',
        'creativeComponents' => 'getCreativeComponents',
        'unsupportSitesetDetailSpec' => 'getUnsupportSitesetDetailSpec',
        'supportDynamicAbilitySpecList' => 'getSupportDynamicAbilitySpecList',
        'supportMpa' => 'getSupportMpa',
        'supportMpaImageTemplate' => 'getSupportMpaImageTemplate',
        'supportMpaVideoTemplate' => 'getSupportMpaVideoTemplate',
        'creativePermissions' => 'getCreativePermissions'
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
        $this->container['creativeTemplateId'] = isset($data['creativeTemplateId']) ? $data['creativeTemplateId'] : null;
        $this->container['creativeTemplateStyle'] = isset($data['creativeTemplateStyle']) ? $data['creativeTemplateStyle'] : null;
        $this->container['creativeTemplateAppellation'] = isset($data['creativeTemplateAppellation']) ? $data['creativeTemplateAppellation'] : null;
        $this->container['creativeSampleImage'] = isset($data['creativeSampleImage']) ? $data['creativeSampleImage'] : null;
        $this->container['siteSet'] = isset($data['siteSet']) ? $data['siteSet'] : null;
        $this->container['creativeComponents'] = isset($data['creativeComponents']) ? $data['creativeComponents'] : null;
        $this->container['unsupportSitesetDetailSpec'] = isset($data['unsupportSitesetDetailSpec']) ? $data['unsupportSitesetDetailSpec'] : null;
        $this->container['supportDynamicAbilitySpecList'] = isset($data['supportDynamicAbilitySpecList']) ? $data['supportDynamicAbilitySpecList'] : null;
        $this->container['supportMpa'] = isset($data['supportMpa']) ? $data['supportMpa'] : null;
        $this->container['supportMpaImageTemplate'] = isset($data['supportMpaImageTemplate']) ? $data['supportMpaImageTemplate'] : null;
        $this->container['supportMpaVideoTemplate'] = isset($data['supportMpaVideoTemplate']) ? $data['supportMpaVideoTemplate'] : null;
        $this->container['creativePermissions'] = isset($data['creativePermissions']) ? $data['creativePermissions'] : null;
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
     * Gets creativeTemplateStyle
     *
     * @return string|mixed
     */
    public function getCreativeTemplateStyle()
    {
        return $this->container['creativeTemplateStyle'];
    }

    /**
     * Sets creativeTemplateStyle
     *
     * @param string|mixed $creativeTemplateStyle creativeTemplateStyle
     *
     * @return $this
     */
    public function setCreativeTemplateStyle($creativeTemplateStyle)
    {
        $this->container['creativeTemplateStyle'] = $creativeTemplateStyle;

        return $this;
    }

    /**
     * Gets creativeTemplateAppellation
     *
     * @return string|mixed
     */
    public function getCreativeTemplateAppellation()
    {
        return $this->container['creativeTemplateAppellation'];
    }

    /**
     * Sets creativeTemplateAppellation
     *
     * @param string|mixed $creativeTemplateAppellation creativeTemplateAppellation
     *
     * @return $this
     */
    public function setCreativeTemplateAppellation($creativeTemplateAppellation)
    {
        $this->container['creativeTemplateAppellation'] = $creativeTemplateAppellation;

        return $this;
    }

    /**
     * Gets creativeSampleImage
     *
     * @return string|mixed
     */
    public function getCreativeSampleImage()
    {
        return $this->container['creativeSampleImage'];
    }

    /**
     * Sets creativeSampleImage
     *
     * @param string|mixed $creativeSampleImage creativeSampleImage
     *
     * @return $this
     */
    public function setCreativeSampleImage($creativeSampleImage)
    {
        $this->container['creativeSampleImage'] = $creativeSampleImage;

        return $this;
    }

    /**
     * Gets siteSet
     *
     * @return string[]|mixed
     */
    public function getSiteSet()
    {
        return $this->container['siteSet'];
    }

    /**
     * Sets siteSet
     *
     * @param string[]|mixed $siteSet siteSet
     *
     * @return $this
     */
    public function setSiteSet($siteSet)
    {
        $this->container['siteSet'] = $siteSet;

        return $this;
    }

    /**
     * Gets creativeComponents
     *
     * @return \TencentAds\Model\V3\AdcreativeElement[]|mixed
     */
    public function getCreativeComponents()
    {
        return $this->container['creativeComponents'];
    }

    /**
     * Sets creativeComponents
     *
     * @param \TencentAds\Model\V3\AdcreativeElement[]|mixed $creativeComponents creativeComponents
     *
     * @return $this
     */
    public function setCreativeComponents($creativeComponents)
    {
        $this->container['creativeComponents'] = $creativeComponents;

        return $this;
    }

    /**
     * Gets unsupportSitesetDetailSpec
     *
     * @return \TencentAds\Model\V3\UnsupportSiteAdpermit[]|mixed
     */
    public function getUnsupportSitesetDetailSpec()
    {
        return $this->container['unsupportSitesetDetailSpec'];
    }

    /**
     * Sets unsupportSitesetDetailSpec
     *
     * @param \TencentAds\Model\V3\UnsupportSiteAdpermit[]|mixed $unsupportSitesetDetailSpec unsupportSitesetDetailSpec
     *
     * @return $this
     */
    public function setUnsupportSitesetDetailSpec($unsupportSitesetDetailSpec)
    {
        $this->container['unsupportSitesetDetailSpec'] = $unsupportSitesetDetailSpec;

        return $this;
    }

    /**
     * Gets supportDynamicAbilitySpecList
     *
     * @return \TencentAds\Model\V3\SupportDynamicAbilitySpecList|mixed
     */
    public function getSupportDynamicAbilitySpecList()
    {
        return $this->container['supportDynamicAbilitySpecList'];
    }

    /**
     * Sets supportDynamicAbilitySpecList
     *
     * @param \TencentAds\Model\V3\SupportDynamicAbilitySpecList|mixed $supportDynamicAbilitySpecList supportDynamicAbilitySpecList
     *
     * @return $this
     */
    public function setSupportDynamicAbilitySpecList($supportDynamicAbilitySpecList)
    {
        $this->container['supportDynamicAbilitySpecList'] = $supportDynamicAbilitySpecList;

        return $this;
    }

    /**
     * Gets supportMpa
     *
     * @return bool|mixed
     */
    public function getSupportMpa()
    {
        return $this->container['supportMpa'];
    }

    /**
     * Sets supportMpa
     *
     * @param bool|mixed $supportMpa supportMpa
     *
     * @return $this
     */
    public function setSupportMpa($supportMpa)
    {
        $this->container['supportMpa'] = $supportMpa;

        return $this;
    }

    /**
     * Gets supportMpaImageTemplate
     *
     * @return bool|mixed
     */
    public function getSupportMpaImageTemplate()
    {
        return $this->container['supportMpaImageTemplate'];
    }

    /**
     * Sets supportMpaImageTemplate
     *
     * @param bool|mixed $supportMpaImageTemplate supportMpaImageTemplate
     *
     * @return $this
     */
    public function setSupportMpaImageTemplate($supportMpaImageTemplate)
    {
        $this->container['supportMpaImageTemplate'] = $supportMpaImageTemplate;

        return $this;
    }

    /**
     * Gets supportMpaVideoTemplate
     *
     * @return bool|mixed
     */
    public function getSupportMpaVideoTemplate()
    {
        return $this->container['supportMpaVideoTemplate'];
    }

    /**
     * Sets supportMpaVideoTemplate
     *
     * @param bool|mixed $supportMpaVideoTemplate supportMpaVideoTemplate
     *
     * @return $this
     */
    public function setSupportMpaVideoTemplate($supportMpaVideoTemplate)
    {
        $this->container['supportMpaVideoTemplate'] = $supportMpaVideoTemplate;

        return $this;
    }

    /**
     * Gets creativePermissions
     *
     * @return \TencentAds\Model\V3\CreativePermissions|mixed
     */
    public function getCreativePermissions()
    {
        return $this->container['creativePermissions'];
    }

    /**
     * Sets creativePermissions
     *
     * @param \TencentAds\Model\V3\CreativePermissions|mixed $creativePermissions creativePermissions
     *
     * @return $this
     */
    public function setCreativePermissions($creativePermissions)
    {
        $this->container['creativePermissions'] = $creativePermissions;

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


