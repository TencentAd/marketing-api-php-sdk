<?php
/**
 * WechatChannelsSpecFeedPageConfItem
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
 * WechatChannelsSpecFeedPageConfItem Class Doc Comment
 *
 * @category Class
 * @description feed页面配置项
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatChannelsSpecFeedPageConfItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'wechat_channels_spec_feed_page_conf_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adType' => 'int',
        'canvasId' => 'int',
        'canvasType' => 'int',
        'buttonTitle' => 'string',
        'feedCardInfo' => '\TencentAds\Model\WechatChannelsSpecFeedCardInfo',
        'pageUrl' => 'string',
        'miniProgramData' => '\TencentAds\Model\WechatChannelsSpecFeedConfMiniProgramData',
        'miniGameData' => '\TencentAds\Model\WechatChannelsSpecFeedConfMiniGameData',
        'iosAppId' => 'string',
        'androidAppId' => 'string',
        'isFullScreenOpenLandingPage' => 'int',
        'channelsShopProductSpec' => '\TencentAds\Model\ChannelsShopProductSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adType' => 'int64',
        'canvasId' => 'int64',
        'canvasType' => 'int64',
        'buttonTitle' => null,
        'feedCardInfo' => null,
        'pageUrl' => null,
        'miniProgramData' => null,
        'miniGameData' => null,
        'iosAppId' => null,
        'androidAppId' => null,
        'isFullScreenOpenLandingPage' => 'int64',
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
        'adType' => 'ad_type',
        'canvasId' => 'canvas_id',
        'canvasType' => 'canvas_type',
        'buttonTitle' => 'button_title',
        'feedCardInfo' => 'feed_card_info',
        'pageUrl' => 'page_url',
        'miniProgramData' => 'mini_program_data',
        'miniGameData' => 'mini_game_data',
        'iosAppId' => 'ios_app_id',
        'androidAppId' => 'android_app_id',
        'isFullScreenOpenLandingPage' => 'is_full_screen_open_landing_page',
        'channelsShopProductSpec' => 'channels_shop_product_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adType' => 'setAdType',
        'canvasId' => 'setCanvasId',
        'canvasType' => 'setCanvasType',
        'buttonTitle' => 'setButtonTitle',
        'feedCardInfo' => 'setFeedCardInfo',
        'pageUrl' => 'setPageUrl',
        'miniProgramData' => 'setMiniProgramData',
        'miniGameData' => 'setMiniGameData',
        'iosAppId' => 'setIosAppId',
        'androidAppId' => 'setAndroidAppId',
        'isFullScreenOpenLandingPage' => 'setIsFullScreenOpenLandingPage',
        'channelsShopProductSpec' => 'setChannelsShopProductSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adType' => 'getAdType',
        'canvasId' => 'getCanvasId',
        'canvasType' => 'getCanvasType',
        'buttonTitle' => 'getButtonTitle',
        'feedCardInfo' => 'getFeedCardInfo',
        'pageUrl' => 'getPageUrl',
        'miniProgramData' => 'getMiniProgramData',
        'miniGameData' => 'getMiniGameData',
        'iosAppId' => 'getIosAppId',
        'androidAppId' => 'getAndroidAppId',
        'isFullScreenOpenLandingPage' => 'getIsFullScreenOpenLandingPage',
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
        $this->container['adType'] = isset($data['adType']) ? $data['adType'] : null;
        $this->container['canvasId'] = isset($data['canvasId']) ? $data['canvasId'] : null;
        $this->container['canvasType'] = isset($data['canvasType']) ? $data['canvasType'] : null;
        $this->container['buttonTitle'] = isset($data['buttonTitle']) ? $data['buttonTitle'] : null;
        $this->container['feedCardInfo'] = isset($data['feedCardInfo']) ? $data['feedCardInfo'] : null;
        $this->container['pageUrl'] = isset($data['pageUrl']) ? $data['pageUrl'] : null;
        $this->container['miniProgramData'] = isset($data['miniProgramData']) ? $data['miniProgramData'] : null;
        $this->container['miniGameData'] = isset($data['miniGameData']) ? $data['miniGameData'] : null;
        $this->container['iosAppId'] = isset($data['iosAppId']) ? $data['iosAppId'] : null;
        $this->container['androidAppId'] = isset($data['androidAppId']) ? $data['androidAppId'] : null;
        $this->container['isFullScreenOpenLandingPage'] = isset($data['isFullScreenOpenLandingPage']) ? $data['isFullScreenOpenLandingPage'] : null;
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
     * Gets adType
     *
     * @return int|mixed
     */
    public function getAdType()
    {
        return $this->container['adType'];
    }

    /**
     * Sets adType
     *
     * @param int|mixed $adType adType
     *
     * @return $this
     */
    public function setAdType($adType)
    {
        $this->container['adType'] = $adType;

        return $this;
    }

    /**
     * Gets canvasId
     *
     * @return int|mixed
     */
    public function getCanvasId()
    {
        return $this->container['canvasId'];
    }

    /**
     * Sets canvasId
     *
     * @param int|mixed $canvasId canvasId
     *
     * @return $this
     */
    public function setCanvasId($canvasId)
    {
        $this->container['canvasId'] = $canvasId;

        return $this;
    }

    /**
     * Gets canvasType
     *
     * @return int|mixed
     */
    public function getCanvasType()
    {
        return $this->container['canvasType'];
    }

    /**
     * Sets canvasType
     *
     * @param int|mixed $canvasType canvasType
     *
     * @return $this
     */
    public function setCanvasType($canvasType)
    {
        $this->container['canvasType'] = $canvasType;

        return $this;
    }

    /**
     * Gets buttonTitle
     *
     * @return string|mixed
     */
    public function getButtonTitle()
    {
        return $this->container['buttonTitle'];
    }

    /**
     * Sets buttonTitle
     *
     * @param string|mixed $buttonTitle buttonTitle
     *
     * @return $this
     */
    public function setButtonTitle($buttonTitle)
    {
        $this->container['buttonTitle'] = $buttonTitle;

        return $this;
    }

    /**
     * Gets feedCardInfo
     *
     * @return \TencentAds\Model\WechatChannelsSpecFeedCardInfo|mixed
     */
    public function getFeedCardInfo()
    {
        return $this->container['feedCardInfo'];
    }

    /**
     * Sets feedCardInfo
     *
     * @param \TencentAds\Model\WechatChannelsSpecFeedCardInfo|mixed $feedCardInfo feedCardInfo
     *
     * @return $this
     */
    public function setFeedCardInfo($feedCardInfo)
    {
        $this->container['feedCardInfo'] = $feedCardInfo;

        return $this;
    }

    /**
     * Gets pageUrl
     *
     * @return string|mixed
     */
    public function getPageUrl()
    {
        return $this->container['pageUrl'];
    }

    /**
     * Sets pageUrl
     *
     * @param string|mixed $pageUrl pageUrl
     *
     * @return $this
     */
    public function setPageUrl($pageUrl)
    {
        $this->container['pageUrl'] = $pageUrl;

        return $this;
    }

    /**
     * Gets miniProgramData
     *
     * @return \TencentAds\Model\WechatChannelsSpecFeedConfMiniProgramData|mixed
     */
    public function getMiniProgramData()
    {
        return $this->container['miniProgramData'];
    }

    /**
     * Sets miniProgramData
     *
     * @param \TencentAds\Model\WechatChannelsSpecFeedConfMiniProgramData|mixed $miniProgramData miniProgramData
     *
     * @return $this
     */
    public function setMiniProgramData($miniProgramData)
    {
        $this->container['miniProgramData'] = $miniProgramData;

        return $this;
    }

    /**
     * Gets miniGameData
     *
     * @return \TencentAds\Model\WechatChannelsSpecFeedConfMiniGameData|mixed
     */
    public function getMiniGameData()
    {
        return $this->container['miniGameData'];
    }

    /**
     * Sets miniGameData
     *
     * @param \TencentAds\Model\WechatChannelsSpecFeedConfMiniGameData|mixed $miniGameData miniGameData
     *
     * @return $this
     */
    public function setMiniGameData($miniGameData)
    {
        $this->container['miniGameData'] = $miniGameData;

        return $this;
    }

    /**
     * Gets iosAppId
     *
     * @return string|mixed
     */
    public function getIosAppId()
    {
        return $this->container['iosAppId'];
    }

    /**
     * Sets iosAppId
     *
     * @param string|mixed $iosAppId iosAppId
     *
     * @return $this
     */
    public function setIosAppId($iosAppId)
    {
        $this->container['iosAppId'] = $iosAppId;

        return $this;
    }

    /**
     * Gets androidAppId
     *
     * @return string|mixed
     */
    public function getAndroidAppId()
    {
        return $this->container['androidAppId'];
    }

    /**
     * Sets androidAppId
     *
     * @param string|mixed $androidAppId androidAppId
     *
     * @return $this
     */
    public function setAndroidAppId($androidAppId)
    {
        $this->container['androidAppId'] = $androidAppId;

        return $this;
    }

    /**
     * Gets isFullScreenOpenLandingPage
     *
     * @return int|mixed
     */
    public function getIsFullScreenOpenLandingPage()
    {
        return $this->container['isFullScreenOpenLandingPage'];
    }

    /**
     * Sets isFullScreenOpenLandingPage
     *
     * @param int|mixed $isFullScreenOpenLandingPage isFullScreenOpenLandingPage
     *
     * @return $this
     */
    public function setIsFullScreenOpenLandingPage($isFullScreenOpenLandingPage)
    {
        $this->container['isFullScreenOpenLandingPage'] = $isFullScreenOpenLandingPage;

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


