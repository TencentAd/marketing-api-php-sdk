<?php
/**
 * SceneTargetingForWrite
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
 * SceneTargetingForWrite Class Doc Comment
 *
 * @category Class
 * @description 场景定向
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SceneTargetingForWrite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'scene_targeting_for_write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mobileUnion' => 'string[]',
        'excludeMobileUnion' => 'string[]',
        'unionPositionPackage' => 'int[]',
        'excludeUnionPositionPackage' => 'int[]',
        'tencentNews' => 'string[]',
        'displayScene' => 'string[]',
        'wechatScene' => '\TencentAds\Model\V3\WechatScene',
        'wechatPosition' => 'int[]',
        'mobileUnionCategory' => 'int[]',
        'qbsearchScene' => 'string[]',
        'wechatChannelsScene' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mobileUnion' => null,
        'excludeMobileUnion' => null,
        'unionPositionPackage' => 'int64',
        'excludeUnionPositionPackage' => 'int64',
        'tencentNews' => null,
        'displayScene' => null,
        'wechatScene' => null,
        'wechatPosition' => 'int64',
        'mobileUnionCategory' => 'int64',
        'qbsearchScene' => null,
        'wechatChannelsScene' => 'int64'
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
        'unionPositionPackage' => 'union_position_package',
        'excludeUnionPositionPackage' => 'exclude_union_position_package',
        'tencentNews' => 'tencent_news',
        'displayScene' => 'display_scene',
        'wechatScene' => 'wechat_scene',
        'wechatPosition' => 'wechat_position',
        'mobileUnionCategory' => 'mobile_union_category',
        'qbsearchScene' => 'qbsearch_scene',
        'wechatChannelsScene' => 'wechat_channels_scene'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobileUnion' => 'setMobileUnion',
        'excludeMobileUnion' => 'setExcludeMobileUnion',
        'unionPositionPackage' => 'setUnionPositionPackage',
        'excludeUnionPositionPackage' => 'setExcludeUnionPositionPackage',
        'tencentNews' => 'setTencentNews',
        'displayScene' => 'setDisplayScene',
        'wechatScene' => 'setWechatScene',
        'wechatPosition' => 'setWechatPosition',
        'mobileUnionCategory' => 'setMobileUnionCategory',
        'qbsearchScene' => 'setQbsearchScene',
        'wechatChannelsScene' => 'setWechatChannelsScene'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobileUnion' => 'getMobileUnion',
        'excludeMobileUnion' => 'getExcludeMobileUnion',
        'unionPositionPackage' => 'getUnionPositionPackage',
        'excludeUnionPositionPackage' => 'getExcludeUnionPositionPackage',
        'tencentNews' => 'getTencentNews',
        'displayScene' => 'getDisplayScene',
        'wechatScene' => 'getWechatScene',
        'wechatPosition' => 'getWechatPosition',
        'mobileUnionCategory' => 'getMobileUnionCategory',
        'qbsearchScene' => 'getQbsearchScene',
        'wechatChannelsScene' => 'getWechatChannelsScene'
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
        $this->container['unionPositionPackage'] = isset($data['unionPositionPackage']) ? $data['unionPositionPackage'] : null;
        $this->container['excludeUnionPositionPackage'] = isset($data['excludeUnionPositionPackage']) ? $data['excludeUnionPositionPackage'] : null;
        $this->container['tencentNews'] = isset($data['tencentNews']) ? $data['tencentNews'] : null;
        $this->container['displayScene'] = isset($data['displayScene']) ? $data['displayScene'] : null;
        $this->container['wechatScene'] = isset($data['wechatScene']) ? $data['wechatScene'] : null;
        $this->container['wechatPosition'] = isset($data['wechatPosition']) ? $data['wechatPosition'] : null;
        $this->container['mobileUnionCategory'] = isset($data['mobileUnionCategory']) ? $data['mobileUnionCategory'] : null;
        $this->container['qbsearchScene'] = isset($data['qbsearchScene']) ? $data['qbsearchScene'] : null;
        $this->container['wechatChannelsScene'] = isset($data['wechatChannelsScene']) ? $data['wechatChannelsScene'] : null;
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
     * Gets wechatScene
     *
     * @return \TencentAds\Model\V3\WechatScene|mixed
     */
    public function getWechatScene()
    {
        return $this->container['wechatScene'];
    }

    /**
     * Sets wechatScene
     *
     * @param \TencentAds\Model\V3\WechatScene|mixed $wechatScene wechatScene
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

