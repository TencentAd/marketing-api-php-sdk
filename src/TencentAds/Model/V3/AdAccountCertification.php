<?php
/**
 * AdAccountCertification
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
 * AdAccountCertification Class Doc Comment
 *
 * @category Class
 * @description 资质
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdAccountCertification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ad_account_certification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'certificationCode' => 'string',
        'certificationId' => 'int',
        'certificationFileList' => '\TencentAds\Model\V3\AdAccountCertificationFile[]',
        'certificationImageList' => '\TencentAds\Model\V3\AdAccountCertificationImage[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'certificationCode' => null,
        'certificationId' => 'int64',
        'certificationFileList' => null,
        'certificationImageList' => null
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
        'certificationCode' => 'certification_code',
        'certificationId' => 'certification_id',
        'certificationFileList' => 'certification_file_list',
        'certificationImageList' => 'certification_image_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certificationCode' => 'setCertificationCode',
        'certificationId' => 'setCertificationId',
        'certificationFileList' => 'setCertificationFileList',
        'certificationImageList' => 'setCertificationImageList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certificationCode' => 'getCertificationCode',
        'certificationId' => 'getCertificationId',
        'certificationFileList' => 'getCertificationFileList',
        'certificationImageList' => 'getCertificationImageList'
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
        $this->container['certificationCode'] = isset($data['certificationCode']) ? $data['certificationCode'] : null;
        $this->container['certificationId'] = isset($data['certificationId']) ? $data['certificationId'] : null;
        $this->container['certificationFileList'] = isset($data['certificationFileList']) ? $data['certificationFileList'] : null;
        $this->container['certificationImageList'] = isset($data['certificationImageList']) ? $data['certificationImageList'] : null;
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
     * Gets certificationCode
     *
     * @return string|mixed
     */
    public function getCertificationCode()
    {
        return $this->container['certificationCode'];
    }

    /**
     * Sets certificationCode
     *
     * @param string|mixed $certificationCode certificationCode
     *
     * @return $this
     */
    public function setCertificationCode($certificationCode)
    {
        $this->container['certificationCode'] = $certificationCode;

        return $this;
    }

    /**
     * Gets certificationId
     *
     * @return int|mixed
     */
    public function getCertificationId()
    {
        return $this->container['certificationId'];
    }

    /**
     * Sets certificationId
     *
     * @param int|mixed $certificationId certificationId
     *
     * @return $this
     */
    public function setCertificationId($certificationId)
    {
        $this->container['certificationId'] = $certificationId;

        return $this;
    }

    /**
     * Gets certificationFileList
     *
     * @return \TencentAds\Model\V3\AdAccountCertificationFile[]|mixed
     */
    public function getCertificationFileList()
    {
        return $this->container['certificationFileList'];
    }

    /**
     * Sets certificationFileList
     *
     * @param \TencentAds\Model\V3\AdAccountCertificationFile[]|mixed $certificationFileList certificationFileList
     *
     * @return $this
     */
    public function setCertificationFileList($certificationFileList)
    {
        $this->container['certificationFileList'] = $certificationFileList;

        return $this;
    }

    /**
     * Gets certificationImageList
     *
     * @return \TencentAds\Model\V3\AdAccountCertificationImage[]|mixed
     */
    public function getCertificationImageList()
    {
        return $this->container['certificationImageList'];
    }

    /**
     * Sets certificationImageList
     *
     * @param \TencentAds\Model\V3\AdAccountCertificationImage[]|mixed $certificationImageList certificationImageList
     *
     * @return $this
     */
    public function setCertificationImageList($certificationImageList)
    {
        $this->container['certificationImageList'] = $certificationImageList;

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


