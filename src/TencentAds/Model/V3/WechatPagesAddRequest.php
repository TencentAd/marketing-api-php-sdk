<?php
/**
 * WechatPagesAddRequest
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
 * WechatPagesAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatPagesAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WechatPagesAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'advertiserId' => 'int',
        'pageName' => 'string',
        'pageTemplateId' => 'int',
        'pageElements' => '\TencentAds\Model\V3\PageElementsStruct[]',
        'shareContentSpec' => '\TencentAds\Model\V3\ShareContentSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'advertiserId' => 'int64',
        'pageName' => null,
        'pageTemplateId' => 'int64',
        'pageElements' => null,
        'shareContentSpec' => null
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
        'advertiserId' => 'advertiser_id',
        'pageName' => 'page_name',
        'pageTemplateId' => 'page_template_id',
        'pageElements' => 'page_elements',
        'shareContentSpec' => 'share_content_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advertiserId' => 'setAdvertiserId',
        'pageName' => 'setPageName',
        'pageTemplateId' => 'setPageTemplateId',
        'pageElements' => 'setPageElements',
        'shareContentSpec' => 'setShareContentSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advertiserId' => 'getAdvertiserId',
        'pageName' => 'getPageName',
        'pageTemplateId' => 'getPageTemplateId',
        'pageElements' => 'getPageElements',
        'shareContentSpec' => 'getShareContentSpec'
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
        $this->container['advertiserId'] = isset($data['advertiserId']) ? $data['advertiserId'] : null;
        $this->container['pageName'] = isset($data['pageName']) ? $data['pageName'] : null;
        $this->container['pageTemplateId'] = isset($data['pageTemplateId']) ? $data['pageTemplateId'] : null;
        $this->container['pageElements'] = isset($data['pageElements']) ? $data['pageElements'] : null;
        $this->container['shareContentSpec'] = isset($data['shareContentSpec']) ? $data['shareContentSpec'] : null;
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
     * Gets advertiserId
     *
     * @return int|mixed
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiserId'];
    }

    /**
     * Sets advertiserId
     *
     * @param int|mixed $advertiserId advertiserId
     *
     * @return $this
     */
    public function setAdvertiserId($advertiserId)
    {
        $this->container['advertiserId'] = $advertiserId;

        return $this;
    }

    /**
     * Gets pageName
     *
     * @return string|mixed
     */
    public function getPageName()
    {
        return $this->container['pageName'];
    }

    /**
     * Sets pageName
     *
     * @param string|mixed $pageName pageName
     *
     * @return $this
     */
    public function setPageName($pageName)
    {
        $this->container['pageName'] = $pageName;

        return $this;
    }

    /**
     * Gets pageTemplateId
     *
     * @return int|mixed
     */
    public function getPageTemplateId()
    {
        return $this->container['pageTemplateId'];
    }

    /**
     * Sets pageTemplateId
     *
     * @param int|mixed $pageTemplateId pageTemplateId
     *
     * @return $this
     */
    public function setPageTemplateId($pageTemplateId)
    {
        $this->container['pageTemplateId'] = $pageTemplateId;

        return $this;
    }

    /**
     * Gets pageElements
     *
     * @return \TencentAds\Model\V3\PageElementsStruct[]|mixed
     */
    public function getPageElements()
    {
        return $this->container['pageElements'];
    }

    /**
     * Sets pageElements
     *
     * @param \TencentAds\Model\V3\PageElementsStruct[]|mixed $pageElements pageElements
     *
     * @return $this
     */
    public function setPageElements($pageElements)
    {
        $this->container['pageElements'] = $pageElements;

        return $this;
    }

    /**
     * Gets shareContentSpec
     *
     * @return \TencentAds\Model\V3\ShareContentSpec|mixed
     */
    public function getShareContentSpec()
    {
        return $this->container['shareContentSpec'];
    }

    /**
     * Sets shareContentSpec
     *
     * @param \TencentAds\Model\V3\ShareContentSpec|mixed $shareContentSpec shareContentSpec
     *
     * @return $this
     */
    public function setShareContentSpec($shareContentSpec)
    {
        $this->container['shareContentSpec'] = $shareContentSpec;

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

