<?php
/**
 * QuerywordRptGetRequest
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
 * QuerywordRptGetRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuerywordRptGetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QuerywordRptGetRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'filtering' => '\TencentAds\Model\BidwordFilteringStruct[]',
        'groupBy' => 'string[]',
        'orderBy' => '\TencentAds\Model\OrderByReportStruct[]',
        'page' => 'int',
        'pageSize' => 'int',
        'rptFilter' => '\TencentAds\Model\RptFilterQueryword',
        'bizFilter' => '\TencentAds\Model\BizFilter',
        'queryType' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'filtering' => null,
        'groupBy' => null,
        'orderBy' => null,
        'page' => 'int64',
        'pageSize' => 'int64',
        'rptFilter' => null,
        'bizFilter' => null,
        'queryType' => 'int64'
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
        'filtering' => 'filtering',
        'groupBy' => 'group_by',
        'orderBy' => 'order_by',
        'page' => 'page',
        'pageSize' => 'page_size',
        'rptFilter' => 'rpt_filter',
        'bizFilter' => 'biz_filter',
        'queryType' => 'query_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'filtering' => 'setFiltering',
        'groupBy' => 'setGroupBy',
        'orderBy' => 'setOrderBy',
        'page' => 'setPage',
        'pageSize' => 'setPageSize',
        'rptFilter' => 'setRptFilter',
        'bizFilter' => 'setBizFilter',
        'queryType' => 'setQueryType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'filtering' => 'getFiltering',
        'groupBy' => 'getGroupBy',
        'orderBy' => 'getOrderBy',
        'page' => 'getPage',
        'pageSize' => 'getPageSize',
        'rptFilter' => 'getRptFilter',
        'bizFilter' => 'getBizFilter',
        'queryType' => 'getQueryType'
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
        $this->container['filtering'] = isset($data['filtering']) ? $data['filtering'] : null;
        $this->container['groupBy'] = isset($data['groupBy']) ? $data['groupBy'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['rptFilter'] = isset($data['rptFilter']) ? $data['rptFilter'] : null;
        $this->container['bizFilter'] = isset($data['bizFilter']) ? $data['bizFilter'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
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
     * Gets filtering
     *
     * @return \TencentAds\Model\BidwordFilteringStruct[]|mixed
     */
    public function getFiltering()
    {
        return $this->container['filtering'];
    }

    /**
     * Sets filtering
     *
     * @param \TencentAds\Model\BidwordFilteringStruct[]|mixed $filtering filtering
     *
     * @return $this
     */
    public function setFiltering($filtering)
    {
        $this->container['filtering'] = $filtering;

        return $this;
    }

    /**
     * Gets groupBy
     *
     * @return string[]|mixed
     */
    public function getGroupBy()
    {
        return $this->container['groupBy'];
    }

    /**
     * Sets groupBy
     *
     * @param string[]|mixed $groupBy groupBy
     *
     * @return $this
     */
    public function setGroupBy($groupBy)
    {
        $this->container['groupBy'] = $groupBy;

        return $this;
    }

    /**
     * Gets orderBy
     *
     * @return \TencentAds\Model\OrderByReportStruct[]|mixed
     */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
     * Sets orderBy
     *
     * @param \TencentAds\Model\OrderByReportStruct[]|mixed $orderBy orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|mixed
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|mixed $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|mixed
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|mixed $pageSize pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets rptFilter
     *
     * @return \TencentAds\Model\RptFilterQueryword|mixed
     */
    public function getRptFilter()
    {
        return $this->container['rptFilter'];
    }

    /**
     * Sets rptFilter
     *
     * @param \TencentAds\Model\RptFilterQueryword|mixed $rptFilter rptFilter
     *
     * @return $this
     */
    public function setRptFilter($rptFilter)
    {
        $this->container['rptFilter'] = $rptFilter;

        return $this;
    }

    /**
     * Gets bizFilter
     *
     * @return \TencentAds\Model\BizFilter|mixed
     */
    public function getBizFilter()
    {
        return $this->container['bizFilter'];
    }

    /**
     * Sets bizFilter
     *
     * @param \TencentAds\Model\BizFilter|mixed $bizFilter bizFilter
     *
     * @return $this
     */
    public function setBizFilter($bizFilter)
    {
        $this->container['bizFilter'] = $bizFilter;

        return $this;
    }

    /**
     * Gets queryType
     *
     * @return int[]|mixed
     */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
     * Sets queryType
     *
     * @param int[]|mixed $queryType queryType
     *
     * @return $this
     */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;

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

