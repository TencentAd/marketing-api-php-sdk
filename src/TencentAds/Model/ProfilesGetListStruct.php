<?php
/**
 * ProfilesGetListStruct
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
 * ProfilesGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfilesGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProfilesGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ownerId' => 'int',
        'profileType' => '\TencentAds\Model\ProfileType',
        'profileId' => 'int',
        'promotedObjectType' => '\TencentAds\Model\PromotedObjectType',
        'promotedObjectId' => 'string',
        'headImageId' => 'string',
        'headImageUrl' => 'string',
        'profileName' => 'string',
        'description' => 'string',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'profileUrl' => 'string',
        'systemStatus' => '\TencentAds\Model\AdStatus',
        'mdmId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ownerId' => 'int64',
        'profileType' => null,
        'profileId' => 'int64',
        'promotedObjectType' => null,
        'promotedObjectId' => null,
        'headImageId' => null,
        'headImageUrl' => null,
        'profileName' => null,
        'description' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'profileUrl' => null,
        'systemStatus' => null,
        'mdmId' => 'int64'
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
        'ownerId' => 'owner_id',
        'profileType' => 'profile_type',
        'profileId' => 'profile_id',
        'promotedObjectType' => 'promoted_object_type',
        'promotedObjectId' => 'promoted_object_id',
        'headImageId' => 'head_image_id',
        'headImageUrl' => 'head_image_url',
        'profileName' => 'profile_name',
        'description' => 'description',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'profileUrl' => 'profile_url',
        'systemStatus' => 'system_status',
        'mdmId' => 'mdm_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ownerId' => 'setOwnerId',
        'profileType' => 'setProfileType',
        'profileId' => 'setProfileId',
        'promotedObjectType' => 'setPromotedObjectType',
        'promotedObjectId' => 'setPromotedObjectId',
        'headImageId' => 'setHeadImageId',
        'headImageUrl' => 'setHeadImageUrl',
        'profileName' => 'setProfileName',
        'description' => 'setDescription',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'profileUrl' => 'setProfileUrl',
        'systemStatus' => 'setSystemStatus',
        'mdmId' => 'setMdmId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ownerId' => 'getOwnerId',
        'profileType' => 'getProfileType',
        'profileId' => 'getProfileId',
        'promotedObjectType' => 'getPromotedObjectType',
        'promotedObjectId' => 'getPromotedObjectId',
        'headImageId' => 'getHeadImageId',
        'headImageUrl' => 'getHeadImageUrl',
        'profileName' => 'getProfileName',
        'description' => 'getDescription',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'profileUrl' => 'getProfileUrl',
        'systemStatus' => 'getSystemStatus',
        'mdmId' => 'getMdmId'
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
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['profileType'] = isset($data['profileType']) ? $data['profileType'] : null;
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['promotedObjectType'] = isset($data['promotedObjectType']) ? $data['promotedObjectType'] : null;
        $this->container['promotedObjectId'] = isset($data['promotedObjectId']) ? $data['promotedObjectId'] : null;
        $this->container['headImageId'] = isset($data['headImageId']) ? $data['headImageId'] : null;
        $this->container['headImageUrl'] = isset($data['headImageUrl']) ? $data['headImageUrl'] : null;
        $this->container['profileName'] = isset($data['profileName']) ? $data['profileName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['profileUrl'] = isset($data['profileUrl']) ? $data['profileUrl'] : null;
        $this->container['systemStatus'] = isset($data['systemStatus']) ? $data['systemStatus'] : null;
        $this->container['mdmId'] = isset($data['mdmId']) ? $data['mdmId'] : null;
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
     * Gets ownerId
     *
     * @return int|mixed
     */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
     * Sets ownerId
     *
     * @param int|mixed $ownerId ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

        return $this;
    }

    /**
     * Gets profileType
     *
     * @return \TencentAds\Model\ProfileType|mixed
     */
    public function getProfileType()
    {
        return $this->container['profileType'];
    }

    /**
     * Sets profileType
     *
     * @param \TencentAds\Model\ProfileType|mixed $profileType profileType
     *
     * @return $this
     */
    public function setProfileType($profileType)
    {
        $this->container['profileType'] = $profileType;

        return $this;
    }

    /**
     * Gets profileId
     *
     * @return int|mixed
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     *
     * @param int|mixed $profileId profileId
     *
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets promotedObjectType
     *
     * @return \TencentAds\Model\PromotedObjectType|mixed
     */
    public function getPromotedObjectType()
    {
        return $this->container['promotedObjectType'];
    }

    /**
     * Sets promotedObjectType
     *
     * @param \TencentAds\Model\PromotedObjectType|mixed $promotedObjectType promotedObjectType
     *
     * @return $this
     */
    public function setPromotedObjectType($promotedObjectType)
    {
        $this->container['promotedObjectType'] = $promotedObjectType;

        return $this;
    }

    /**
     * Gets promotedObjectId
     *
     * @return string|mixed
     */
    public function getPromotedObjectId()
    {
        return $this->container['promotedObjectId'];
    }

    /**
     * Sets promotedObjectId
     *
     * @param string|mixed $promotedObjectId promotedObjectId
     *
     * @return $this
     */
    public function setPromotedObjectId($promotedObjectId)
    {
        $this->container['promotedObjectId'] = $promotedObjectId;

        return $this;
    }

    /**
     * Gets headImageId
     *
     * @return string|mixed
     */
    public function getHeadImageId()
    {
        return $this->container['headImageId'];
    }

    /**
     * Sets headImageId
     *
     * @param string|mixed $headImageId headImageId
     *
     * @return $this
     */
    public function setHeadImageId($headImageId)
    {
        $this->container['headImageId'] = $headImageId;

        return $this;
    }

    /**
     * Gets headImageUrl
     *
     * @return string|mixed
     */
    public function getHeadImageUrl()
    {
        return $this->container['headImageUrl'];
    }

    /**
     * Sets headImageUrl
     *
     * @param string|mixed $headImageUrl headImageUrl
     *
     * @return $this
     */
    public function setHeadImageUrl($headImageUrl)
    {
        $this->container['headImageUrl'] = $headImageUrl;

        return $this;
    }

    /**
     * Gets profileName
     *
     * @return string|mixed
     */
    public function getProfileName()
    {
        return $this->container['profileName'];
    }

    /**
     * Sets profileName
     *
     * @param string|mixed $profileName profileName
     *
     * @return $this
     */
    public function setProfileName($profileName)
    {
        $this->container['profileName'] = $profileName;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|mixed
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|mixed $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets profileUrl
     *
     * @return string|mixed
     */
    public function getProfileUrl()
    {
        return $this->container['profileUrl'];
    }

    /**
     * Sets profileUrl
     *
     * @param string|mixed $profileUrl profileUrl
     *
     * @return $this
     */
    public function setProfileUrl($profileUrl)
    {
        $this->container['profileUrl'] = $profileUrl;

        return $this;
    }

    /**
     * Gets systemStatus
     *
     * @return \TencentAds\Model\AdStatus|mixed
     */
    public function getSystemStatus()
    {
        return $this->container['systemStatus'];
    }

    /**
     * Sets systemStatus
     *
     * @param \TencentAds\Model\AdStatus|mixed $systemStatus systemStatus
     *
     * @return $this
     */
    public function setSystemStatus($systemStatus)
    {
        $this->container['systemStatus'] = $systemStatus;

        return $this;
    }

    /**
     * Gets mdmId
     *
     * @return int|mixed
     */
    public function getMdmId()
    {
        return $this->container['mdmId'];
    }

    /**
     * Sets mdmId
     *
     * @param int|mixed $mdmId mdmId
     *
     * @return $this
     */
    public function setMdmId($mdmId)
    {
        $this->container['mdmId'] = $mdmId;

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


