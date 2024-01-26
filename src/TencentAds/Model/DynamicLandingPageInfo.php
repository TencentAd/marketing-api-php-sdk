<?php
/**
 * DynamicLandingPageInfo
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
 * DynamicLandingPageInfo Class Doc Comment
 *
 * @category Class
 * @description dc落地页信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicLandingPageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'dynamic_landing_page_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pageType' => '\TencentAds\Model\DestinationType',
        'pageSpec' => '\TencentAds\Model\DynamicCreativePageSpec',
        'linkPageType' => '\TencentAds\Model\LinkPageType',
        'linkNameType' => '\TencentAds\Model\LinkUrlLinkNameType',
        'linkPageSpec' => '\TencentAds\Model\LinkPageSpec',
        'qqMiniGameTrackingQueryString' => 'string',
        'shareContentSpec' => '\TencentAds\Model\ShareContentSpec',
        'webviewUrl' => 'string',
        'simpleCanvasSubType' => '\TencentAds\Model\SimpleCanvasSubType',
        'deepLinkUrl' => 'string',
        'androidDeepLinkAppId' => 'string',
        'iosDeepLinkAppId' => 'string',
        'doubleDeepLinkData' => '\TencentAds\Model\DoubleDeepLinkDataSpec',
        'universalLinkUrl' => 'string',
        'unionMarketSwitch' => 'bool',
        'unionMarketSpec' => '\TencentAds\Model\UnionMarketSpec',
        'linkNameText' => 'string',
        'buttonTextJumpInfo' => '\TencentAds\Model\LandingPageStructure',
        'channelsShopProductSpec' => '\TencentAds\Model\ChannelsShopProductSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pageType' => null,
        'pageSpec' => null,
        'linkPageType' => null,
        'linkNameType' => null,
        'linkPageSpec' => null,
        'qqMiniGameTrackingQueryString' => null,
        'shareContentSpec' => null,
        'webviewUrl' => null,
        'simpleCanvasSubType' => null,
        'deepLinkUrl' => null,
        'androidDeepLinkAppId' => null,
        'iosDeepLinkAppId' => null,
        'doubleDeepLinkData' => null,
        'universalLinkUrl' => null,
        'unionMarketSwitch' => null,
        'unionMarketSpec' => null,
        'linkNameText' => null,
        'buttonTextJumpInfo' => null,
        'channelsShopProductSpec' => null
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
        'pageType' => 'page_type',
        'pageSpec' => 'page_spec',
        'linkPageType' => 'link_page_type',
        'linkNameType' => 'link_name_type',
        'linkPageSpec' => 'link_page_spec',
        'qqMiniGameTrackingQueryString' => 'qq_mini_game_tracking_query_string',
        'shareContentSpec' => 'share_content_spec',
        'webviewUrl' => 'webview_url',
        'simpleCanvasSubType' => 'simple_canvas_sub_type',
        'deepLinkUrl' => 'deep_link_url',
        'androidDeepLinkAppId' => 'android_deep_link_app_id',
        'iosDeepLinkAppId' => 'ios_deep_link_app_id',
        'doubleDeepLinkData' => 'double_deep_link_data',
        'universalLinkUrl' => 'universal_link_url',
        'unionMarketSwitch' => 'union_market_switch',
        'unionMarketSpec' => 'union_market_spec',
        'linkNameText' => 'link_name_text',
        'buttonTextJumpInfo' => 'button_text_jump_info',
        'channelsShopProductSpec' => 'channels_shop_product_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageType' => 'setPageType',
        'pageSpec' => 'setPageSpec',
        'linkPageType' => 'setLinkPageType',
        'linkNameType' => 'setLinkNameType',
        'linkPageSpec' => 'setLinkPageSpec',
        'qqMiniGameTrackingQueryString' => 'setQqMiniGameTrackingQueryString',
        'shareContentSpec' => 'setShareContentSpec',
        'webviewUrl' => 'setWebviewUrl',
        'simpleCanvasSubType' => 'setSimpleCanvasSubType',
        'deepLinkUrl' => 'setDeepLinkUrl',
        'androidDeepLinkAppId' => 'setAndroidDeepLinkAppId',
        'iosDeepLinkAppId' => 'setIosDeepLinkAppId',
        'doubleDeepLinkData' => 'setDoubleDeepLinkData',
        'universalLinkUrl' => 'setUniversalLinkUrl',
        'unionMarketSwitch' => 'setUnionMarketSwitch',
        'unionMarketSpec' => 'setUnionMarketSpec',
        'linkNameText' => 'setLinkNameText',
        'buttonTextJumpInfo' => 'setButtonTextJumpInfo',
        'channelsShopProductSpec' => 'setChannelsShopProductSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageType' => 'getPageType',
        'pageSpec' => 'getPageSpec',
        'linkPageType' => 'getLinkPageType',
        'linkNameType' => 'getLinkNameType',
        'linkPageSpec' => 'getLinkPageSpec',
        'qqMiniGameTrackingQueryString' => 'getQqMiniGameTrackingQueryString',
        'shareContentSpec' => 'getShareContentSpec',
        'webviewUrl' => 'getWebviewUrl',
        'simpleCanvasSubType' => 'getSimpleCanvasSubType',
        'deepLinkUrl' => 'getDeepLinkUrl',
        'androidDeepLinkAppId' => 'getAndroidDeepLinkAppId',
        'iosDeepLinkAppId' => 'getIosDeepLinkAppId',
        'doubleDeepLinkData' => 'getDoubleDeepLinkData',
        'universalLinkUrl' => 'getUniversalLinkUrl',
        'unionMarketSwitch' => 'getUnionMarketSwitch',
        'unionMarketSpec' => 'getUnionMarketSpec',
        'linkNameText' => 'getLinkNameText',
        'buttonTextJumpInfo' => 'getButtonTextJumpInfo',
        'channelsShopProductSpec' => 'getChannelsShopProductSpec'
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
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['pageSpec'] = isset($data['pageSpec']) ? $data['pageSpec'] : null;
        $this->container['linkPageType'] = isset($data['linkPageType']) ? $data['linkPageType'] : null;
        $this->container['linkNameType'] = isset($data['linkNameType']) ? $data['linkNameType'] : null;
        $this->container['linkPageSpec'] = isset($data['linkPageSpec']) ? $data['linkPageSpec'] : null;
        $this->container['qqMiniGameTrackingQueryString'] = isset($data['qqMiniGameTrackingQueryString']) ? $data['qqMiniGameTrackingQueryString'] : null;
        $this->container['shareContentSpec'] = isset($data['shareContentSpec']) ? $data['shareContentSpec'] : null;
        $this->container['webviewUrl'] = isset($data['webviewUrl']) ? $data['webviewUrl'] : null;
        $this->container['simpleCanvasSubType'] = isset($data['simpleCanvasSubType']) ? $data['simpleCanvasSubType'] : null;
        $this->container['deepLinkUrl'] = isset($data['deepLinkUrl']) ? $data['deepLinkUrl'] : null;
        $this->container['androidDeepLinkAppId'] = isset($data['androidDeepLinkAppId']) ? $data['androidDeepLinkAppId'] : null;
        $this->container['iosDeepLinkAppId'] = isset($data['iosDeepLinkAppId']) ? $data['iosDeepLinkAppId'] : null;
        $this->container['doubleDeepLinkData'] = isset($data['doubleDeepLinkData']) ? $data['doubleDeepLinkData'] : null;
        $this->container['universalLinkUrl'] = isset($data['universalLinkUrl']) ? $data['universalLinkUrl'] : null;
        $this->container['unionMarketSwitch'] = isset($data['unionMarketSwitch']) ? $data['unionMarketSwitch'] : null;
        $this->container['unionMarketSpec'] = isset($data['unionMarketSpec']) ? $data['unionMarketSpec'] : null;
        $this->container['linkNameText'] = isset($data['linkNameText']) ? $data['linkNameText'] : null;
        $this->container['buttonTextJumpInfo'] = isset($data['buttonTextJumpInfo']) ? $data['buttonTextJumpInfo'] : null;
        $this->container['channelsShopProductSpec'] = isset($data['channelsShopProductSpec']) ? $data['channelsShopProductSpec'] : null;
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
     * Gets pageType
     *
     * @return \TencentAds\Model\DestinationType|mixed
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\DestinationType|mixed $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

        return $this;
    }

    /**
     * Gets pageSpec
     *
     * @return \TencentAds\Model\DynamicCreativePageSpec|mixed
     */
    public function getPageSpec()
    {
        return $this->container['pageSpec'];
    }

    /**
     * Sets pageSpec
     *
     * @param \TencentAds\Model\DynamicCreativePageSpec|mixed $pageSpec pageSpec
     *
     * @return $this
     */
    public function setPageSpec($pageSpec)
    {
        $this->container['pageSpec'] = $pageSpec;

        return $this;
    }

    /**
     * Gets linkPageType
     *
     * @return \TencentAds\Model\LinkPageType|mixed
     */
    public function getLinkPageType()
    {
        return $this->container['linkPageType'];
    }

    /**
     * Sets linkPageType
     *
     * @param \TencentAds\Model\LinkPageType|mixed $linkPageType linkPageType
     *
     * @return $this
     */
    public function setLinkPageType($linkPageType)
    {
        $this->container['linkPageType'] = $linkPageType;

        return $this;
    }

    /**
     * Gets linkNameType
     *
     * @return \TencentAds\Model\LinkUrlLinkNameType|mixed
     */
    public function getLinkNameType()
    {
        return $this->container['linkNameType'];
    }

    /**
     * Sets linkNameType
     *
     * @param \TencentAds\Model\LinkUrlLinkNameType|mixed $linkNameType linkNameType
     *
     * @return $this
     */
    public function setLinkNameType($linkNameType)
    {
        $this->container['linkNameType'] = $linkNameType;

        return $this;
    }

    /**
     * Gets linkPageSpec
     *
     * @return \TencentAds\Model\LinkPageSpec|mixed
     */
    public function getLinkPageSpec()
    {
        return $this->container['linkPageSpec'];
    }

    /**
     * Sets linkPageSpec
     *
     * @param \TencentAds\Model\LinkPageSpec|mixed $linkPageSpec linkPageSpec
     *
     * @return $this
     */
    public function setLinkPageSpec($linkPageSpec)
    {
        $this->container['linkPageSpec'] = $linkPageSpec;

        return $this;
    }

    /**
     * Gets qqMiniGameTrackingQueryString
     *
     * @return string|mixed
     */
    public function getQqMiniGameTrackingQueryString()
    {
        return $this->container['qqMiniGameTrackingQueryString'];
    }

    /**
     * Sets qqMiniGameTrackingQueryString
     *
     * @param string|mixed $qqMiniGameTrackingQueryString qqMiniGameTrackingQueryString
     *
     * @return $this
     */
    public function setQqMiniGameTrackingQueryString($qqMiniGameTrackingQueryString)
    {
        $this->container['qqMiniGameTrackingQueryString'] = $qqMiniGameTrackingQueryString;

        return $this;
    }

    /**
     * Gets shareContentSpec
     *
     * @return \TencentAds\Model\ShareContentSpec|mixed
     */
    public function getShareContentSpec()
    {
        return $this->container['shareContentSpec'];
    }

    /**
     * Sets shareContentSpec
     *
     * @param \TencentAds\Model\ShareContentSpec|mixed $shareContentSpec shareContentSpec
     *
     * @return $this
     */
    public function setShareContentSpec($shareContentSpec)
    {
        $this->container['shareContentSpec'] = $shareContentSpec;

        return $this;
    }

    /**
     * Gets webviewUrl
     *
     * @return string|mixed
     */
    public function getWebviewUrl()
    {
        return $this->container['webviewUrl'];
    }

    /**
     * Sets webviewUrl
     *
     * @param string|mixed $webviewUrl webviewUrl
     *
     * @return $this
     */
    public function setWebviewUrl($webviewUrl)
    {
        $this->container['webviewUrl'] = $webviewUrl;

        return $this;
    }

    /**
     * Gets simpleCanvasSubType
     *
     * @return \TencentAds\Model\SimpleCanvasSubType|mixed
     */
    public function getSimpleCanvasSubType()
    {
        return $this->container['simpleCanvasSubType'];
    }

    /**
     * Sets simpleCanvasSubType
     *
     * @param \TencentAds\Model\SimpleCanvasSubType|mixed $simpleCanvasSubType simpleCanvasSubType
     *
     * @return $this
     */
    public function setSimpleCanvasSubType($simpleCanvasSubType)
    {
        $this->container['simpleCanvasSubType'] = $simpleCanvasSubType;

        return $this;
    }

    /**
     * Gets deepLinkUrl
     *
     * @return string|mixed
     */
    public function getDeepLinkUrl()
    {
        return $this->container['deepLinkUrl'];
    }

    /**
     * Sets deepLinkUrl
     *
     * @param string|mixed $deepLinkUrl deepLinkUrl
     *
     * @return $this
     */
    public function setDeepLinkUrl($deepLinkUrl)
    {
        $this->container['deepLinkUrl'] = $deepLinkUrl;

        return $this;
    }

    /**
     * Gets androidDeepLinkAppId
     *
     * @return string|mixed
     */
    public function getAndroidDeepLinkAppId()
    {
        return $this->container['androidDeepLinkAppId'];
    }

    /**
     * Sets androidDeepLinkAppId
     *
     * @param string|mixed $androidDeepLinkAppId androidDeepLinkAppId
     *
     * @return $this
     */
    public function setAndroidDeepLinkAppId($androidDeepLinkAppId)
    {
        $this->container['androidDeepLinkAppId'] = $androidDeepLinkAppId;

        return $this;
    }

    /**
     * Gets iosDeepLinkAppId
     *
     * @return string|mixed
     */
    public function getIosDeepLinkAppId()
    {
        return $this->container['iosDeepLinkAppId'];
    }

    /**
     * Sets iosDeepLinkAppId
     *
     * @param string|mixed $iosDeepLinkAppId iosDeepLinkAppId
     *
     * @return $this
     */
    public function setIosDeepLinkAppId($iosDeepLinkAppId)
    {
        $this->container['iosDeepLinkAppId'] = $iosDeepLinkAppId;

        return $this;
    }

    /**
     * Gets doubleDeepLinkData
     *
     * @return \TencentAds\Model\DoubleDeepLinkDataSpec|mixed
     */
    public function getDoubleDeepLinkData()
    {
        return $this->container['doubleDeepLinkData'];
    }

    /**
     * Sets doubleDeepLinkData
     *
     * @param \TencentAds\Model\DoubleDeepLinkDataSpec|mixed $doubleDeepLinkData doubleDeepLinkData
     *
     * @return $this
     */
    public function setDoubleDeepLinkData($doubleDeepLinkData)
    {
        $this->container['doubleDeepLinkData'] = $doubleDeepLinkData;

        return $this;
    }

    /**
     * Gets universalLinkUrl
     *
     * @return string|mixed
     */
    public function getUniversalLinkUrl()
    {
        return $this->container['universalLinkUrl'];
    }

    /**
     * Sets universalLinkUrl
     *
     * @param string|mixed $universalLinkUrl universalLinkUrl
     *
     * @return $this
     */
    public function setUniversalLinkUrl($universalLinkUrl)
    {
        $this->container['universalLinkUrl'] = $universalLinkUrl;

        return $this;
    }

    /**
     * Gets unionMarketSwitch
     *
     * @return bool|mixed
     */
    public function getUnionMarketSwitch()
    {
        return $this->container['unionMarketSwitch'];
    }

    /**
     * Sets unionMarketSwitch
     *
     * @param bool|mixed $unionMarketSwitch unionMarketSwitch
     *
     * @return $this
     */
    public function setUnionMarketSwitch($unionMarketSwitch)
    {
        $this->container['unionMarketSwitch'] = $unionMarketSwitch;

        return $this;
    }

    /**
     * Gets unionMarketSpec
     *
     * @return \TencentAds\Model\UnionMarketSpec|mixed
     */
    public function getUnionMarketSpec()
    {
        return $this->container['unionMarketSpec'];
    }

    /**
     * Sets unionMarketSpec
     *
     * @param \TencentAds\Model\UnionMarketSpec|mixed $unionMarketSpec unionMarketSpec
     *
     * @return $this
     */
    public function setUnionMarketSpec($unionMarketSpec)
    {
        $this->container['unionMarketSpec'] = $unionMarketSpec;

        return $this;
    }

    /**
     * Gets linkNameText
     *
     * @return string|mixed
     */
    public function getLinkNameText()
    {
        return $this->container['linkNameText'];
    }

    /**
     * Sets linkNameText
     *
     * @param string|mixed $linkNameText linkNameText
     *
     * @return $this
     */
    public function setLinkNameText($linkNameText)
    {
        $this->container['linkNameText'] = $linkNameText;

        return $this;
    }

    /**
     * Gets buttonTextJumpInfo
     *
     * @return \TencentAds\Model\LandingPageStructure|mixed
     */
    public function getButtonTextJumpInfo()
    {
        return $this->container['buttonTextJumpInfo'];
    }

    /**
     * Sets buttonTextJumpInfo
     *
     * @param \TencentAds\Model\LandingPageStructure|mixed $buttonTextJumpInfo buttonTextJumpInfo
     *
     * @return $this
     */
    public function setButtonTextJumpInfo($buttonTextJumpInfo)
    {
        $this->container['buttonTextJumpInfo'] = $buttonTextJumpInfo;

        return $this;
    }

    /**
     * Gets channelsShopProductSpec
     *
     * @return \TencentAds\Model\ChannelsShopProductSpec|mixed
     */
    public function getChannelsShopProductSpec()
    {
        return $this->container['channelsShopProductSpec'];
    }

    /**
     * Sets channelsShopProductSpec
     *
     * @param \TencentAds\Model\ChannelsShopProductSpec|mixed $channelsShopProductSpec channelsShopProductSpec
     *
     * @return $this
     */
    public function setChannelsShopProductSpec($channelsShopProductSpec)
    {
        $this->container['channelsShopProductSpec'] = $channelsShopProductSpec;

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


