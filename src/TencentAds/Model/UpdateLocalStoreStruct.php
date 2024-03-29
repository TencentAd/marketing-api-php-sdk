<?php
/**
 * UpdateLocalStoreStruct
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
 * UpdateLocalStoreStruct Class Doc Comment
 *
 * @category Class
 * @description 校验成功的门店poi信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateLocalStoreStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'update_local_store_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'poiId' => 'string',
        'localStoreBizInfo' => '\TencentAds\Model\LocalStoreBizInfoStruct',
        'wechatEcosystemAccounts' => '\TencentAds\Model\WechatEcosystemAccounts',
        'wechatWorkCorpId' => 'int',
        'wechatCustomerServiceLink' => 'string',
        'imageSet' => '\TencentAds\Model\ImageSetDataStruct[]',
        'recommendWords' => '\TencentAds\Model\RecommendWordStruct[]',
        'isUseStandardizedName' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'poiId' => null,
        'localStoreBizInfo' => null,
        'wechatEcosystemAccounts' => null,
        'wechatWorkCorpId' => 'int64',
        'wechatCustomerServiceLink' => null,
        'imageSet' => null,
        'recommendWords' => null,
        'isUseStandardizedName' => null
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
        'poiId' => 'poi_id',
        'localStoreBizInfo' => 'local_store_biz_info',
        'wechatEcosystemAccounts' => 'wechat_ecosystem_accounts',
        'wechatWorkCorpId' => 'wechat_work_corp_id',
        'wechatCustomerServiceLink' => 'wechat_customer_service_link',
        'imageSet' => 'image_set',
        'recommendWords' => 'recommend_words',
        'isUseStandardizedName' => 'is_use_standardized_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'poiId' => 'setPoiId',
        'localStoreBizInfo' => 'setLocalStoreBizInfo',
        'wechatEcosystemAccounts' => 'setWechatEcosystemAccounts',
        'wechatWorkCorpId' => 'setWechatWorkCorpId',
        'wechatCustomerServiceLink' => 'setWechatCustomerServiceLink',
        'imageSet' => 'setImageSet',
        'recommendWords' => 'setRecommendWords',
        'isUseStandardizedName' => 'setIsUseStandardizedName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'poiId' => 'getPoiId',
        'localStoreBizInfo' => 'getLocalStoreBizInfo',
        'wechatEcosystemAccounts' => 'getWechatEcosystemAccounts',
        'wechatWorkCorpId' => 'getWechatWorkCorpId',
        'wechatCustomerServiceLink' => 'getWechatCustomerServiceLink',
        'imageSet' => 'getImageSet',
        'recommendWords' => 'getRecommendWords',
        'isUseStandardizedName' => 'getIsUseStandardizedName'
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
        $this->container['poiId'] = isset($data['poiId']) ? $data['poiId'] : null;
        $this->container['localStoreBizInfo'] = isset($data['localStoreBizInfo']) ? $data['localStoreBizInfo'] : null;
        $this->container['wechatEcosystemAccounts'] = isset($data['wechatEcosystemAccounts']) ? $data['wechatEcosystemAccounts'] : null;
        $this->container['wechatWorkCorpId'] = isset($data['wechatWorkCorpId']) ? $data['wechatWorkCorpId'] : null;
        $this->container['wechatCustomerServiceLink'] = isset($data['wechatCustomerServiceLink']) ? $data['wechatCustomerServiceLink'] : null;
        $this->container['imageSet'] = isset($data['imageSet']) ? $data['imageSet'] : null;
        $this->container['recommendWords'] = isset($data['recommendWords']) ? $data['recommendWords'] : null;
        $this->container['isUseStandardizedName'] = isset($data['isUseStandardizedName']) ? $data['isUseStandardizedName'] : null;
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
     * Gets poiId
     *
     * @return string|mixed
     */
    public function getPoiId()
    {
        return $this->container['poiId'];
    }

    /**
     * Sets poiId
     *
     * @param string|mixed $poiId poiId
     *
     * @return $this
     */
    public function setPoiId($poiId)
    {
        $this->container['poiId'] = $poiId;

        return $this;
    }

    /**
     * Gets localStoreBizInfo
     *
     * @return \TencentAds\Model\LocalStoreBizInfoStruct|mixed
     */
    public function getLocalStoreBizInfo()
    {
        return $this->container['localStoreBizInfo'];
    }

    /**
     * Sets localStoreBizInfo
     *
     * @param \TencentAds\Model\LocalStoreBizInfoStruct|mixed $localStoreBizInfo localStoreBizInfo
     *
     * @return $this
     */
    public function setLocalStoreBizInfo($localStoreBizInfo)
    {
        $this->container['localStoreBizInfo'] = $localStoreBizInfo;

        return $this;
    }

    /**
     * Gets wechatEcosystemAccounts
     *
     * @return \TencentAds\Model\WechatEcosystemAccounts|mixed
     */
    public function getWechatEcosystemAccounts()
    {
        return $this->container['wechatEcosystemAccounts'];
    }

    /**
     * Sets wechatEcosystemAccounts
     *
     * @param \TencentAds\Model\WechatEcosystemAccounts|mixed $wechatEcosystemAccounts wechatEcosystemAccounts
     *
     * @return $this
     */
    public function setWechatEcosystemAccounts($wechatEcosystemAccounts)
    {
        $this->container['wechatEcosystemAccounts'] = $wechatEcosystemAccounts;

        return $this;
    }

    /**
     * Gets wechatWorkCorpId
     *
     * @return int|mixed
     */
    public function getWechatWorkCorpId()
    {
        return $this->container['wechatWorkCorpId'];
    }

    /**
     * Sets wechatWorkCorpId
     *
     * @param int|mixed $wechatWorkCorpId wechatWorkCorpId
     *
     * @return $this
     */
    public function setWechatWorkCorpId($wechatWorkCorpId)
    {
        $this->container['wechatWorkCorpId'] = $wechatWorkCorpId;

        return $this;
    }

    /**
     * Gets wechatCustomerServiceLink
     *
     * @return string|mixed
     */
    public function getWechatCustomerServiceLink()
    {
        return $this->container['wechatCustomerServiceLink'];
    }

    /**
     * Sets wechatCustomerServiceLink
     *
     * @param string|mixed $wechatCustomerServiceLink wechatCustomerServiceLink
     *
     * @return $this
     */
    public function setWechatCustomerServiceLink($wechatCustomerServiceLink)
    {
        $this->container['wechatCustomerServiceLink'] = $wechatCustomerServiceLink;

        return $this;
    }

    /**
     * Gets imageSet
     *
     * @return \TencentAds\Model\ImageSetDataStruct[]|mixed
     */
    public function getImageSet()
    {
        return $this->container['imageSet'];
    }

    /**
     * Sets imageSet
     *
     * @param \TencentAds\Model\ImageSetDataStruct[]|mixed $imageSet imageSet
     *
     * @return $this
     */
    public function setImageSet($imageSet)
    {
        $this->container['imageSet'] = $imageSet;

        return $this;
    }

    /**
     * Gets recommendWords
     *
     * @return \TencentAds\Model\RecommendWordStruct[]|mixed
     */
    public function getRecommendWords()
    {
        return $this->container['recommendWords'];
    }

    /**
     * Sets recommendWords
     *
     * @param \TencentAds\Model\RecommendWordStruct[]|mixed $recommendWords recommendWords
     *
     * @return $this
     */
    public function setRecommendWords($recommendWords)
    {
        $this->container['recommendWords'] = $recommendWords;

        return $this;
    }

    /**
     * Gets isUseStandardizedName
     *
     * @return bool|mixed
     */
    public function getIsUseStandardizedName()
    {
        return $this->container['isUseStandardizedName'];
    }

    /**
     * Sets isUseStandardizedName
     *
     * @param bool|mixed $isUseStandardizedName isUseStandardizedName
     *
     * @return $this
     */
    public function setIsUseStandardizedName($isUseStandardizedName)
    {
        $this->container['isUseStandardizedName'] = $isUseStandardizedName;

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


