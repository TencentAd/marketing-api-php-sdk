<?php
/**
 * FinderObject
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
 * FinderObject Class Doc Comment
 *
 * @category Class
 * @description 动态详情
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinderObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'finder_object';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exportId' => 'string',
        'createTime' => 'int',
        'deleteFlag' => 'int',
        'description' => 'string',
        'medias' => '\TencentAds\Model\V3\MediaNew[]',
        'finderUsername' => 'string',
        'wechatChannelsAccountId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exportId' => null,
        'createTime' => 'int64',
        'deleteFlag' => 'int64',
        'description' => null,
        'medias' => null,
        'finderUsername' => null,
        'wechatChannelsAccountId' => null
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
        'exportId' => 'export_id',
        'createTime' => 'create_time',
        'deleteFlag' => 'delete_flag',
        'description' => 'description',
        'medias' => 'medias',
        'finderUsername' => 'finder_username',
        'wechatChannelsAccountId' => 'wechat_channels_account_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exportId' => 'setExportId',
        'createTime' => 'setCreateTime',
        'deleteFlag' => 'setDeleteFlag',
        'description' => 'setDescription',
        'medias' => 'setMedias',
        'finderUsername' => 'setFinderUsername',
        'wechatChannelsAccountId' => 'setWechatChannelsAccountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exportId' => 'getExportId',
        'createTime' => 'getCreateTime',
        'deleteFlag' => 'getDeleteFlag',
        'description' => 'getDescription',
        'medias' => 'getMedias',
        'finderUsername' => 'getFinderUsername',
        'wechatChannelsAccountId' => 'getWechatChannelsAccountId'
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
        $this->container['exportId'] = isset($data['exportId']) ? $data['exportId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['deleteFlag'] = isset($data['deleteFlag']) ? $data['deleteFlag'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['medias'] = isset($data['medias']) ? $data['medias'] : null;
        $this->container['finderUsername'] = isset($data['finderUsername']) ? $data['finderUsername'] : null;
        $this->container['wechatChannelsAccountId'] = isset($data['wechatChannelsAccountId']) ? $data['wechatChannelsAccountId'] : null;
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
     * Gets exportId
     *
     * @return string|mixed
     */
    public function getExportId()
    {
        return $this->container['exportId'];
    }

    /**
     * Sets exportId
     *
     * @param string|mixed $exportId exportId
     *
     * @return $this
     */
    public function setExportId($exportId)
    {
        $this->container['exportId'] = $exportId;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return int|mixed
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param int|mixed $createTime createTime
     *
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets deleteFlag
     *
     * @return int|mixed
     */
    public function getDeleteFlag()
    {
        return $this->container['deleteFlag'];
    }

    /**
     * Sets deleteFlag
     *
     * @param int|mixed $deleteFlag deleteFlag
     *
     * @return $this
     */
    public function setDeleteFlag($deleteFlag)
    {
        $this->container['deleteFlag'] = $deleteFlag;

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
     * Gets medias
     *
     * @return \TencentAds\Model\V3\MediaNew[]|mixed
     */
    public function getMedias()
    {
        return $this->container['medias'];
    }

    /**
     * Sets medias
     *
     * @param \TencentAds\Model\V3\MediaNew[]|mixed $medias medias
     *
     * @return $this
     */
    public function setMedias($medias)
    {
        $this->container['medias'] = $medias;

        return $this;
    }

    /**
     * Gets finderUsername
     *
     * @return string|mixed
     */
    public function getFinderUsername()
    {
        return $this->container['finderUsername'];
    }

    /**
     * Sets finderUsername
     *
     * @param string|mixed $finderUsername finderUsername
     *
     * @return $this
     */
    public function setFinderUsername($finderUsername)
    {
        $this->container['finderUsername'] = $finderUsername;

        return $this;
    }

    /**
     * Gets wechatChannelsAccountId
     *
     * @return string|mixed
     */
    public function getWechatChannelsAccountId()
    {
        return $this->container['wechatChannelsAccountId'];
    }

    /**
     * Sets wechatChannelsAccountId
     *
     * @param string|mixed $wechatChannelsAccountId wechatChannelsAccountId
     *
     * @return $this
     */
    public function setWechatChannelsAccountId($wechatChannelsAccountId)
    {
        $this->container['wechatChannelsAccountId'] = $wechatChannelsAccountId;

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


