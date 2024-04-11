<?php
/**
 * AdAccountCertificationFile
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
 * AdAccountCertificationFile Class Doc Comment
 *
 * @category Class
 * @description 资质文件
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdAccountCertificationFile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ad_account_certification_file';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'certificationFileId' => 'string',
        'certificationFileName' => 'string',
        'certificationFile' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'certificationFileId' => null,
        'certificationFileName' => null,
        'certificationFile' => null
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
        'certificationFileId' => 'certification_file_id',
        'certificationFileName' => 'certification_file_name',
        'certificationFile' => 'certification_file'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certificationFileId' => 'setCertificationFileId',
        'certificationFileName' => 'setCertificationFileName',
        'certificationFile' => 'setCertificationFile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certificationFileId' => 'getCertificationFileId',
        'certificationFileName' => 'getCertificationFileName',
        'certificationFile' => 'getCertificationFile'
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
        $this->container['certificationFileId'] = isset($data['certificationFileId']) ? $data['certificationFileId'] : null;
        $this->container['certificationFileName'] = isset($data['certificationFileName']) ? $data['certificationFileName'] : null;
        $this->container['certificationFile'] = isset($data['certificationFile']) ? $data['certificationFile'] : null;
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
     * Gets certificationFileId
     *
     * @return string|mixed
     */
    public function getCertificationFileId()
    {
        return $this->container['certificationFileId'];
    }

    /**
     * Sets certificationFileId
     *
     * @param string|mixed $certificationFileId certificationFileId
     *
     * @return $this
     */
    public function setCertificationFileId($certificationFileId)
    {
        $this->container['certificationFileId'] = $certificationFileId;

        return $this;
    }

    /**
     * Gets certificationFileName
     *
     * @return string|mixed
     */
    public function getCertificationFileName()
    {
        return $this->container['certificationFileName'];
    }

    /**
     * Sets certificationFileName
     *
     * @param string|mixed $certificationFileName certificationFileName
     *
     * @return $this
     */
    public function setCertificationFileName($certificationFileName)
    {
        $this->container['certificationFileName'] = $certificationFileName;

        return $this;
    }

    /**
     * Gets certificationFile
     *
     * @return string|mixed
     */
    public function getCertificationFile()
    {
        return $this->container['certificationFile'];
    }

    /**
     * Sets certificationFile
     *
     * @param string|mixed $certificationFile certificationFile
     *
     * @return $this
     */
    public function setCertificationFile($certificationFile)
    {
        $this->container['certificationFile'] = $certificationFile;

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


