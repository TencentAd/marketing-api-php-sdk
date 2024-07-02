<?php
/**
 * RedEnvelopeStruct
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
 * RedEnvelopeStruct Class Doc Comment
 *
 * @category Class
 * @description 剧情红包组件
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RedEnvelopeStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'red_envelope_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'redEnvelopeSwitch' => 'bool',
        'redEnvelopeImageId' => 'string',
        'redEnvelopeExtraSceneId' => 'string',
        'redEnvelopeAppearTimeMs' => 'int',
        'redEnvelopeDisappearTimeMs' => 'int',
        'redEnvelopeOriginExtraSceneId' => 'string',
        'redBarrageSwitch' => 'bool',
        'plotType' => '\TencentAds\Model\PlotType',
        'plotWechatStatusFooterSwitch' => 'bool',
        'plotFrameColor' => 'string',
        'plotSendWord' => 'string',
        'plotSignText' => 'string',
        'plotSignImage' => 'string',
        'plotBrandLogo' => 'string',
        'plotOriginalMaterial' => '\TencentAds\Model\PlotOriginalMaterial'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'redEnvelopeSwitch' => null,
        'redEnvelopeImageId' => null,
        'redEnvelopeExtraSceneId' => null,
        'redEnvelopeAppearTimeMs' => 'int64',
        'redEnvelopeDisappearTimeMs' => 'int64',
        'redEnvelopeOriginExtraSceneId' => null,
        'redBarrageSwitch' => null,
        'plotType' => null,
        'plotWechatStatusFooterSwitch' => null,
        'plotFrameColor' => null,
        'plotSendWord' => null,
        'plotSignText' => null,
        'plotSignImage' => null,
        'plotBrandLogo' => null,
        'plotOriginalMaterial' => null
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
        'redEnvelopeSwitch' => 'red_envelope_switch',
        'redEnvelopeImageId' => 'red_envelope_image_id',
        'redEnvelopeExtraSceneId' => 'red_envelope_extra_scene_id',
        'redEnvelopeAppearTimeMs' => 'red_envelope_appear_time_ms',
        'redEnvelopeDisappearTimeMs' => 'red_envelope_disappear_time_ms',
        'redEnvelopeOriginExtraSceneId' => 'red_envelope_origin_extra_scene_id',
        'redBarrageSwitch' => 'red_barrage_switch',
        'plotType' => 'plot_type',
        'plotWechatStatusFooterSwitch' => 'plot_wechat_status_footer_switch',
        'plotFrameColor' => 'plot_frame_color',
        'plotSendWord' => 'plot_send_word',
        'plotSignText' => 'plot_sign_text',
        'plotSignImage' => 'plot_sign_image',
        'plotBrandLogo' => 'plot_brand_logo',
        'plotOriginalMaterial' => 'plot_original_material'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redEnvelopeSwitch' => 'setRedEnvelopeSwitch',
        'redEnvelopeImageId' => 'setRedEnvelopeImageId',
        'redEnvelopeExtraSceneId' => 'setRedEnvelopeExtraSceneId',
        'redEnvelopeAppearTimeMs' => 'setRedEnvelopeAppearTimeMs',
        'redEnvelopeDisappearTimeMs' => 'setRedEnvelopeDisappearTimeMs',
        'redEnvelopeOriginExtraSceneId' => 'setRedEnvelopeOriginExtraSceneId',
        'redBarrageSwitch' => 'setRedBarrageSwitch',
        'plotType' => 'setPlotType',
        'plotWechatStatusFooterSwitch' => 'setPlotWechatStatusFooterSwitch',
        'plotFrameColor' => 'setPlotFrameColor',
        'plotSendWord' => 'setPlotSendWord',
        'plotSignText' => 'setPlotSignText',
        'plotSignImage' => 'setPlotSignImage',
        'plotBrandLogo' => 'setPlotBrandLogo',
        'plotOriginalMaterial' => 'setPlotOriginalMaterial'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redEnvelopeSwitch' => 'getRedEnvelopeSwitch',
        'redEnvelopeImageId' => 'getRedEnvelopeImageId',
        'redEnvelopeExtraSceneId' => 'getRedEnvelopeExtraSceneId',
        'redEnvelopeAppearTimeMs' => 'getRedEnvelopeAppearTimeMs',
        'redEnvelopeDisappearTimeMs' => 'getRedEnvelopeDisappearTimeMs',
        'redEnvelopeOriginExtraSceneId' => 'getRedEnvelopeOriginExtraSceneId',
        'redBarrageSwitch' => 'getRedBarrageSwitch',
        'plotType' => 'getPlotType',
        'plotWechatStatusFooterSwitch' => 'getPlotWechatStatusFooterSwitch',
        'plotFrameColor' => 'getPlotFrameColor',
        'plotSendWord' => 'getPlotSendWord',
        'plotSignText' => 'getPlotSignText',
        'plotSignImage' => 'getPlotSignImage',
        'plotBrandLogo' => 'getPlotBrandLogo',
        'plotOriginalMaterial' => 'getPlotOriginalMaterial'
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
        $this->container['redEnvelopeSwitch'] = isset($data['redEnvelopeSwitch']) ? $data['redEnvelopeSwitch'] : null;
        $this->container['redEnvelopeImageId'] = isset($data['redEnvelopeImageId']) ? $data['redEnvelopeImageId'] : null;
        $this->container['redEnvelopeExtraSceneId'] = isset($data['redEnvelopeExtraSceneId']) ? $data['redEnvelopeExtraSceneId'] : null;
        $this->container['redEnvelopeAppearTimeMs'] = isset($data['redEnvelopeAppearTimeMs']) ? $data['redEnvelopeAppearTimeMs'] : null;
        $this->container['redEnvelopeDisappearTimeMs'] = isset($data['redEnvelopeDisappearTimeMs']) ? $data['redEnvelopeDisappearTimeMs'] : null;
        $this->container['redEnvelopeOriginExtraSceneId'] = isset($data['redEnvelopeOriginExtraSceneId']) ? $data['redEnvelopeOriginExtraSceneId'] : null;
        $this->container['redBarrageSwitch'] = isset($data['redBarrageSwitch']) ? $data['redBarrageSwitch'] : null;
        $this->container['plotType'] = isset($data['plotType']) ? $data['plotType'] : null;
        $this->container['plotWechatStatusFooterSwitch'] = isset($data['plotWechatStatusFooterSwitch']) ? $data['plotWechatStatusFooterSwitch'] : null;
        $this->container['plotFrameColor'] = isset($data['plotFrameColor']) ? $data['plotFrameColor'] : null;
        $this->container['plotSendWord'] = isset($data['plotSendWord']) ? $data['plotSendWord'] : null;
        $this->container['plotSignText'] = isset($data['plotSignText']) ? $data['plotSignText'] : null;
        $this->container['plotSignImage'] = isset($data['plotSignImage']) ? $data['plotSignImage'] : null;
        $this->container['plotBrandLogo'] = isset($data['plotBrandLogo']) ? $data['plotBrandLogo'] : null;
        $this->container['plotOriginalMaterial'] = isset($data['plotOriginalMaterial']) ? $data['plotOriginalMaterial'] : null;
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
     * Gets redEnvelopeSwitch
     *
     * @return bool|mixed
     */
    public function getRedEnvelopeSwitch()
    {
        return $this->container['redEnvelopeSwitch'];
    }

    /**
     * Sets redEnvelopeSwitch
     *
     * @param bool|mixed $redEnvelopeSwitch redEnvelopeSwitch
     *
     * @return $this
     */
    public function setRedEnvelopeSwitch($redEnvelopeSwitch)
    {
        $this->container['redEnvelopeSwitch'] = $redEnvelopeSwitch;

        return $this;
    }

    /**
     * Gets redEnvelopeImageId
     *
     * @return string|mixed
     */
    public function getRedEnvelopeImageId()
    {
        return $this->container['redEnvelopeImageId'];
    }

    /**
     * Sets redEnvelopeImageId
     *
     * @param string|mixed $redEnvelopeImageId redEnvelopeImageId
     *
     * @return $this
     */
    public function setRedEnvelopeImageId($redEnvelopeImageId)
    {
        $this->container['redEnvelopeImageId'] = $redEnvelopeImageId;

        return $this;
    }

    /**
     * Gets redEnvelopeExtraSceneId
     *
     * @return string|mixed
     */
    public function getRedEnvelopeExtraSceneId()
    {
        return $this->container['redEnvelopeExtraSceneId'];
    }

    /**
     * Sets redEnvelopeExtraSceneId
     *
     * @param string|mixed $redEnvelopeExtraSceneId redEnvelopeExtraSceneId
     *
     * @return $this
     */
    public function setRedEnvelopeExtraSceneId($redEnvelopeExtraSceneId)
    {
        $this->container['redEnvelopeExtraSceneId'] = $redEnvelopeExtraSceneId;

        return $this;
    }

    /**
     * Gets redEnvelopeAppearTimeMs
     *
     * @return int|mixed
     */
    public function getRedEnvelopeAppearTimeMs()
    {
        return $this->container['redEnvelopeAppearTimeMs'];
    }

    /**
     * Sets redEnvelopeAppearTimeMs
     *
     * @param int|mixed $redEnvelopeAppearTimeMs redEnvelopeAppearTimeMs
     *
     * @return $this
     */
    public function setRedEnvelopeAppearTimeMs($redEnvelopeAppearTimeMs)
    {
        $this->container['redEnvelopeAppearTimeMs'] = $redEnvelopeAppearTimeMs;

        return $this;
    }

    /**
     * Gets redEnvelopeDisappearTimeMs
     *
     * @return int|mixed
     */
    public function getRedEnvelopeDisappearTimeMs()
    {
        return $this->container['redEnvelopeDisappearTimeMs'];
    }

    /**
     * Sets redEnvelopeDisappearTimeMs
     *
     * @param int|mixed $redEnvelopeDisappearTimeMs redEnvelopeDisappearTimeMs
     *
     * @return $this
     */
    public function setRedEnvelopeDisappearTimeMs($redEnvelopeDisappearTimeMs)
    {
        $this->container['redEnvelopeDisappearTimeMs'] = $redEnvelopeDisappearTimeMs;

        return $this;
    }

    /**
     * Gets redEnvelopeOriginExtraSceneId
     *
     * @return string|mixed
     */
    public function getRedEnvelopeOriginExtraSceneId()
    {
        return $this->container['redEnvelopeOriginExtraSceneId'];
    }

    /**
     * Sets redEnvelopeOriginExtraSceneId
     *
     * @param string|mixed $redEnvelopeOriginExtraSceneId redEnvelopeOriginExtraSceneId
     *
     * @return $this
     */
    public function setRedEnvelopeOriginExtraSceneId($redEnvelopeOriginExtraSceneId)
    {
        $this->container['redEnvelopeOriginExtraSceneId'] = $redEnvelopeOriginExtraSceneId;

        return $this;
    }

    /**
     * Gets redBarrageSwitch
     *
     * @return bool|mixed
     */
    public function getRedBarrageSwitch()
    {
        return $this->container['redBarrageSwitch'];
    }

    /**
     * Sets redBarrageSwitch
     *
     * @param bool|mixed $redBarrageSwitch redBarrageSwitch
     *
     * @return $this
     */
    public function setRedBarrageSwitch($redBarrageSwitch)
    {
        $this->container['redBarrageSwitch'] = $redBarrageSwitch;

        return $this;
    }

    /**
     * Gets plotType
     *
     * @return \TencentAds\Model\PlotType|mixed
     */
    public function getPlotType()
    {
        return $this->container['plotType'];
    }

    /**
     * Sets plotType
     *
     * @param \TencentAds\Model\PlotType|mixed $plotType plotType
     *
     * @return $this
     */
    public function setPlotType($plotType)
    {
        $this->container['plotType'] = $plotType;

        return $this;
    }

    /**
     * Gets plotWechatStatusFooterSwitch
     *
     * @return bool|mixed
     */
    public function getPlotWechatStatusFooterSwitch()
    {
        return $this->container['plotWechatStatusFooterSwitch'];
    }

    /**
     * Sets plotWechatStatusFooterSwitch
     *
     * @param bool|mixed $plotWechatStatusFooterSwitch plotWechatStatusFooterSwitch
     *
     * @return $this
     */
    public function setPlotWechatStatusFooterSwitch($plotWechatStatusFooterSwitch)
    {
        $this->container['plotWechatStatusFooterSwitch'] = $plotWechatStatusFooterSwitch;

        return $this;
    }

    /**
     * Gets plotFrameColor
     *
     * @return string|mixed
     */
    public function getPlotFrameColor()
    {
        return $this->container['plotFrameColor'];
    }

    /**
     * Sets plotFrameColor
     *
     * @param string|mixed $plotFrameColor plotFrameColor
     *
     * @return $this
     */
    public function setPlotFrameColor($plotFrameColor)
    {
        $this->container['plotFrameColor'] = $plotFrameColor;

        return $this;
    }

    /**
     * Gets plotSendWord
     *
     * @return string|mixed
     */
    public function getPlotSendWord()
    {
        return $this->container['plotSendWord'];
    }

    /**
     * Sets plotSendWord
     *
     * @param string|mixed $plotSendWord plotSendWord
     *
     * @return $this
     */
    public function setPlotSendWord($plotSendWord)
    {
        $this->container['plotSendWord'] = $plotSendWord;

        return $this;
    }

    /**
     * Gets plotSignText
     *
     * @return string|mixed
     */
    public function getPlotSignText()
    {
        return $this->container['plotSignText'];
    }

    /**
     * Sets plotSignText
     *
     * @param string|mixed $plotSignText plotSignText
     *
     * @return $this
     */
    public function setPlotSignText($plotSignText)
    {
        $this->container['plotSignText'] = $plotSignText;

        return $this;
    }

    /**
     * Gets plotSignImage
     *
     * @return string|mixed
     */
    public function getPlotSignImage()
    {
        return $this->container['plotSignImage'];
    }

    /**
     * Sets plotSignImage
     *
     * @param string|mixed $plotSignImage plotSignImage
     *
     * @return $this
     */
    public function setPlotSignImage($plotSignImage)
    {
        $this->container['plotSignImage'] = $plotSignImage;

        return $this;
    }

    /**
     * Gets plotBrandLogo
     *
     * @return string|mixed
     */
    public function getPlotBrandLogo()
    {
        return $this->container['plotBrandLogo'];
    }

    /**
     * Sets plotBrandLogo
     *
     * @param string|mixed $plotBrandLogo plotBrandLogo
     *
     * @return $this
     */
    public function setPlotBrandLogo($plotBrandLogo)
    {
        $this->container['plotBrandLogo'] = $plotBrandLogo;

        return $this;
    }

    /**
     * Gets plotOriginalMaterial
     *
     * @return \TencentAds\Model\PlotOriginalMaterial|mixed
     */
    public function getPlotOriginalMaterial()
    {
        return $this->container['plotOriginalMaterial'];
    }

    /**
     * Sets plotOriginalMaterial
     *
     * @param \TencentAds\Model\PlotOriginalMaterial|mixed $plotOriginalMaterial plotOriginalMaterial
     *
     * @return $this
     */
    public function setPlotOriginalMaterial($plotOriginalMaterial)
    {
        $this->container['plotOriginalMaterial'] = $plotOriginalMaterial;

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


