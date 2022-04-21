<?php
/**
 * ActionsUserId
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
 * ActionsUserId Class Doc Comment
 *
 * @category Class
 * @description 用户标识，app数据上报时必填，web数据上报时可以不填user_id，但建议填写，方便后续优化
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActionsUserId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'actions_user_id';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hashImei' => 'string',
        'md5Sha256Imei' => 'string',
        'hashIdfa' => 'string',
        'md5Sha256Idfa' => 'string',
        'gdtOpenid' => 'string',
        'hashPhone' => 'string',
        'sha256Phone' => 'string',
        'hashAndroidId' => 'string',
        'hashOaid' => 'string',
        'md5Sha256Oaid' => 'string',
        'wechatOpenid' => 'string',
        'wechatUnionid' => 'string',
        'wechatAppId' => 'string',
        'caid' => 'string',
        'caidVersion' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hashImei' => null,
        'md5Sha256Imei' => null,
        'hashIdfa' => null,
        'md5Sha256Idfa' => null,
        'gdtOpenid' => null,
        'hashPhone' => null,
        'sha256Phone' => null,
        'hashAndroidId' => null,
        'hashOaid' => null,
        'md5Sha256Oaid' => null,
        'wechatOpenid' => null,
        'wechatUnionid' => null,
        'wechatAppId' => null,
        'caid' => null,
        'caidVersion' => 'int64'
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
        'hashImei' => 'hash_imei',
        'md5Sha256Imei' => 'md5_sha256_imei',
        'hashIdfa' => 'hash_idfa',
        'md5Sha256Idfa' => 'md5_sha256_idfa',
        'gdtOpenid' => 'gdt_openid',
        'hashPhone' => 'hash_phone',
        'sha256Phone' => 'sha256_phone',
        'hashAndroidId' => 'hash_android_id',
        'hashOaid' => 'hash_oaid',
        'md5Sha256Oaid' => 'md5_sha256_oaid',
        'wechatOpenid' => 'wechat_openid',
        'wechatUnionid' => 'wechat_unionid',
        'wechatAppId' => 'wechat_app_id',
        'caid' => 'caid',
        'caidVersion' => 'caid_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hashImei' => 'setHashImei',
        'md5Sha256Imei' => 'setMd5Sha256Imei',
        'hashIdfa' => 'setHashIdfa',
        'md5Sha256Idfa' => 'setMd5Sha256Idfa',
        'gdtOpenid' => 'setGdtOpenid',
        'hashPhone' => 'setHashPhone',
        'sha256Phone' => 'setSha256Phone',
        'hashAndroidId' => 'setHashAndroidId',
        'hashOaid' => 'setHashOaid',
        'md5Sha256Oaid' => 'setMd5Sha256Oaid',
        'wechatOpenid' => 'setWechatOpenid',
        'wechatUnionid' => 'setWechatUnionid',
        'wechatAppId' => 'setWechatAppId',
        'caid' => 'setCaid',
        'caidVersion' => 'setCaidVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hashImei' => 'getHashImei',
        'md5Sha256Imei' => 'getMd5Sha256Imei',
        'hashIdfa' => 'getHashIdfa',
        'md5Sha256Idfa' => 'getMd5Sha256Idfa',
        'gdtOpenid' => 'getGdtOpenid',
        'hashPhone' => 'getHashPhone',
        'sha256Phone' => 'getSha256Phone',
        'hashAndroidId' => 'getHashAndroidId',
        'hashOaid' => 'getHashOaid',
        'md5Sha256Oaid' => 'getMd5Sha256Oaid',
        'wechatOpenid' => 'getWechatOpenid',
        'wechatUnionid' => 'getWechatUnionid',
        'wechatAppId' => 'getWechatAppId',
        'caid' => 'getCaid',
        'caidVersion' => 'getCaidVersion'
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
        $this->container['hashImei'] = isset($data['hashImei']) ? $data['hashImei'] : null;
        $this->container['md5Sha256Imei'] = isset($data['md5Sha256Imei']) ? $data['md5Sha256Imei'] : null;
        $this->container['hashIdfa'] = isset($data['hashIdfa']) ? $data['hashIdfa'] : null;
        $this->container['md5Sha256Idfa'] = isset($data['md5Sha256Idfa']) ? $data['md5Sha256Idfa'] : null;
        $this->container['gdtOpenid'] = isset($data['gdtOpenid']) ? $data['gdtOpenid'] : null;
        $this->container['hashPhone'] = isset($data['hashPhone']) ? $data['hashPhone'] : null;
        $this->container['sha256Phone'] = isset($data['sha256Phone']) ? $data['sha256Phone'] : null;
        $this->container['hashAndroidId'] = isset($data['hashAndroidId']) ? $data['hashAndroidId'] : null;
        $this->container['hashOaid'] = isset($data['hashOaid']) ? $data['hashOaid'] : null;
        $this->container['md5Sha256Oaid'] = isset($data['md5Sha256Oaid']) ? $data['md5Sha256Oaid'] : null;
        $this->container['wechatOpenid'] = isset($data['wechatOpenid']) ? $data['wechatOpenid'] : null;
        $this->container['wechatUnionid'] = isset($data['wechatUnionid']) ? $data['wechatUnionid'] : null;
        $this->container['wechatAppId'] = isset($data['wechatAppId']) ? $data['wechatAppId'] : null;
        $this->container['caid'] = isset($data['caid']) ? $data['caid'] : null;
        $this->container['caidVersion'] = isset($data['caidVersion']) ? $data['caidVersion'] : null;
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
     * Gets hashImei
     *
     * @return string|mixed
     */
    public function getHashImei()
    {
        return $this->container['hashImei'];
    }

    /**
     * Sets hashImei
     *
     * @param string|mixed $hashImei hashImei
     *
     * @return $this
     */
    public function setHashImei($hashImei)
    {
        $this->container['hashImei'] = $hashImei;

        return $this;
    }

    /**
     * Gets md5Sha256Imei
     *
     * @return string|mixed
     */
    public function getMd5Sha256Imei()
    {
        return $this->container['md5Sha256Imei'];
    }

    /**
     * Sets md5Sha256Imei
     *
     * @param string|mixed $md5Sha256Imei md5Sha256Imei
     *
     * @return $this
     */
    public function setMd5Sha256Imei($md5Sha256Imei)
    {
        $this->container['md5Sha256Imei'] = $md5Sha256Imei;

        return $this;
    }

    /**
     * Gets hashIdfa
     *
     * @return string|mixed
     */
    public function getHashIdfa()
    {
        return $this->container['hashIdfa'];
    }

    /**
     * Sets hashIdfa
     *
     * @param string|mixed $hashIdfa hashIdfa
     *
     * @return $this
     */
    public function setHashIdfa($hashIdfa)
    {
        $this->container['hashIdfa'] = $hashIdfa;

        return $this;
    }

    /**
     * Gets md5Sha256Idfa
     *
     * @return string|mixed
     */
    public function getMd5Sha256Idfa()
    {
        return $this->container['md5Sha256Idfa'];
    }

    /**
     * Sets md5Sha256Idfa
     *
     * @param string|mixed $md5Sha256Idfa md5Sha256Idfa
     *
     * @return $this
     */
    public function setMd5Sha256Idfa($md5Sha256Idfa)
    {
        $this->container['md5Sha256Idfa'] = $md5Sha256Idfa;

        return $this;
    }

    /**
     * Gets gdtOpenid
     *
     * @return string|mixed
     */
    public function getGdtOpenid()
    {
        return $this->container['gdtOpenid'];
    }

    /**
     * Sets gdtOpenid
     *
     * @param string|mixed $gdtOpenid gdtOpenid
     *
     * @return $this
     */
    public function setGdtOpenid($gdtOpenid)
    {
        $this->container['gdtOpenid'] = $gdtOpenid;

        return $this;
    }

    /**
     * Gets hashPhone
     *
     * @return string|mixed
     */
    public function getHashPhone()
    {
        return $this->container['hashPhone'];
    }

    /**
     * Sets hashPhone
     *
     * @param string|mixed $hashPhone hashPhone
     *
     * @return $this
     */
    public function setHashPhone($hashPhone)
    {
        $this->container['hashPhone'] = $hashPhone;

        return $this;
    }

    /**
     * Gets sha256Phone
     *
     * @return string|mixed
     */
    public function getSha256Phone()
    {
        return $this->container['sha256Phone'];
    }

    /**
     * Sets sha256Phone
     *
     * @param string|mixed $sha256Phone sha256Phone
     *
     * @return $this
     */
    public function setSha256Phone($sha256Phone)
    {
        $this->container['sha256Phone'] = $sha256Phone;

        return $this;
    }

    /**
     * Gets hashAndroidId
     *
     * @return string|mixed
     */
    public function getHashAndroidId()
    {
        return $this->container['hashAndroidId'];
    }

    /**
     * Sets hashAndroidId
     *
     * @param string|mixed $hashAndroidId hashAndroidId
     *
     * @return $this
     */
    public function setHashAndroidId($hashAndroidId)
    {
        $this->container['hashAndroidId'] = $hashAndroidId;

        return $this;
    }

    /**
     * Gets hashOaid
     *
     * @return string|mixed
     */
    public function getHashOaid()
    {
        return $this->container['hashOaid'];
    }

    /**
     * Sets hashOaid
     *
     * @param string|mixed $hashOaid hashOaid
     *
     * @return $this
     */
    public function setHashOaid($hashOaid)
    {
        $this->container['hashOaid'] = $hashOaid;

        return $this;
    }

    /**
     * Gets md5Sha256Oaid
     *
     * @return string|mixed
     */
    public function getMd5Sha256Oaid()
    {
        return $this->container['md5Sha256Oaid'];
    }

    /**
     * Sets md5Sha256Oaid
     *
     * @param string|mixed $md5Sha256Oaid md5Sha256Oaid
     *
     * @return $this
     */
    public function setMd5Sha256Oaid($md5Sha256Oaid)
    {
        $this->container['md5Sha256Oaid'] = $md5Sha256Oaid;

        return $this;
    }

    /**
     * Gets wechatOpenid
     *
     * @return string|mixed
     */
    public function getWechatOpenid()
    {
        return $this->container['wechatOpenid'];
    }

    /**
     * Sets wechatOpenid
     *
     * @param string|mixed $wechatOpenid wechatOpenid
     *
     * @return $this
     */
    public function setWechatOpenid($wechatOpenid)
    {
        $this->container['wechatOpenid'] = $wechatOpenid;

        return $this;
    }

    /**
     * Gets wechatUnionid
     *
     * @return string|mixed
     */
    public function getWechatUnionid()
    {
        return $this->container['wechatUnionid'];
    }

    /**
     * Sets wechatUnionid
     *
     * @param string|mixed $wechatUnionid wechatUnionid
     *
     * @return $this
     */
    public function setWechatUnionid($wechatUnionid)
    {
        $this->container['wechatUnionid'] = $wechatUnionid;

        return $this;
    }

    /**
     * Gets wechatAppId
     *
     * @return string|mixed
     */
    public function getWechatAppId()
    {
        return $this->container['wechatAppId'];
    }

    /**
     * Sets wechatAppId
     *
     * @param string|mixed $wechatAppId wechatAppId
     *
     * @return $this
     */
    public function setWechatAppId($wechatAppId)
    {
        $this->container['wechatAppId'] = $wechatAppId;

        return $this;
    }

    /**
     * Gets caid
     *
     * @return string|mixed
     */
    public function getCaid()
    {
        return $this->container['caid'];
    }

    /**
     * Sets caid
     *
     * @param string|mixed $caid caid
     *
     * @return $this
     */
    public function setCaid($caid)
    {
        $this->container['caid'] = $caid;

        return $this;
    }

    /**
     * Gets caidVersion
     *
     * @return int|mixed
     */
    public function getCaidVersion()
    {
        return $this->container['caidVersion'];
    }

    /**
     * Sets caidVersion
     *
     * @param int|mixed $caidVersion caidVersion
     *
     * @return $this
     */
    public function setCaidVersion($caidVersion)
    {
        $this->container['caidVersion'] = $caidVersion;

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


