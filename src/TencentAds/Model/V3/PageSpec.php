<?php
/**
 * PageSpec
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
 * PageSpec Class Doc Comment
 *
 * @category Class
 * @description 落地页内容
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PageSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'page_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'androidAppSpec' => '\TencentAds\Model\V3\AndroidAppPageSpec',
        'iosAppSpec' => '\TencentAds\Model\V3\IosAppPageSpec',
        'xjAndroidAppH5Spec' => '\TencentAds\Model\V3\XjPageSpec',
        'xjIosAppH5Spec' => '\TencentAds\Model\V3\XjPageSpec',
        'xjWebH5Spec' => '\TencentAds\Model\V3\XjPageSpec',
        'xjQuickSpec' => '\TencentAds\Model\V3\XjPageSpec',
        'fengyeEcommmerceSpec' => '\TencentAds\Model\V3\FengyePageSpec',
        'wechatCanvasSpec' => '\TencentAds\Model\V3\CanvasWechatPageSpec',
        'wechatMiniProgramSpec' => '\TencentAds\Model\V3\WechatMiniProgramPageSpec',
        'wechatCanvasMiniProgramSpec' => '\TencentAds\Model\V3\CanvasWechatPageSpec',
        'qqAppMiniProgramSpec' => '\TencentAds\Model\V3\QqAppMiniProgramPageSpec',
        'simpleWechatCanvasSpec' => '\TencentAds\Model\V3\SimpleCanvasWechatSpec',
        'wechatFocusDialogSpec' => '\TencentAds\Model\V3\WechatFocusDialog',
        'wechatConsultSpec' => '\TencentAds\Model\V3\WechatConsultPageSpec',
        'wecomConsultSpec' => '\TencentAds\Model\V3\WecomConsultPageSpec',
        'wechatOfficialAccountDetailSpec' => '\TencentAds\Model\V3\WechatOfficialAccountDetailPageSpec',
        'appDeepLinkSpec' => '\TencentAds\Model\V3\AppDeepLinkPageSpec',
        'appMarketSpec' => '\TencentAds\Model\V3\AppMarketPageSpec',
        'androidDirectDownloadSpec' => '\TencentAds\Model\V3\AndroidDirectDownloadPageSpec',
        'officialSpec' => '\TencentAds\Model\V3\XjPageSpec',
        'h5ProfileSpec' => '\TencentAds\Model\V3\H5ProfilePageSpec',
        'searchAreaBrandSpec' => '\TencentAds\Model\V3\SearchAreaBrandPageSpec',
        'wechatChannelsProfileSpec' => '\TencentAds\Model\V3\WechatChannelsPageSpec',
        'h5Spec' => '\TencentAds\Model\V3\H5PageSpec',
        'wechatMiniGameSpec' => '\TencentAds\Model\V3\WechatMiniGamePageSpec',
        'wechatChannelsFeedSpec' => '\TencentAds\Model\V3\WechatChannelsFeedPageSpec',
        'wechatChannelsReserveSpec' => '\TencentAds\Model\V3\WechatChannelsReserveLivePageSpec',
        'androidQuickAppSpec' => '\TencentAds\Model\V3\AndroidQuickAppPageSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'androidAppSpec' => null,
        'iosAppSpec' => null,
        'xjAndroidAppH5Spec' => null,
        'xjIosAppH5Spec' => null,
        'xjWebH5Spec' => null,
        'xjQuickSpec' => null,
        'fengyeEcommmerceSpec' => null,
        'wechatCanvasSpec' => null,
        'wechatMiniProgramSpec' => null,
        'wechatCanvasMiniProgramSpec' => null,
        'qqAppMiniProgramSpec' => null,
        'simpleWechatCanvasSpec' => null,
        'wechatFocusDialogSpec' => null,
        'wechatConsultSpec' => null,
        'wecomConsultSpec' => null,
        'wechatOfficialAccountDetailSpec' => null,
        'appDeepLinkSpec' => null,
        'appMarketSpec' => null,
        'androidDirectDownloadSpec' => null,
        'officialSpec' => null,
        'h5ProfileSpec' => null,
        'searchAreaBrandSpec' => null,
        'wechatChannelsProfileSpec' => null,
        'h5Spec' => null,
        'wechatMiniGameSpec' => null,
        'wechatChannelsFeedSpec' => null,
        'wechatChannelsReserveSpec' => null,
        'androidQuickAppSpec' => null
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
        'androidAppSpec' => 'android_app_spec',
        'iosAppSpec' => 'ios_app_spec',
        'xjAndroidAppH5Spec' => 'xj_android_app_h5_spec',
        'xjIosAppH5Spec' => 'xj_ios_app_h5_spec',
        'xjWebH5Spec' => 'xj_web_h5_spec',
        'xjQuickSpec' => 'xj_quick_spec',
        'fengyeEcommmerceSpec' => 'fengye_ecommmerce_spec',
        'wechatCanvasSpec' => 'wechat_canvas_spec',
        'wechatMiniProgramSpec' => 'wechat_mini_program_spec',
        'wechatCanvasMiniProgramSpec' => 'wechat_canvas_mini_program_spec',
        'qqAppMiniProgramSpec' => 'qq_app_mini_program_spec',
        'simpleWechatCanvasSpec' => 'simple_wechat_canvas_spec',
        'wechatFocusDialogSpec' => 'wechat_focus_dialog_spec',
        'wechatConsultSpec' => 'wechat_consult_spec',
        'wecomConsultSpec' => 'wecom_consult_spec',
        'wechatOfficialAccountDetailSpec' => 'wechat_official_account_detail_spec',
        'appDeepLinkSpec' => 'app_deep_link_spec',
        'appMarketSpec' => 'app_market_spec',
        'androidDirectDownloadSpec' => 'android_direct_download_spec',
        'officialSpec' => 'official_spec',
        'h5ProfileSpec' => 'h5_profile_spec',
        'searchAreaBrandSpec' => 'search_area_brand_spec',
        'wechatChannelsProfileSpec' => 'wechat_channels_profile_spec',
        'h5Spec' => 'h5_spec',
        'wechatMiniGameSpec' => 'wechat_mini_game_spec',
        'wechatChannelsFeedSpec' => 'wechat_channels_feed_spec',
        'wechatChannelsReserveSpec' => 'wechat_channels_reserve_spec',
        'androidQuickAppSpec' => 'android_quick_app_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'androidAppSpec' => 'setAndroidAppSpec',
        'iosAppSpec' => 'setIosAppSpec',
        'xjAndroidAppH5Spec' => 'setXjAndroidAppH5Spec',
        'xjIosAppH5Spec' => 'setXjIosAppH5Spec',
        'xjWebH5Spec' => 'setXjWebH5Spec',
        'xjQuickSpec' => 'setXjQuickSpec',
        'fengyeEcommmerceSpec' => 'setFengyeEcommmerceSpec',
        'wechatCanvasSpec' => 'setWechatCanvasSpec',
        'wechatMiniProgramSpec' => 'setWechatMiniProgramSpec',
        'wechatCanvasMiniProgramSpec' => 'setWechatCanvasMiniProgramSpec',
        'qqAppMiniProgramSpec' => 'setQqAppMiniProgramSpec',
        'simpleWechatCanvasSpec' => 'setSimpleWechatCanvasSpec',
        'wechatFocusDialogSpec' => 'setWechatFocusDialogSpec',
        'wechatConsultSpec' => 'setWechatConsultSpec',
        'wecomConsultSpec' => 'setWecomConsultSpec',
        'wechatOfficialAccountDetailSpec' => 'setWechatOfficialAccountDetailSpec',
        'appDeepLinkSpec' => 'setAppDeepLinkSpec',
        'appMarketSpec' => 'setAppMarketSpec',
        'androidDirectDownloadSpec' => 'setAndroidDirectDownloadSpec',
        'officialSpec' => 'setOfficialSpec',
        'h5ProfileSpec' => 'setH5ProfileSpec',
        'searchAreaBrandSpec' => 'setSearchAreaBrandSpec',
        'wechatChannelsProfileSpec' => 'setWechatChannelsProfileSpec',
        'h5Spec' => 'setH5Spec',
        'wechatMiniGameSpec' => 'setWechatMiniGameSpec',
        'wechatChannelsFeedSpec' => 'setWechatChannelsFeedSpec',
        'wechatChannelsReserveSpec' => 'setWechatChannelsReserveSpec',
        'androidQuickAppSpec' => 'setAndroidQuickAppSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'androidAppSpec' => 'getAndroidAppSpec',
        'iosAppSpec' => 'getIosAppSpec',
        'xjAndroidAppH5Spec' => 'getXjAndroidAppH5Spec',
        'xjIosAppH5Spec' => 'getXjIosAppH5Spec',
        'xjWebH5Spec' => 'getXjWebH5Spec',
        'xjQuickSpec' => 'getXjQuickSpec',
        'fengyeEcommmerceSpec' => 'getFengyeEcommmerceSpec',
        'wechatCanvasSpec' => 'getWechatCanvasSpec',
        'wechatMiniProgramSpec' => 'getWechatMiniProgramSpec',
        'wechatCanvasMiniProgramSpec' => 'getWechatCanvasMiniProgramSpec',
        'qqAppMiniProgramSpec' => 'getQqAppMiniProgramSpec',
        'simpleWechatCanvasSpec' => 'getSimpleWechatCanvasSpec',
        'wechatFocusDialogSpec' => 'getWechatFocusDialogSpec',
        'wechatConsultSpec' => 'getWechatConsultSpec',
        'wecomConsultSpec' => 'getWecomConsultSpec',
        'wechatOfficialAccountDetailSpec' => 'getWechatOfficialAccountDetailSpec',
        'appDeepLinkSpec' => 'getAppDeepLinkSpec',
        'appMarketSpec' => 'getAppMarketSpec',
        'androidDirectDownloadSpec' => 'getAndroidDirectDownloadSpec',
        'officialSpec' => 'getOfficialSpec',
        'h5ProfileSpec' => 'getH5ProfileSpec',
        'searchAreaBrandSpec' => 'getSearchAreaBrandSpec',
        'wechatChannelsProfileSpec' => 'getWechatChannelsProfileSpec',
        'h5Spec' => 'getH5Spec',
        'wechatMiniGameSpec' => 'getWechatMiniGameSpec',
        'wechatChannelsFeedSpec' => 'getWechatChannelsFeedSpec',
        'wechatChannelsReserveSpec' => 'getWechatChannelsReserveSpec',
        'androidQuickAppSpec' => 'getAndroidQuickAppSpec'
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
        $this->container['androidAppSpec'] = isset($data['androidAppSpec']) ? $data['androidAppSpec'] : null;
        $this->container['iosAppSpec'] = isset($data['iosAppSpec']) ? $data['iosAppSpec'] : null;
        $this->container['xjAndroidAppH5Spec'] = isset($data['xjAndroidAppH5Spec']) ? $data['xjAndroidAppH5Spec'] : null;
        $this->container['xjIosAppH5Spec'] = isset($data['xjIosAppH5Spec']) ? $data['xjIosAppH5Spec'] : null;
        $this->container['xjWebH5Spec'] = isset($data['xjWebH5Spec']) ? $data['xjWebH5Spec'] : null;
        $this->container['xjQuickSpec'] = isset($data['xjQuickSpec']) ? $data['xjQuickSpec'] : null;
        $this->container['fengyeEcommmerceSpec'] = isset($data['fengyeEcommmerceSpec']) ? $data['fengyeEcommmerceSpec'] : null;
        $this->container['wechatCanvasSpec'] = isset($data['wechatCanvasSpec']) ? $data['wechatCanvasSpec'] : null;
        $this->container['wechatMiniProgramSpec'] = isset($data['wechatMiniProgramSpec']) ? $data['wechatMiniProgramSpec'] : null;
        $this->container['wechatCanvasMiniProgramSpec'] = isset($data['wechatCanvasMiniProgramSpec']) ? $data['wechatCanvasMiniProgramSpec'] : null;
        $this->container['qqAppMiniProgramSpec'] = isset($data['qqAppMiniProgramSpec']) ? $data['qqAppMiniProgramSpec'] : null;
        $this->container['simpleWechatCanvasSpec'] = isset($data['simpleWechatCanvasSpec']) ? $data['simpleWechatCanvasSpec'] : null;
        $this->container['wechatFocusDialogSpec'] = isset($data['wechatFocusDialogSpec']) ? $data['wechatFocusDialogSpec'] : null;
        $this->container['wechatConsultSpec'] = isset($data['wechatConsultSpec']) ? $data['wechatConsultSpec'] : null;
        $this->container['wecomConsultSpec'] = isset($data['wecomConsultSpec']) ? $data['wecomConsultSpec'] : null;
        $this->container['wechatOfficialAccountDetailSpec'] = isset($data['wechatOfficialAccountDetailSpec']) ? $data['wechatOfficialAccountDetailSpec'] : null;
        $this->container['appDeepLinkSpec'] = isset($data['appDeepLinkSpec']) ? $data['appDeepLinkSpec'] : null;
        $this->container['appMarketSpec'] = isset($data['appMarketSpec']) ? $data['appMarketSpec'] : null;
        $this->container['androidDirectDownloadSpec'] = isset($data['androidDirectDownloadSpec']) ? $data['androidDirectDownloadSpec'] : null;
        $this->container['officialSpec'] = isset($data['officialSpec']) ? $data['officialSpec'] : null;
        $this->container['h5ProfileSpec'] = isset($data['h5ProfileSpec']) ? $data['h5ProfileSpec'] : null;
        $this->container['searchAreaBrandSpec'] = isset($data['searchAreaBrandSpec']) ? $data['searchAreaBrandSpec'] : null;
        $this->container['wechatChannelsProfileSpec'] = isset($data['wechatChannelsProfileSpec']) ? $data['wechatChannelsProfileSpec'] : null;
        $this->container['h5Spec'] = isset($data['h5Spec']) ? $data['h5Spec'] : null;
        $this->container['wechatMiniGameSpec'] = isset($data['wechatMiniGameSpec']) ? $data['wechatMiniGameSpec'] : null;
        $this->container['wechatChannelsFeedSpec'] = isset($data['wechatChannelsFeedSpec']) ? $data['wechatChannelsFeedSpec'] : null;
        $this->container['wechatChannelsReserveSpec'] = isset($data['wechatChannelsReserveSpec']) ? $data['wechatChannelsReserveSpec'] : null;
        $this->container['androidQuickAppSpec'] = isset($data['androidQuickAppSpec']) ? $data['androidQuickAppSpec'] : null;
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
     * Gets androidAppSpec
     *
     * @return \TencentAds\Model\V3\AndroidAppPageSpec|mixed
     */
    public function getAndroidAppSpec()
    {
        return $this->container['androidAppSpec'];
    }

    /**
     * Sets androidAppSpec
     *
     * @param \TencentAds\Model\V3\AndroidAppPageSpec|mixed $androidAppSpec androidAppSpec
     *
     * @return $this
     */
    public function setAndroidAppSpec($androidAppSpec)
    {
        $this->container['androidAppSpec'] = $androidAppSpec;

        return $this;
    }

    /**
     * Gets iosAppSpec
     *
     * @return \TencentAds\Model\V3\IosAppPageSpec|mixed
     */
    public function getIosAppSpec()
    {
        return $this->container['iosAppSpec'];
    }

    /**
     * Sets iosAppSpec
     *
     * @param \TencentAds\Model\V3\IosAppPageSpec|mixed $iosAppSpec iosAppSpec
     *
     * @return $this
     */
    public function setIosAppSpec($iosAppSpec)
    {
        $this->container['iosAppSpec'] = $iosAppSpec;

        return $this;
    }

    /**
     * Gets xjAndroidAppH5Spec
     *
     * @return \TencentAds\Model\V3\XjPageSpec|mixed
     */
    public function getXjAndroidAppH5Spec()
    {
        return $this->container['xjAndroidAppH5Spec'];
    }

    /**
     * Sets xjAndroidAppH5Spec
     *
     * @param \TencentAds\Model\V3\XjPageSpec|mixed $xjAndroidAppH5Spec xjAndroidAppH5Spec
     *
     * @return $this
     */
    public function setXjAndroidAppH5Spec($xjAndroidAppH5Spec)
    {
        $this->container['xjAndroidAppH5Spec'] = $xjAndroidAppH5Spec;

        return $this;
    }

    /**
     * Gets xjIosAppH5Spec
     *
     * @return \TencentAds\Model\V3\XjPageSpec|mixed
     */
    public function getXjIosAppH5Spec()
    {
        return $this->container['xjIosAppH5Spec'];
    }

    /**
     * Sets xjIosAppH5Spec
     *
     * @param \TencentAds\Model\V3\XjPageSpec|mixed $xjIosAppH5Spec xjIosAppH5Spec
     *
     * @return $this
     */
    public function setXjIosAppH5Spec($xjIosAppH5Spec)
    {
        $this->container['xjIosAppH5Spec'] = $xjIosAppH5Spec;

        return $this;
    }

    /**
     * Gets xjWebH5Spec
     *
     * @return \TencentAds\Model\V3\XjPageSpec|mixed
     */
    public function getXjWebH5Spec()
    {
        return $this->container['xjWebH5Spec'];
    }

    /**
     * Sets xjWebH5Spec
     *
     * @param \TencentAds\Model\V3\XjPageSpec|mixed $xjWebH5Spec xjWebH5Spec
     *
     * @return $this
     */
    public function setXjWebH5Spec($xjWebH5Spec)
    {
        $this->container['xjWebH5Spec'] = $xjWebH5Spec;

        return $this;
    }

    /**
     * Gets xjQuickSpec
     *
     * @return \TencentAds\Model\V3\XjPageSpec|mixed
     */
    public function getXjQuickSpec()
    {
        return $this->container['xjQuickSpec'];
    }

    /**
     * Sets xjQuickSpec
     *
     * @param \TencentAds\Model\V3\XjPageSpec|mixed $xjQuickSpec xjQuickSpec
     *
     * @return $this
     */
    public function setXjQuickSpec($xjQuickSpec)
    {
        $this->container['xjQuickSpec'] = $xjQuickSpec;

        return $this;
    }

    /**
     * Gets fengyeEcommmerceSpec
     *
     * @return \TencentAds\Model\V3\FengyePageSpec|mixed
     */
    public function getFengyeEcommmerceSpec()
    {
        return $this->container['fengyeEcommmerceSpec'];
    }

    /**
     * Sets fengyeEcommmerceSpec
     *
     * @param \TencentAds\Model\V3\FengyePageSpec|mixed $fengyeEcommmerceSpec fengyeEcommmerceSpec
     *
     * @return $this
     */
    public function setFengyeEcommmerceSpec($fengyeEcommmerceSpec)
    {
        $this->container['fengyeEcommmerceSpec'] = $fengyeEcommmerceSpec;

        return $this;
    }

    /**
     * Gets wechatCanvasSpec
     *
     * @return \TencentAds\Model\V3\CanvasWechatPageSpec|mixed
     */
    public function getWechatCanvasSpec()
    {
        return $this->container['wechatCanvasSpec'];
    }

    /**
     * Sets wechatCanvasSpec
     *
     * @param \TencentAds\Model\V3\CanvasWechatPageSpec|mixed $wechatCanvasSpec wechatCanvasSpec
     *
     * @return $this
     */
    public function setWechatCanvasSpec($wechatCanvasSpec)
    {
        $this->container['wechatCanvasSpec'] = $wechatCanvasSpec;

        return $this;
    }

    /**
     * Gets wechatMiniProgramSpec
     *
     * @return \TencentAds\Model\V3\WechatMiniProgramPageSpec|mixed
     */
    public function getWechatMiniProgramSpec()
    {
        return $this->container['wechatMiniProgramSpec'];
    }

    /**
     * Sets wechatMiniProgramSpec
     *
     * @param \TencentAds\Model\V3\WechatMiniProgramPageSpec|mixed $wechatMiniProgramSpec wechatMiniProgramSpec
     *
     * @return $this
     */
    public function setWechatMiniProgramSpec($wechatMiniProgramSpec)
    {
        $this->container['wechatMiniProgramSpec'] = $wechatMiniProgramSpec;

        return $this;
    }

    /**
     * Gets wechatCanvasMiniProgramSpec
     *
     * @return \TencentAds\Model\V3\CanvasWechatPageSpec|mixed
     */
    public function getWechatCanvasMiniProgramSpec()
    {
        return $this->container['wechatCanvasMiniProgramSpec'];
    }

    /**
     * Sets wechatCanvasMiniProgramSpec
     *
     * @param \TencentAds\Model\V3\CanvasWechatPageSpec|mixed $wechatCanvasMiniProgramSpec wechatCanvasMiniProgramSpec
     *
     * @return $this
     */
    public function setWechatCanvasMiniProgramSpec($wechatCanvasMiniProgramSpec)
    {
        $this->container['wechatCanvasMiniProgramSpec'] = $wechatCanvasMiniProgramSpec;

        return $this;
    }

    /**
     * Gets qqAppMiniProgramSpec
     *
     * @return \TencentAds\Model\V3\QqAppMiniProgramPageSpec|mixed
     */
    public function getQqAppMiniProgramSpec()
    {
        return $this->container['qqAppMiniProgramSpec'];
    }

    /**
     * Sets qqAppMiniProgramSpec
     *
     * @param \TencentAds\Model\V3\QqAppMiniProgramPageSpec|mixed $qqAppMiniProgramSpec qqAppMiniProgramSpec
     *
     * @return $this
     */
    public function setQqAppMiniProgramSpec($qqAppMiniProgramSpec)
    {
        $this->container['qqAppMiniProgramSpec'] = $qqAppMiniProgramSpec;

        return $this;
    }

    /**
     * Gets simpleWechatCanvasSpec
     *
     * @return \TencentAds\Model\V3\SimpleCanvasWechatSpec|mixed
     */
    public function getSimpleWechatCanvasSpec()
    {
        return $this->container['simpleWechatCanvasSpec'];
    }

    /**
     * Sets simpleWechatCanvasSpec
     *
     * @param \TencentAds\Model\V3\SimpleCanvasWechatSpec|mixed $simpleWechatCanvasSpec simpleWechatCanvasSpec
     *
     * @return $this
     */
    public function setSimpleWechatCanvasSpec($simpleWechatCanvasSpec)
    {
        $this->container['simpleWechatCanvasSpec'] = $simpleWechatCanvasSpec;

        return $this;
    }

    /**
     * Gets wechatFocusDialogSpec
     *
     * @return \TencentAds\Model\V3\WechatFocusDialog|mixed
     */
    public function getWechatFocusDialogSpec()
    {
        return $this->container['wechatFocusDialogSpec'];
    }

    /**
     * Sets wechatFocusDialogSpec
     *
     * @param \TencentAds\Model\V3\WechatFocusDialog|mixed $wechatFocusDialogSpec wechatFocusDialogSpec
     *
     * @return $this
     */
    public function setWechatFocusDialogSpec($wechatFocusDialogSpec)
    {
        $this->container['wechatFocusDialogSpec'] = $wechatFocusDialogSpec;

        return $this;
    }

    /**
     * Gets wechatConsultSpec
     *
     * @return \TencentAds\Model\V3\WechatConsultPageSpec|mixed
     */
    public function getWechatConsultSpec()
    {
        return $this->container['wechatConsultSpec'];
    }

    /**
     * Sets wechatConsultSpec
     *
     * @param \TencentAds\Model\V3\WechatConsultPageSpec|mixed $wechatConsultSpec wechatConsultSpec
     *
     * @return $this
     */
    public function setWechatConsultSpec($wechatConsultSpec)
    {
        $this->container['wechatConsultSpec'] = $wechatConsultSpec;

        return $this;
    }

    /**
     * Gets wecomConsultSpec
     *
     * @return \TencentAds\Model\V3\WecomConsultPageSpec|mixed
     */
    public function getWecomConsultSpec()
    {
        return $this->container['wecomConsultSpec'];
    }

    /**
     * Sets wecomConsultSpec
     *
     * @param \TencentAds\Model\V3\WecomConsultPageSpec|mixed $wecomConsultSpec wecomConsultSpec
     *
     * @return $this
     */
    public function setWecomConsultSpec($wecomConsultSpec)
    {
        $this->container['wecomConsultSpec'] = $wecomConsultSpec;

        return $this;
    }

    /**
     * Gets wechatOfficialAccountDetailSpec
     *
     * @return \TencentAds\Model\V3\WechatOfficialAccountDetailPageSpec|mixed
     */
    public function getWechatOfficialAccountDetailSpec()
    {
        return $this->container['wechatOfficialAccountDetailSpec'];
    }

    /**
     * Sets wechatOfficialAccountDetailSpec
     *
     * @param \TencentAds\Model\V3\WechatOfficialAccountDetailPageSpec|mixed $wechatOfficialAccountDetailSpec wechatOfficialAccountDetailSpec
     *
     * @return $this
     */
    public function setWechatOfficialAccountDetailSpec($wechatOfficialAccountDetailSpec)
    {
        $this->container['wechatOfficialAccountDetailSpec'] = $wechatOfficialAccountDetailSpec;

        return $this;
    }

    /**
     * Gets appDeepLinkSpec
     *
     * @return \TencentAds\Model\V3\AppDeepLinkPageSpec|mixed
     */
    public function getAppDeepLinkSpec()
    {
        return $this->container['appDeepLinkSpec'];
    }

    /**
     * Sets appDeepLinkSpec
     *
     * @param \TencentAds\Model\V3\AppDeepLinkPageSpec|mixed $appDeepLinkSpec appDeepLinkSpec
     *
     * @return $this
     */
    public function setAppDeepLinkSpec($appDeepLinkSpec)
    {
        $this->container['appDeepLinkSpec'] = $appDeepLinkSpec;

        return $this;
    }

    /**
     * Gets appMarketSpec
     *
     * @return \TencentAds\Model\V3\AppMarketPageSpec|mixed
     */
    public function getAppMarketSpec()
    {
        return $this->container['appMarketSpec'];
    }

    /**
     * Sets appMarketSpec
     *
     * @param \TencentAds\Model\V3\AppMarketPageSpec|mixed $appMarketSpec appMarketSpec
     *
     * @return $this
     */
    public function setAppMarketSpec($appMarketSpec)
    {
        $this->container['appMarketSpec'] = $appMarketSpec;

        return $this;
    }

    /**
     * Gets androidDirectDownloadSpec
     *
     * @return \TencentAds\Model\V3\AndroidDirectDownloadPageSpec|mixed
     */
    public function getAndroidDirectDownloadSpec()
    {
        return $this->container['androidDirectDownloadSpec'];
    }

    /**
     * Sets androidDirectDownloadSpec
     *
     * @param \TencentAds\Model\V3\AndroidDirectDownloadPageSpec|mixed $androidDirectDownloadSpec androidDirectDownloadSpec
     *
     * @return $this
     */
    public function setAndroidDirectDownloadSpec($androidDirectDownloadSpec)
    {
        $this->container['androidDirectDownloadSpec'] = $androidDirectDownloadSpec;

        return $this;
    }

    /**
     * Gets officialSpec
     *
     * @return \TencentAds\Model\V3\XjPageSpec|mixed
     */
    public function getOfficialSpec()
    {
        return $this->container['officialSpec'];
    }

    /**
     * Sets officialSpec
     *
     * @param \TencentAds\Model\V3\XjPageSpec|mixed $officialSpec officialSpec
     *
     * @return $this
     */
    public function setOfficialSpec($officialSpec)
    {
        $this->container['officialSpec'] = $officialSpec;

        return $this;
    }

    /**
     * Gets h5ProfileSpec
     *
     * @return \TencentAds\Model\V3\H5ProfilePageSpec|mixed
     */
    public function getH5ProfileSpec()
    {
        return $this->container['h5ProfileSpec'];
    }

    /**
     * Sets h5ProfileSpec
     *
     * @param \TencentAds\Model\V3\H5ProfilePageSpec|mixed $h5ProfileSpec h5ProfileSpec
     *
     * @return $this
     */
    public function setH5ProfileSpec($h5ProfileSpec)
    {
        $this->container['h5ProfileSpec'] = $h5ProfileSpec;

        return $this;
    }

    /**
     * Gets searchAreaBrandSpec
     *
     * @return \TencentAds\Model\V3\SearchAreaBrandPageSpec|mixed
     */
    public function getSearchAreaBrandSpec()
    {
        return $this->container['searchAreaBrandSpec'];
    }

    /**
     * Sets searchAreaBrandSpec
     *
     * @param \TencentAds\Model\V3\SearchAreaBrandPageSpec|mixed $searchAreaBrandSpec searchAreaBrandSpec
     *
     * @return $this
     */
    public function setSearchAreaBrandSpec($searchAreaBrandSpec)
    {
        $this->container['searchAreaBrandSpec'] = $searchAreaBrandSpec;

        return $this;
    }

    /**
     * Gets wechatChannelsProfileSpec
     *
     * @return \TencentAds\Model\V3\WechatChannelsPageSpec|mixed
     */
    public function getWechatChannelsProfileSpec()
    {
        return $this->container['wechatChannelsProfileSpec'];
    }

    /**
     * Sets wechatChannelsProfileSpec
     *
     * @param \TencentAds\Model\V3\WechatChannelsPageSpec|mixed $wechatChannelsProfileSpec wechatChannelsProfileSpec
     *
     * @return $this
     */
    public function setWechatChannelsProfileSpec($wechatChannelsProfileSpec)
    {
        $this->container['wechatChannelsProfileSpec'] = $wechatChannelsProfileSpec;

        return $this;
    }

    /**
     * Gets h5Spec
     *
     * @return \TencentAds\Model\V3\H5PageSpec|mixed
     */
    public function getH5Spec()
    {
        return $this->container['h5Spec'];
    }

    /**
     * Sets h5Spec
     *
     * @param \TencentAds\Model\V3\H5PageSpec|mixed $h5Spec h5Spec
     *
     * @return $this
     */
    public function setH5Spec($h5Spec)
    {
        $this->container['h5Spec'] = $h5Spec;

        return $this;
    }

    /**
     * Gets wechatMiniGameSpec
     *
     * @return \TencentAds\Model\V3\WechatMiniGamePageSpec|mixed
     */
    public function getWechatMiniGameSpec()
    {
        return $this->container['wechatMiniGameSpec'];
    }

    /**
     * Sets wechatMiniGameSpec
     *
     * @param \TencentAds\Model\V3\WechatMiniGamePageSpec|mixed $wechatMiniGameSpec wechatMiniGameSpec
     *
     * @return $this
     */
    public function setWechatMiniGameSpec($wechatMiniGameSpec)
    {
        $this->container['wechatMiniGameSpec'] = $wechatMiniGameSpec;

        return $this;
    }

    /**
     * Gets wechatChannelsFeedSpec
     *
     * @return \TencentAds\Model\V3\WechatChannelsFeedPageSpec|mixed
     */
    public function getWechatChannelsFeedSpec()
    {
        return $this->container['wechatChannelsFeedSpec'];
    }

    /**
     * Sets wechatChannelsFeedSpec
     *
     * @param \TencentAds\Model\V3\WechatChannelsFeedPageSpec|mixed $wechatChannelsFeedSpec wechatChannelsFeedSpec
     *
     * @return $this
     */
    public function setWechatChannelsFeedSpec($wechatChannelsFeedSpec)
    {
        $this->container['wechatChannelsFeedSpec'] = $wechatChannelsFeedSpec;

        return $this;
    }

    /**
     * Gets wechatChannelsReserveSpec
     *
     * @return \TencentAds\Model\V3\WechatChannelsReserveLivePageSpec|mixed
     */
    public function getWechatChannelsReserveSpec()
    {
        return $this->container['wechatChannelsReserveSpec'];
    }

    /**
     * Sets wechatChannelsReserveSpec
     *
     * @param \TencentAds\Model\V3\WechatChannelsReserveLivePageSpec|mixed $wechatChannelsReserveSpec wechatChannelsReserveSpec
     *
     * @return $this
     */
    public function setWechatChannelsReserveSpec($wechatChannelsReserveSpec)
    {
        $this->container['wechatChannelsReserveSpec'] = $wechatChannelsReserveSpec;

        return $this;
    }

    /**
     * Gets androidQuickAppSpec
     *
     * @return \TencentAds\Model\V3\AndroidQuickAppPageSpec|mixed
     */
    public function getAndroidQuickAppSpec()
    {
        return $this->container['androidQuickAppSpec'];
    }

    /**
     * Sets androidQuickAppSpec
     *
     * @param \TencentAds\Model\V3\AndroidQuickAppPageSpec|mixed $androidQuickAppSpec androidQuickAppSpec
     *
     * @return $this
     */
    public function setAndroidQuickAppSpec($androidQuickAppSpec)
    {
        $this->container['androidQuickAppSpec'] = $androidQuickAppSpec;

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

