<?php
/**
 * CanvasFloatButtonSpecType
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
 * CanvasFloatButtonSpecType Class Doc Comment
 *
 * @category Class
 * @description 悬浮组件元素
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CanvasFloatButtonSpecType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'canvas_float_button_spec_type';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'styleType' => 'int',
        'imageIdList' => 'string',
        'title' => 'string',
        'titleColor' => 'string',
        'desc' => 'string',
        'descColor' => 'string',
        'appearType' => 'int',
        'disappearType' => 'int',
        'forbidPageList' => 'int[]',
        'elementType' => '\TencentAds\Model\V3\CanvasFloatElementType',
        'appDownloadSpec' => '\TencentAds\Model\V3\FloatAppDownloadSpec',
        'weappSpec' => '\TencentAds\Model\V3\FloatWeappSpec',
        'ghSpec' => '\TencentAds\Model\V3\FloatGhSpec',
        'enterpriseWxSpec' => '\TencentAds\Model\V3\FloatEnterpriseWxSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'styleType' => 'int64',
        'imageIdList' => null,
        'title' => null,
        'titleColor' => null,
        'desc' => null,
        'descColor' => null,
        'appearType' => 'int64',
        'disappearType' => 'int64',
        'forbidPageList' => 'int64',
        'elementType' => null,
        'appDownloadSpec' => null,
        'weappSpec' => null,
        'ghSpec' => null,
        'enterpriseWxSpec' => null
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
        'styleType' => 'style_type',
        'imageIdList' => 'image_id_list',
        'title' => 'title',
        'titleColor' => 'title_color',
        'desc' => 'desc',
        'descColor' => 'desc_color',
        'appearType' => 'appear_type',
        'disappearType' => 'disappear_type',
        'forbidPageList' => 'forbid_page_list',
        'elementType' => 'element_type',
        'appDownloadSpec' => 'app_download_spec',
        'weappSpec' => 'weapp_spec',
        'ghSpec' => 'gh_spec',
        'enterpriseWxSpec' => 'enterprise_wx_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'styleType' => 'setStyleType',
        'imageIdList' => 'setImageIdList',
        'title' => 'setTitle',
        'titleColor' => 'setTitleColor',
        'desc' => 'setDesc',
        'descColor' => 'setDescColor',
        'appearType' => 'setAppearType',
        'disappearType' => 'setDisappearType',
        'forbidPageList' => 'setForbidPageList',
        'elementType' => 'setElementType',
        'appDownloadSpec' => 'setAppDownloadSpec',
        'weappSpec' => 'setWeappSpec',
        'ghSpec' => 'setGhSpec',
        'enterpriseWxSpec' => 'setEnterpriseWxSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'styleType' => 'getStyleType',
        'imageIdList' => 'getImageIdList',
        'title' => 'getTitle',
        'titleColor' => 'getTitleColor',
        'desc' => 'getDesc',
        'descColor' => 'getDescColor',
        'appearType' => 'getAppearType',
        'disappearType' => 'getDisappearType',
        'forbidPageList' => 'getForbidPageList',
        'elementType' => 'getElementType',
        'appDownloadSpec' => 'getAppDownloadSpec',
        'weappSpec' => 'getWeappSpec',
        'ghSpec' => 'getGhSpec',
        'enterpriseWxSpec' => 'getEnterpriseWxSpec'
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
        $this->container['styleType'] = isset($data['styleType']) ? $data['styleType'] : null;
        $this->container['imageIdList'] = isset($data['imageIdList']) ? $data['imageIdList'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['titleColor'] = isset($data['titleColor']) ? $data['titleColor'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['descColor'] = isset($data['descColor']) ? $data['descColor'] : null;
        $this->container['appearType'] = isset($data['appearType']) ? $data['appearType'] : null;
        $this->container['disappearType'] = isset($data['disappearType']) ? $data['disappearType'] : null;
        $this->container['forbidPageList'] = isset($data['forbidPageList']) ? $data['forbidPageList'] : null;
        $this->container['elementType'] = isset($data['elementType']) ? $data['elementType'] : null;
        $this->container['appDownloadSpec'] = isset($data['appDownloadSpec']) ? $data['appDownloadSpec'] : null;
        $this->container['weappSpec'] = isset($data['weappSpec']) ? $data['weappSpec'] : null;
        $this->container['ghSpec'] = isset($data['ghSpec']) ? $data['ghSpec'] : null;
        $this->container['enterpriseWxSpec'] = isset($data['enterpriseWxSpec']) ? $data['enterpriseWxSpec'] : null;
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
     * Gets styleType
     *
     * @return int|mixed
     */
    public function getStyleType()
    {
        return $this->container['styleType'];
    }

    /**
     * Sets styleType
     *
     * @param int|mixed $styleType styleType
     *
     * @return $this
     */
    public function setStyleType($styleType)
    {
        $this->container['styleType'] = $styleType;

        return $this;
    }

    /**
     * Gets imageIdList
     *
     * @return string|mixed
     */
    public function getImageIdList()
    {
        return $this->container['imageIdList'];
    }

    /**
     * Sets imageIdList
     *
     * @param string|mixed $imageIdList imageIdList
     *
     * @return $this
     */
    public function setImageIdList($imageIdList)
    {
        $this->container['imageIdList'] = $imageIdList;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|mixed
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|mixed $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets titleColor
     *
     * @return string|mixed
     */
    public function getTitleColor()
    {
        return $this->container['titleColor'];
    }

    /**
     * Sets titleColor
     *
     * @param string|mixed $titleColor titleColor
     *
     * @return $this
     */
    public function setTitleColor($titleColor)
    {
        $this->container['titleColor'] = $titleColor;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|mixed
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|mixed $desc desc
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets descColor
     *
     * @return string|mixed
     */
    public function getDescColor()
    {
        return $this->container['descColor'];
    }

    /**
     * Sets descColor
     *
     * @param string|mixed $descColor descColor
     *
     * @return $this
     */
    public function setDescColor($descColor)
    {
        $this->container['descColor'] = $descColor;

        return $this;
    }

    /**
     * Gets appearType
     *
     * @return int|mixed
     */
    public function getAppearType()
    {
        return $this->container['appearType'];
    }

    /**
     * Sets appearType
     *
     * @param int|mixed $appearType appearType
     *
     * @return $this
     */
    public function setAppearType($appearType)
    {
        $this->container['appearType'] = $appearType;

        return $this;
    }

    /**
     * Gets disappearType
     *
     * @return int|mixed
     */
    public function getDisappearType()
    {
        return $this->container['disappearType'];
    }

    /**
     * Sets disappearType
     *
     * @param int|mixed $disappearType disappearType
     *
     * @return $this
     */
    public function setDisappearType($disappearType)
    {
        $this->container['disappearType'] = $disappearType;

        return $this;
    }

    /**
     * Gets forbidPageList
     *
     * @return int[]|mixed
     */
    public function getForbidPageList()
    {
        return $this->container['forbidPageList'];
    }

    /**
     * Sets forbidPageList
     *
     * @param int[]|mixed $forbidPageList forbidPageList
     *
     * @return $this
     */
    public function setForbidPageList($forbidPageList)
    {
        $this->container['forbidPageList'] = $forbidPageList;

        return $this;
    }

    /**
     * Gets elementType
     *
     * @return \TencentAds\Model\V3\CanvasFloatElementType|mixed
     */
    public function getElementType()
    {
        return $this->container['elementType'];
    }

    /**
     * Sets elementType
     *
     * @param \TencentAds\Model\V3\CanvasFloatElementType|mixed $elementType elementType
     *
     * @return $this
     */
    public function setElementType($elementType)
    {
        $this->container['elementType'] = $elementType;

        return $this;
    }

    /**
     * Gets appDownloadSpec
     *
     * @return \TencentAds\Model\V3\FloatAppDownloadSpec|mixed
     */
    public function getAppDownloadSpec()
    {
        return $this->container['appDownloadSpec'];
    }

    /**
     * Sets appDownloadSpec
     *
     * @param \TencentAds\Model\V3\FloatAppDownloadSpec|mixed $appDownloadSpec appDownloadSpec
     *
     * @return $this
     */
    public function setAppDownloadSpec($appDownloadSpec)
    {
        $this->container['appDownloadSpec'] = $appDownloadSpec;

        return $this;
    }

    /**
     * Gets weappSpec
     *
     * @return \TencentAds\Model\V3\FloatWeappSpec|mixed
     */
    public function getWeappSpec()
    {
        return $this->container['weappSpec'];
    }

    /**
     * Sets weappSpec
     *
     * @param \TencentAds\Model\V3\FloatWeappSpec|mixed $weappSpec weappSpec
     *
     * @return $this
     */
    public function setWeappSpec($weappSpec)
    {
        $this->container['weappSpec'] = $weappSpec;

        return $this;
    }

    /**
     * Gets ghSpec
     *
     * @return \TencentAds\Model\V3\FloatGhSpec|mixed
     */
    public function getGhSpec()
    {
        return $this->container['ghSpec'];
    }

    /**
     * Sets ghSpec
     *
     * @param \TencentAds\Model\V3\FloatGhSpec|mixed $ghSpec ghSpec
     *
     * @return $this
     */
    public function setGhSpec($ghSpec)
    {
        $this->container['ghSpec'] = $ghSpec;

        return $this;
    }

    /**
     * Gets enterpriseWxSpec
     *
     * @return \TencentAds\Model\V3\FloatEnterpriseWxSpec|mixed
     */
    public function getEnterpriseWxSpec()
    {
        return $this->container['enterpriseWxSpec'];
    }

    /**
     * Sets enterpriseWxSpec
     *
     * @param \TencentAds\Model\V3\FloatEnterpriseWxSpec|mixed $enterpriseWxSpec enterpriseWxSpec
     *
     * @return $this
     */
    public function setEnterpriseWxSpec($enterpriseWxSpec)
    {
        $this->container['enterpriseWxSpec'] = $enterpriseWxSpec;

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


