<?php
/**
 * MaterialLabel
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
 * MaterialLabel Class Doc Comment
 *
 * @category Class
 * @description 素材标签
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MaterialLabel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'material_label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'labelId' => 'int',
        'labelName' => 'string',
        'firstLabelLevelId' => 'int',
        'firstLabelLevelName' => 'string',
        'secondLabelLevelId' => 'int',
        'secondLabelLevelName' => 'string',
        'createTime' => 'string',
        'labelSource' => '\TencentAds\Model\V3\MaterialLabelSource',
        'relationImageCount' => 'int',
        'relationMediaCount' => 'int',
        'businessScenario' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'labelId' => 'int64',
        'labelName' => null,
        'firstLabelLevelId' => 'int64',
        'firstLabelLevelName' => null,
        'secondLabelLevelId' => 'int64',
        'secondLabelLevelName' => null,
        'createTime' => null,
        'labelSource' => null,
        'relationImageCount' => 'int64',
        'relationMediaCount' => 'int64',
        'businessScenario' => 'int64'
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
        'accountId' => 'account_id',
        'labelId' => 'label_id',
        'labelName' => 'label_name',
        'firstLabelLevelId' => 'first_label_level_id',
        'firstLabelLevelName' => 'first_label_level_name',
        'secondLabelLevelId' => 'second_label_level_id',
        'secondLabelLevelName' => 'second_label_level_name',
        'createTime' => 'create_time',
        'labelSource' => 'label_source',
        'relationImageCount' => 'relation_image_count',
        'relationMediaCount' => 'relation_media_count',
        'businessScenario' => 'business_scenario'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'labelId' => 'setLabelId',
        'labelName' => 'setLabelName',
        'firstLabelLevelId' => 'setFirstLabelLevelId',
        'firstLabelLevelName' => 'setFirstLabelLevelName',
        'secondLabelLevelId' => 'setSecondLabelLevelId',
        'secondLabelLevelName' => 'setSecondLabelLevelName',
        'createTime' => 'setCreateTime',
        'labelSource' => 'setLabelSource',
        'relationImageCount' => 'setRelationImageCount',
        'relationMediaCount' => 'setRelationMediaCount',
        'businessScenario' => 'setBusinessScenario'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'labelId' => 'getLabelId',
        'labelName' => 'getLabelName',
        'firstLabelLevelId' => 'getFirstLabelLevelId',
        'firstLabelLevelName' => 'getFirstLabelLevelName',
        'secondLabelLevelId' => 'getSecondLabelLevelId',
        'secondLabelLevelName' => 'getSecondLabelLevelName',
        'createTime' => 'getCreateTime',
        'labelSource' => 'getLabelSource',
        'relationImageCount' => 'getRelationImageCount',
        'relationMediaCount' => 'getRelationMediaCount',
        'businessScenario' => 'getBusinessScenario'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['labelId'] = isset($data['labelId']) ? $data['labelId'] : null;
        $this->container['labelName'] = isset($data['labelName']) ? $data['labelName'] : null;
        $this->container['firstLabelLevelId'] = isset($data['firstLabelLevelId']) ? $data['firstLabelLevelId'] : null;
        $this->container['firstLabelLevelName'] = isset($data['firstLabelLevelName']) ? $data['firstLabelLevelName'] : null;
        $this->container['secondLabelLevelId'] = isset($data['secondLabelLevelId']) ? $data['secondLabelLevelId'] : null;
        $this->container['secondLabelLevelName'] = isset($data['secondLabelLevelName']) ? $data['secondLabelLevelName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['labelSource'] = isset($data['labelSource']) ? $data['labelSource'] : null;
        $this->container['relationImageCount'] = isset($data['relationImageCount']) ? $data['relationImageCount'] : null;
        $this->container['relationMediaCount'] = isset($data['relationMediaCount']) ? $data['relationMediaCount'] : null;
        $this->container['businessScenario'] = isset($data['businessScenario']) ? $data['businessScenario'] : null;
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
     * Gets accountId
     *
     * @return int|mixed
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int|mixed $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets labelId
     *
     * @return int|mixed
     */
    public function getLabelId()
    {
        return $this->container['labelId'];
    }

    /**
     * Sets labelId
     *
     * @param int|mixed $labelId labelId
     *
     * @return $this
     */
    public function setLabelId($labelId)
    {
        $this->container['labelId'] = $labelId;

        return $this;
    }

    /**
     * Gets labelName
     *
     * @return string|mixed
     */
    public function getLabelName()
    {
        return $this->container['labelName'];
    }

    /**
     * Sets labelName
     *
     * @param string|mixed $labelName labelName
     *
     * @return $this
     */
    public function setLabelName($labelName)
    {
        $this->container['labelName'] = $labelName;

        return $this;
    }

    /**
     * Gets firstLabelLevelId
     *
     * @return int|mixed
     */
    public function getFirstLabelLevelId()
    {
        return $this->container['firstLabelLevelId'];
    }

    /**
     * Sets firstLabelLevelId
     *
     * @param int|mixed $firstLabelLevelId firstLabelLevelId
     *
     * @return $this
     */
    public function setFirstLabelLevelId($firstLabelLevelId)
    {
        $this->container['firstLabelLevelId'] = $firstLabelLevelId;

        return $this;
    }

    /**
     * Gets firstLabelLevelName
     *
     * @return string|mixed
     */
    public function getFirstLabelLevelName()
    {
        return $this->container['firstLabelLevelName'];
    }

    /**
     * Sets firstLabelLevelName
     *
     * @param string|mixed $firstLabelLevelName firstLabelLevelName
     *
     * @return $this
     */
    public function setFirstLabelLevelName($firstLabelLevelName)
    {
        $this->container['firstLabelLevelName'] = $firstLabelLevelName;

        return $this;
    }

    /**
     * Gets secondLabelLevelId
     *
     * @return int|mixed
     */
    public function getSecondLabelLevelId()
    {
        return $this->container['secondLabelLevelId'];
    }

    /**
     * Sets secondLabelLevelId
     *
     * @param int|mixed $secondLabelLevelId secondLabelLevelId
     *
     * @return $this
     */
    public function setSecondLabelLevelId($secondLabelLevelId)
    {
        $this->container['secondLabelLevelId'] = $secondLabelLevelId;

        return $this;
    }

    /**
     * Gets secondLabelLevelName
     *
     * @return string|mixed
     */
    public function getSecondLabelLevelName()
    {
        return $this->container['secondLabelLevelName'];
    }

    /**
     * Sets secondLabelLevelName
     *
     * @param string|mixed $secondLabelLevelName secondLabelLevelName
     *
     * @return $this
     */
    public function setSecondLabelLevelName($secondLabelLevelName)
    {
        $this->container['secondLabelLevelName'] = $secondLabelLevelName;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string|mixed
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string|mixed $createTime createTime
     *
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets labelSource
     *
     * @return \TencentAds\Model\V3\MaterialLabelSource|mixed
     */
    public function getLabelSource()
    {
        return $this->container['labelSource'];
    }

    /**
     * Sets labelSource
     *
     * @param \TencentAds\Model\V3\MaterialLabelSource|mixed $labelSource labelSource
     *
     * @return $this
     */
    public function setLabelSource($labelSource)
    {
        $this->container['labelSource'] = $labelSource;

        return $this;
    }

    /**
     * Gets relationImageCount
     *
     * @return int|mixed
     */
    public function getRelationImageCount()
    {
        return $this->container['relationImageCount'];
    }

    /**
     * Sets relationImageCount
     *
     * @param int|mixed $relationImageCount relationImageCount
     *
     * @return $this
     */
    public function setRelationImageCount($relationImageCount)
    {
        $this->container['relationImageCount'] = $relationImageCount;

        return $this;
    }

    /**
     * Gets relationMediaCount
     *
     * @return int|mixed
     */
    public function getRelationMediaCount()
    {
        return $this->container['relationMediaCount'];
    }

    /**
     * Sets relationMediaCount
     *
     * @param int|mixed $relationMediaCount relationMediaCount
     *
     * @return $this
     */
    public function setRelationMediaCount($relationMediaCount)
    {
        $this->container['relationMediaCount'] = $relationMediaCount;

        return $this;
    }

    /**
     * Gets businessScenario
     *
     * @return int|mixed
     */
    public function getBusinessScenario()
    {
        return $this->container['businessScenario'];
    }

    /**
     * Sets businessScenario
     *
     * @param int|mixed $businessScenario businessScenario
     *
     * @return $this
     */
    public function setBusinessScenario($businessScenario)
    {
        $this->container['businessScenario'] = $businessScenario;

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


