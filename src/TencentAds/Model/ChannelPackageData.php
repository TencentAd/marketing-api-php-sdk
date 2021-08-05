<?php
/**
 * ChannelPackageData
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
 * ChannelPackageData Class Doc Comment
 *
 * @category Class
 * @description 渠道包信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelPackageData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'channel_package_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'androidAppId' => 'int',
        'packageName' => 'string',
        'packageDownloadUrl' => 'string',
        'channelPackageId' => 'string',
        'versionCode' => 'int',
        'versionName' => 'string',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'systemStatus' => '\TencentAds\Model\PackageSysStatus',
        'auditStatus' => '\TencentAds\Model\PackageAuditStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'androidAppId' => 'int64',
        'packageName' => null,
        'packageDownloadUrl' => null,
        'channelPackageId' => null,
        'versionCode' => 'int64',
        'versionName' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'systemStatus' => null,
        'auditStatus' => null
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
        'androidAppId' => 'android_app_id',
        'packageName' => 'package_name',
        'packageDownloadUrl' => 'package_download_url',
        'channelPackageId' => 'channel_package_id',
        'versionCode' => 'version_code',
        'versionName' => 'version_name',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'systemStatus' => 'system_status',
        'auditStatus' => 'audit_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'androidAppId' => 'setAndroidAppId',
        'packageName' => 'setPackageName',
        'packageDownloadUrl' => 'setPackageDownloadUrl',
        'channelPackageId' => 'setChannelPackageId',
        'versionCode' => 'setVersionCode',
        'versionName' => 'setVersionName',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'systemStatus' => 'setSystemStatus',
        'auditStatus' => 'setAuditStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'androidAppId' => 'getAndroidAppId',
        'packageName' => 'getPackageName',
        'packageDownloadUrl' => 'getPackageDownloadUrl',
        'channelPackageId' => 'getChannelPackageId',
        'versionCode' => 'getVersionCode',
        'versionName' => 'getVersionName',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'systemStatus' => 'getSystemStatus',
        'auditStatus' => 'getAuditStatus'
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
        $this->container['androidAppId'] = isset($data['androidAppId']) ? $data['androidAppId'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['packageDownloadUrl'] = isset($data['packageDownloadUrl']) ? $data['packageDownloadUrl'] : null;
        $this->container['channelPackageId'] = isset($data['channelPackageId']) ? $data['channelPackageId'] : null;
        $this->container['versionCode'] = isset($data['versionCode']) ? $data['versionCode'] : null;
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['systemStatus'] = isset($data['systemStatus']) ? $data['systemStatus'] : null;
        $this->container['auditStatus'] = isset($data['auditStatus']) ? $data['auditStatus'] : null;
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
     * Gets androidAppId
     *
     * @return int|mixed
     */
    public function getAndroidAppId()
    {
        return $this->container['androidAppId'];
    }

    /**
     * Sets androidAppId
     *
     * @param int|mixed $androidAppId androidAppId
     *
     * @return $this
     */
    public function setAndroidAppId($androidAppId)
    {
        $this->container['androidAppId'] = $androidAppId;

        return $this;
    }

    /**
     * Gets packageName
     *
     * @return string|mixed
     */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
     * Sets packageName
     *
     * @param string|mixed $packageName packageName
     *
     * @return $this
     */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;

        return $this;
    }

    /**
     * Gets packageDownloadUrl
     *
     * @return string|mixed
     */
    public function getPackageDownloadUrl()
    {
        return $this->container['packageDownloadUrl'];
    }

    /**
     * Sets packageDownloadUrl
     *
     * @param string|mixed $packageDownloadUrl packageDownloadUrl
     *
     * @return $this
     */
    public function setPackageDownloadUrl($packageDownloadUrl)
    {
        $this->container['packageDownloadUrl'] = $packageDownloadUrl;

        return $this;
    }

    /**
     * Gets channelPackageId
     *
     * @return string|mixed
     */
    public function getChannelPackageId()
    {
        return $this->container['channelPackageId'];
    }

    /**
     * Sets channelPackageId
     *
     * @param string|mixed $channelPackageId channelPackageId
     *
     * @return $this
     */
    public function setChannelPackageId($channelPackageId)
    {
        $this->container['channelPackageId'] = $channelPackageId;

        return $this;
    }

    /**
     * Gets versionCode
     *
     * @return int|mixed
     */
    public function getVersionCode()
    {
        return $this->container['versionCode'];
    }

    /**
     * Sets versionCode
     *
     * @param int|mixed $versionCode versionCode
     *
     * @return $this
     */
    public function setVersionCode($versionCode)
    {
        $this->container['versionCode'] = $versionCode;

        return $this;
    }

    /**
     * Gets versionName
     *
     * @return string|mixed
     */
    public function getVersionName()
    {
        return $this->container['versionName'];
    }

    /**
     * Sets versionName
     *
     * @param string|mixed $versionName versionName
     *
     * @return $this
     */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return int|mixed
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param int|mixed $createdTime createdTime
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets lastModifiedTime
     *
     * @return int|mixed
     */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
     * Sets lastModifiedTime
     *
     * @param int|mixed $lastModifiedTime lastModifiedTime
     *
     * @return $this
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;

        return $this;
    }

    /**
     * Gets systemStatus
     *
     * @return \TencentAds\Model\PackageSysStatus|mixed
     */
    public function getSystemStatus()
    {
        return $this->container['systemStatus'];
    }

    /**
     * Sets systemStatus
     *
     * @param \TencentAds\Model\PackageSysStatus|mixed $systemStatus systemStatus
     *
     * @return $this
     */
    public function setSystemStatus($systemStatus)
    {
        $this->container['systemStatus'] = $systemStatus;

        return $this;
    }

    /**
     * Gets auditStatus
     *
     * @return \TencentAds\Model\PackageAuditStatus|mixed
     */
    public function getAuditStatus()
    {
        return $this->container['auditStatus'];
    }

    /**
     * Sets auditStatus
     *
     * @param \TencentAds\Model\PackageAuditStatus|mixed $auditStatus auditStatus
     *
     * @return $this
     */
    public function setAuditStatus($auditStatus)
    {
        $this->container['auditStatus'] = $auditStatus;

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


