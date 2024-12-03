<?php
/**
 * SceneTargeting
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
 * SceneTargeting Class Doc Comment
 *
 * @category Class
 * @description 场景定向
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SceneTargeting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'scene_targeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mobileUnion' => 'string[]',
        'excludeMobileUnion' => 'string[]',
        'mobileUnionIndustry' => 'string[]',
        'unionPositionPackage' => 'int[]',
        'excludeUnionPositionPackage' => 'int[]',
        'displayScene' => 'string[]',
        'mobileUnionCategory' => 'int[]',
        'tencentNews' => 'string[]',
        'wechatScene' => '\TencentAds\Model\WechatScene',
        'wechatPosition' => 'int[]',
        'qbsearchScene' => 'string[]',
        'wechatChannelsScene' => 'int[]',
        'wechatSearchScene' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mobileUnion' => null,
        'excludeMobileUnion' => null,
        'mobileUnionIndustry' => null,
        'unionPositionPackage' => 'int64',
        'excludeUnionPositionPackage' => 'int64',
        'displayScene' => null,
        'mobileUnionCategory' => 'int64',
        'tencentNews' => null,
        'wechatScene' => null,
        'wechatPosition' => 'int64',
        'qbsearchScene' => null,
        'wechatChannelsScene' => 'int64',
        'wechatSearchScene' => null
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
        'mobileUnion' => 'mobile_union',
        'excludeMobileUnion' => 'exclude_mobile_union',
        'mobileUnionIndustry' => 'mobile_union_industry',
        'unionPositionPackage' => 'union_position_package',
        'excludeUnionPositionPackage' => 'exclude_union_position_package',
        'displayScene' => 'display_scene',
        'mobileUnionCategory' => 'mobile_union_category',
        'tencentNews' => 'tencent_news',
        'wechatScene' => 'wechat_scene',
        'wechatPosition' => 'wechat_position',
        'qbsearchScene' => 'qbsearch_scene',
        'wechatChannelsScene' => 'wechat_channels_scene',
        'wechatSearchScene' => 'wechat_search_scene'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobileUnion' => 'setMobileUnion',
        'excludeMobileUnion' => 'setExcludeMobileUnion',
        'mobileUnionIndustry' => 'setMobileUnionIndustry',
        'unionPositionPackage' => 'setUnionPositionPackage',
        'excludeUnionPositionPackage' => 'setExcludeUnionPositionPackage',
        'displayScene' => 'setDisplayScene',
        'mobileUnionCategory' => 'setMobileUnionCategory',
        'tencentNews' => 'setTencentNews',
        'wechatScene' => 'setWechatScene',
        'wechatPosition' => 'setWechatPosition',
        'qbsearchScene' => 'setQbsearchScene',
        'wechatChannelsScene' => 'setWechatChannelsScene',
        'wechatSearchScene' => 'setWechatSearchScene'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobileUnion' => 'getMobileUnion',
        'excludeMobileUnion' => 'getExcludeMobileUnion',
        'mobileUnionIndustry' => 'getMobileUnionIndustry',
        'unionPositionPackage' => 'getUnionPositionPackage',
        'excludeUnionPositionPackage' => 'getExcludeUnionPositionPackage',
        'displayScene' => 'getDisplayScene',
        'mobileUnionCategory' => 'getMobileUnionCategory',
        'tencentNews' => 'getTencentNews',
        'wechatScene' => 'getWechatScene',
        'wechatPosition' => 'getWechatPosition',
        'qbsearchScene' => 'getQbsearchScene',
        'wechatChannelsScene' => 'getWechatChannelsScene',
        'wechatSearchScene' => 'getWechatSearchScene'
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
        $this->container['mobileUnion'] = isset($data['mobileUnion']) ? $data['mobileUnion'] : null;
        $this->container['excludeMobileUnion'] = isset($data['excludeMobileUnion']) ? $data['excludeMobileUnion'] : null;
        $this->container['mobileUnionIndustry'] = isset($data['mobileUnionIndustry']) ? $data['mobileUnionIndustry'] : null;
        $this->container['unionPositionPackage'] = isset($data['unionPositionPackage']) ? $data['unionPositionPackage'] : null;
        $this->container['excludeUnionPositionPackage'] = isset($data['excludeUnionPositionPackage']) ? $data['excludeUnionPositionPackage'] : null;
        $this->container['displayScene'] = isset($data['displayScene']) ? $data['displayScene'] : null;
        $this->container['mobileUnionCategory'] = isset($data['mobileUnionCategory']) ? $data['mobileUnionCategory'] : null;
        $this->container['tencentNews'] = isset($data['tencentNews']) ? $data['tencentNews'] : null;
        $this->container['wechatScene'] = isset($data['wechatScene']) ? $data['wechatScene'] : null;
        $this->container['wechatPosition'] = isset($data['wechatPosition']) ? $data['wechatPosition'] : null;
        $this->container['qbsearchScene'] = isset($data['qbsearchScene']) ? $data['qbsearchScene'] : null;
        $this->container['wechatChannelsScene'] = isset($data['wechatChannelsScene']) ? $data['wechatChannelsScene'] : null;
        $this->container['wechatSearchScene'] = isset($data['wechatSearchScene']) ? $data['wechatSearchScene'] : null;
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
     * Gets mobileUnion
     *
     * @return string[]|mixed
     */
    public function getMobileUnion()
    {
        return $this->container['mobileUnion'];
    }

    /**
     * Sets mobileUnion
     *
     * @param string[]|mixed $mobileUnion mobileUnion
     *
     * @return $this
     */
    public function setMobileUnion($mobileUnion)
    {
        $this->container['mobileUnion'] = $mobileUnion;

        return $this;
    }

    /**
     * Gets excludeMobileUnion
     *
     * @return string[]|mixed
     */
    public function getExcludeMobileUnion()
    {
        return $this->container['excludeMobileUnion'];
    }

    /**
     * Sets excludeMobileUnion
     *
     * @param string[]|mixed $excludeMobileUnion excludeMobileUnion
     *
     * @return $this
     */
    public function setExcludeMobileUnion($excludeMobileUnion)
    {
        $this->container['excludeMobileUnion'] = $excludeMobileUnion;

        return $this;
    }

    /**
     * Gets mobileUnionIndustry
     *
     * @return string[]|mixed
     */
    public function getMobileUnionIndustry()
    {
        return $this->container['mobileUnionIndustry'];
    }

    /**
     * Sets mobileUnionIndustry
     *
     * @param string[]|mixed $mobileUnionIndustry mobileUnionIndustry
     *
     * @return $this
     */
    public function setMobileUnionIndustry($mobileUnionIndustry)
    {
        $this->container['mobileUnionIndustry'] = $mobileUnionIndustry;

        return $this;
    }

    /**
     * Gets unionPositionPackage
     *
     * @return int[]|mixed
     */
    public function getUnionPositionPackage()
    {
        return $this->container['unionPositionPackage'];
    }

    /**
     * Sets unionPositionPackage
     *
     * @param int[]|mixed $unionPositionPackage unionPositionPackage
     *
     * @return $this
     */
    public function setUnionPositionPackage($unionPositionPackage)
    {
        $this->container['unionPositionPackage'] = $unionPositionPackage;

        return $this;
    }

    /**
     * Gets excludeUnionPositionPackage
     *
     * @return int[]|mixed
     */
    public function getExcludeUnionPositionPackage()
    {
        return $this->container['excludeUnionPositionPackage'];
    }

    /**
     * Sets excludeUnionPositionPackage
     *
     * @param int[]|mixed $excludeUnionPositionPackage excludeUnionPositionPackage
     *
     * @return $this
     */
    public function setExcludeUnionPositionPackage($excludeUnionPositionPackage)
    {
        $this->container['excludeUnionPositionPackage'] = $excludeUnionPositionPackage;

        return $this;
    }

    /**
     * Gets displayScene
     *
     * @return string[]|mixed
     */
    public function getDisplayScene()
    {
        return $this->container['displayScene'];
    }

    /**
     * Sets displayScene
     *
     * @param string[]|mixed $displayScene displayScene
     *
     * @return $this
     */
    public function setDisplayScene($displayScene)
    {
        $this->container['displayScene'] = $displayScene;

        return $this;
    }

    /**
     * Gets mobileUnionCategory
     *
     * @return int[]|mixed
     */
    public function getMobileUnionCategory()
    {
        return $this->container['mobileUnionCategory'];
    }

    /**
     * Sets mobileUnionCategory
     *
     * @param int[]|mixed $mobileUnionCategory mobileUnionCategory
     *
     * @return $this
     */
    public function setMobileUnionCategory($mobileUnionCategory)
    {
        $this->container['mobileUnionCategory'] = $mobileUnionCategory;

        return $this;
    }

    /**
     * Gets tencentNews
     *
     * @return string[]|mixed
     */
    public function getTencentNews()
    {
        return $this->container['tencentNews'];
    }

    /**
     * Sets tencentNews
     *
     * @param string[]|mixed $tencentNews tencentNews
     *
     * @return $this
     */
    public function setTencentNews($tencentNews)
    {
        $this->container['tencentNews'] = $tencentNews;

        return $this;
    }

    /**
     * Gets wechatScene
     *
     * @return \TencentAds\Model\WechatScene|mixed
     */
    public function getWechatScene()
    {
        return $this->container['wechatScene'];
    }

    /**
     * Sets wechatScene
     *
     * @param \TencentAds\Model\WechatScene|mixed $wechatScene wechatScene
     *
     * @return $this
     */
    public function setWechatScene($wechatScene)
    {
        $this->container['wechatScene'] = $wechatScene;

        return $this;
    }

    /**
     * Gets wechatPosition
     *
     * @return int[]|mixed
     */
    public function getWechatPosition()
    {
        return $this->container['wechatPosition'];
    }

    /**
     * Sets wechatPosition
     *
     * @param int[]|mixed $wechatPosition wechatPosition
     *
     * @return $this
     */
    public function setWechatPosition($wechatPosition)
    {
        $this->container['wechatPosition'] = $wechatPosition;

        return $this;
    }

    /**
     * Gets qbsearchScene
     *
     * @return string[]|mixed
     */
    public function getQbsearchScene()
    {
        return $this->container['qbsearchScene'];
    }

    /**
     * Sets qbsearchScene
     *
     * @param string[]|mixed $qbsearchScene qbsearchScene
     *
     * @return $this
     */
    public function setQbsearchScene($qbsearchScene)
    {
        $this->container['qbsearchScene'] = $qbsearchScene;

        return $this;
    }

    /**
     * Gets wechatChannelsScene
     *
     * @return int[]|mixed
     */
    public function getWechatChannelsScene()
    {
        return $this->container['wechatChannelsScene'];
    }

    /**
     * Sets wechatChannelsScene
     *
     * @param int[]|mixed $wechatChannelsScene wechatChannelsScene
     *
     * @return $this
     */
    public function setWechatChannelsScene($wechatChannelsScene)
    {
        $this->container['wechatChannelsScene'] = $wechatChannelsScene;

        return $this;
    }

    /**
     * Gets wechatSearchScene
     *
     * @return string[]|mixed
     */
    public function getWechatSearchScene()
    {
        return $this->container['wechatSearchScene'];
    }

    /**
     * Sets wechatSearchScene
     *
     * @param string[]|mixed $wechatSearchScene wechatSearchScene
     *
     * @return $this
     */
    public function setWechatSearchScene($wechatSearchScene)
    {
        $this->container['wechatSearchScene'] = $wechatSearchScene;

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


