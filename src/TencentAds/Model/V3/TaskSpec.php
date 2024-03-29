<?php
/**
 * TaskSpec
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
 * TaskSpec Class Doc Comment
 *
 * @category Class
 * @description 任务所需条件
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'task_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'updateUnionPositionPackageSpec' => '\TencentAds\Model\V3\UpdateUnionPositionPackageItem[]',
        'updateExcludeUnionPositionPackageSpec' => '\TencentAds\Model\V3\UpdateExcludeUnionPositionPackageItem[]',
        'updateDeepConversionBehaviorBidSpec' => '\TencentAds\Model\V3\UpdateDeepConversionBehaviorBidItem[]',
        'deleteAdgroupSpec' => '\TencentAds\Model\V3\DeleteAdgroupItem[]',
        'updateAdgroupDeepConversionWorthRateSpec' => '\TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthRateItem[]',
        'targetingsShareSpec' => '\TencentAds\Model\V3\TargetingsShareItem[]',
        'updateAdgroupConfiguredStatusSpec' => '\TencentAds\Model\V3\UpdateAdgroupConfiguredStatusItem[]',
        'updateAdgroupDailyBudgetSpec' => '\TencentAds\Model\V3\UpdateAdgroupDailyBudgetItem[]',
        'updateAdgroupAutoAcquisitionSpec' => '\TencentAds\Model\V3\UpdateAdgroupAutoAcquisitionItem[]',
        'updateAdgroupDeepConversionWorthAdvancedRateSpec' => '\TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthAdvancedRateItem[]',
        'updateDeepConversionBehaviorAdvancedBidSpec' => '\TencentAds\Model\V3\UpdateDeepConversionBehaviorAdvancedBidItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'updateUnionPositionPackageSpec' => null,
        'updateExcludeUnionPositionPackageSpec' => null,
        'updateDeepConversionBehaviorBidSpec' => null,
        'deleteAdgroupSpec' => null,
        'updateAdgroupDeepConversionWorthRateSpec' => null,
        'targetingsShareSpec' => null,
        'updateAdgroupConfiguredStatusSpec' => null,
        'updateAdgroupDailyBudgetSpec' => null,
        'updateAdgroupAutoAcquisitionSpec' => null,
        'updateAdgroupDeepConversionWorthAdvancedRateSpec' => null,
        'updateDeepConversionBehaviorAdvancedBidSpec' => null
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
        'updateUnionPositionPackageSpec' => 'update_union_position_package_spec',
        'updateExcludeUnionPositionPackageSpec' => 'update_exclude_union_position_package_spec',
        'updateDeepConversionBehaviorBidSpec' => 'update_deep_conversion_behavior_bid_spec',
        'deleteAdgroupSpec' => 'delete_adgroup_spec',
        'updateAdgroupDeepConversionWorthRateSpec' => 'update_adgroup_deep_conversion_worth_rate_spec',
        'targetingsShareSpec' => 'targetings_share_spec',
        'updateAdgroupConfiguredStatusSpec' => 'update_adgroup_configured_status_spec',
        'updateAdgroupDailyBudgetSpec' => 'update_adgroup_daily_budget_spec',
        'updateAdgroupAutoAcquisitionSpec' => 'update_adgroup_auto_acquisition_spec',
        'updateAdgroupDeepConversionWorthAdvancedRateSpec' => 'update_adgroup_deep_conversion_worth_advanced_rate_spec',
        'updateDeepConversionBehaviorAdvancedBidSpec' => 'update_deep_conversion_behavior_advanced_bid_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'updateUnionPositionPackageSpec' => 'setUpdateUnionPositionPackageSpec',
        'updateExcludeUnionPositionPackageSpec' => 'setUpdateExcludeUnionPositionPackageSpec',
        'updateDeepConversionBehaviorBidSpec' => 'setUpdateDeepConversionBehaviorBidSpec',
        'deleteAdgroupSpec' => 'setDeleteAdgroupSpec',
        'updateAdgroupDeepConversionWorthRateSpec' => 'setUpdateAdgroupDeepConversionWorthRateSpec',
        'targetingsShareSpec' => 'setTargetingsShareSpec',
        'updateAdgroupConfiguredStatusSpec' => 'setUpdateAdgroupConfiguredStatusSpec',
        'updateAdgroupDailyBudgetSpec' => 'setUpdateAdgroupDailyBudgetSpec',
        'updateAdgroupAutoAcquisitionSpec' => 'setUpdateAdgroupAutoAcquisitionSpec',
        'updateAdgroupDeepConversionWorthAdvancedRateSpec' => 'setUpdateAdgroupDeepConversionWorthAdvancedRateSpec',
        'updateDeepConversionBehaviorAdvancedBidSpec' => 'setUpdateDeepConversionBehaviorAdvancedBidSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'updateUnionPositionPackageSpec' => 'getUpdateUnionPositionPackageSpec',
        'updateExcludeUnionPositionPackageSpec' => 'getUpdateExcludeUnionPositionPackageSpec',
        'updateDeepConversionBehaviorBidSpec' => 'getUpdateDeepConversionBehaviorBidSpec',
        'deleteAdgroupSpec' => 'getDeleteAdgroupSpec',
        'updateAdgroupDeepConversionWorthRateSpec' => 'getUpdateAdgroupDeepConversionWorthRateSpec',
        'targetingsShareSpec' => 'getTargetingsShareSpec',
        'updateAdgroupConfiguredStatusSpec' => 'getUpdateAdgroupConfiguredStatusSpec',
        'updateAdgroupDailyBudgetSpec' => 'getUpdateAdgroupDailyBudgetSpec',
        'updateAdgroupAutoAcquisitionSpec' => 'getUpdateAdgroupAutoAcquisitionSpec',
        'updateAdgroupDeepConversionWorthAdvancedRateSpec' => 'getUpdateAdgroupDeepConversionWorthAdvancedRateSpec',
        'updateDeepConversionBehaviorAdvancedBidSpec' => 'getUpdateDeepConversionBehaviorAdvancedBidSpec'
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
        $this->container['updateUnionPositionPackageSpec'] = isset($data['updateUnionPositionPackageSpec']) ? $data['updateUnionPositionPackageSpec'] : null;
        $this->container['updateExcludeUnionPositionPackageSpec'] = isset($data['updateExcludeUnionPositionPackageSpec']) ? $data['updateExcludeUnionPositionPackageSpec'] : null;
        $this->container['updateDeepConversionBehaviorBidSpec'] = isset($data['updateDeepConversionBehaviorBidSpec']) ? $data['updateDeepConversionBehaviorBidSpec'] : null;
        $this->container['deleteAdgroupSpec'] = isset($data['deleteAdgroupSpec']) ? $data['deleteAdgroupSpec'] : null;
        $this->container['updateAdgroupDeepConversionWorthRateSpec'] = isset($data['updateAdgroupDeepConversionWorthRateSpec']) ? $data['updateAdgroupDeepConversionWorthRateSpec'] : null;
        $this->container['targetingsShareSpec'] = isset($data['targetingsShareSpec']) ? $data['targetingsShareSpec'] : null;
        $this->container['updateAdgroupConfiguredStatusSpec'] = isset($data['updateAdgroupConfiguredStatusSpec']) ? $data['updateAdgroupConfiguredStatusSpec'] : null;
        $this->container['updateAdgroupDailyBudgetSpec'] = isset($data['updateAdgroupDailyBudgetSpec']) ? $data['updateAdgroupDailyBudgetSpec'] : null;
        $this->container['updateAdgroupAutoAcquisitionSpec'] = isset($data['updateAdgroupAutoAcquisitionSpec']) ? $data['updateAdgroupAutoAcquisitionSpec'] : null;
        $this->container['updateAdgroupDeepConversionWorthAdvancedRateSpec'] = isset($data['updateAdgroupDeepConversionWorthAdvancedRateSpec']) ? $data['updateAdgroupDeepConversionWorthAdvancedRateSpec'] : null;
        $this->container['updateDeepConversionBehaviorAdvancedBidSpec'] = isset($data['updateDeepConversionBehaviorAdvancedBidSpec']) ? $data['updateDeepConversionBehaviorAdvancedBidSpec'] : null;
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
     * Gets updateUnionPositionPackageSpec
     *
     * @return \TencentAds\Model\V3\UpdateUnionPositionPackageItem[]|mixed
     */
    public function getUpdateUnionPositionPackageSpec()
    {
        return $this->container['updateUnionPositionPackageSpec'];
    }

    /**
     * Sets updateUnionPositionPackageSpec
     *
     * @param \TencentAds\Model\V3\UpdateUnionPositionPackageItem[]|mixed $updateUnionPositionPackageSpec updateUnionPositionPackageSpec
     *
     * @return $this
     */
    public function setUpdateUnionPositionPackageSpec($updateUnionPositionPackageSpec)
    {
        $this->container['updateUnionPositionPackageSpec'] = $updateUnionPositionPackageSpec;

        return $this;
    }

    /**
     * Gets updateExcludeUnionPositionPackageSpec
     *
     * @return \TencentAds\Model\V3\UpdateExcludeUnionPositionPackageItem[]|mixed
     */
    public function getUpdateExcludeUnionPositionPackageSpec()
    {
        return $this->container['updateExcludeUnionPositionPackageSpec'];
    }

    /**
     * Sets updateExcludeUnionPositionPackageSpec
     *
     * @param \TencentAds\Model\V3\UpdateExcludeUnionPositionPackageItem[]|mixed $updateExcludeUnionPositionPackageSpec updateExcludeUnionPositionPackageSpec
     *
     * @return $this
     */
    public function setUpdateExcludeUnionPositionPackageSpec($updateExcludeUnionPositionPackageSpec)
    {
        $this->container['updateExcludeUnionPositionPackageSpec'] = $updateExcludeUnionPositionPackageSpec;

        return $this;
    }

    /**
     * Gets updateDeepConversionBehaviorBidSpec
     *
     * @return \TencentAds\Model\V3\UpdateDeepConversionBehaviorBidItem[]|mixed
     */
    public function getUpdateDeepConversionBehaviorBidSpec()
    {
        return $this->container['updateDeepConversionBehaviorBidSpec'];
    }

    /**
     * Sets updateDeepConversionBehaviorBidSpec
     *
     * @param \TencentAds\Model\V3\UpdateDeepConversionBehaviorBidItem[]|mixed $updateDeepConversionBehaviorBidSpec updateDeepConversionBehaviorBidSpec
     *
     * @return $this
     */
    public function setUpdateDeepConversionBehaviorBidSpec($updateDeepConversionBehaviorBidSpec)
    {
        $this->container['updateDeepConversionBehaviorBidSpec'] = $updateDeepConversionBehaviorBidSpec;

        return $this;
    }

    /**
     * Gets deleteAdgroupSpec
     *
     * @return \TencentAds\Model\V3\DeleteAdgroupItem[]|mixed
     */
    public function getDeleteAdgroupSpec()
    {
        return $this->container['deleteAdgroupSpec'];
    }

    /**
     * Sets deleteAdgroupSpec
     *
     * @param \TencentAds\Model\V3\DeleteAdgroupItem[]|mixed $deleteAdgroupSpec deleteAdgroupSpec
     *
     * @return $this
     */
    public function setDeleteAdgroupSpec($deleteAdgroupSpec)
    {
        $this->container['deleteAdgroupSpec'] = $deleteAdgroupSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupDeepConversionWorthRateSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthRateItem[]|mixed
     */
    public function getUpdateAdgroupDeepConversionWorthRateSpec()
    {
        return $this->container['updateAdgroupDeepConversionWorthRateSpec'];
    }

    /**
     * Sets updateAdgroupDeepConversionWorthRateSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthRateItem[]|mixed $updateAdgroupDeepConversionWorthRateSpec updateAdgroupDeepConversionWorthRateSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupDeepConversionWorthRateSpec($updateAdgroupDeepConversionWorthRateSpec)
    {
        $this->container['updateAdgroupDeepConversionWorthRateSpec'] = $updateAdgroupDeepConversionWorthRateSpec;

        return $this;
    }

    /**
     * Gets targetingsShareSpec
     *
     * @return \TencentAds\Model\V3\TargetingsShareItem[]|mixed
     */
    public function getTargetingsShareSpec()
    {
        return $this->container['targetingsShareSpec'];
    }

    /**
     * Sets targetingsShareSpec
     *
     * @param \TencentAds\Model\V3\TargetingsShareItem[]|mixed $targetingsShareSpec targetingsShareSpec
     *
     * @return $this
     */
    public function setTargetingsShareSpec($targetingsShareSpec)
    {
        $this->container['targetingsShareSpec'] = $targetingsShareSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupConfiguredStatusSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupConfiguredStatusItem[]|mixed
     */
    public function getUpdateAdgroupConfiguredStatusSpec()
    {
        return $this->container['updateAdgroupConfiguredStatusSpec'];
    }

    /**
     * Sets updateAdgroupConfiguredStatusSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupConfiguredStatusItem[]|mixed $updateAdgroupConfiguredStatusSpec updateAdgroupConfiguredStatusSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupConfiguredStatusSpec($updateAdgroupConfiguredStatusSpec)
    {
        $this->container['updateAdgroupConfiguredStatusSpec'] = $updateAdgroupConfiguredStatusSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupDailyBudgetSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupDailyBudgetItem[]|mixed
     */
    public function getUpdateAdgroupDailyBudgetSpec()
    {
        return $this->container['updateAdgroupDailyBudgetSpec'];
    }

    /**
     * Sets updateAdgroupDailyBudgetSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupDailyBudgetItem[]|mixed $updateAdgroupDailyBudgetSpec updateAdgroupDailyBudgetSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupDailyBudgetSpec($updateAdgroupDailyBudgetSpec)
    {
        $this->container['updateAdgroupDailyBudgetSpec'] = $updateAdgroupDailyBudgetSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupAutoAcquisitionSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupAutoAcquisitionItem[]|mixed
     */
    public function getUpdateAdgroupAutoAcquisitionSpec()
    {
        return $this->container['updateAdgroupAutoAcquisitionSpec'];
    }

    /**
     * Sets updateAdgroupAutoAcquisitionSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupAutoAcquisitionItem[]|mixed $updateAdgroupAutoAcquisitionSpec updateAdgroupAutoAcquisitionSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupAutoAcquisitionSpec($updateAdgroupAutoAcquisitionSpec)
    {
        $this->container['updateAdgroupAutoAcquisitionSpec'] = $updateAdgroupAutoAcquisitionSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupDeepConversionWorthAdvancedRateSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthAdvancedRateItem[]|mixed
     */
    public function getUpdateAdgroupDeepConversionWorthAdvancedRateSpec()
    {
        return $this->container['updateAdgroupDeepConversionWorthAdvancedRateSpec'];
    }

    /**
     * Sets updateAdgroupDeepConversionWorthAdvancedRateSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthAdvancedRateItem[]|mixed $updateAdgroupDeepConversionWorthAdvancedRateSpec updateAdgroupDeepConversionWorthAdvancedRateSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupDeepConversionWorthAdvancedRateSpec($updateAdgroupDeepConversionWorthAdvancedRateSpec)
    {
        $this->container['updateAdgroupDeepConversionWorthAdvancedRateSpec'] = $updateAdgroupDeepConversionWorthAdvancedRateSpec;

        return $this;
    }

    /**
     * Gets updateDeepConversionBehaviorAdvancedBidSpec
     *
     * @return \TencentAds\Model\V3\UpdateDeepConversionBehaviorAdvancedBidItem[]|mixed
     */
    public function getUpdateDeepConversionBehaviorAdvancedBidSpec()
    {
        return $this->container['updateDeepConversionBehaviorAdvancedBidSpec'];
    }

    /**
     * Sets updateDeepConversionBehaviorAdvancedBidSpec
     *
     * @param \TencentAds\Model\V3\UpdateDeepConversionBehaviorAdvancedBidItem[]|mixed $updateDeepConversionBehaviorAdvancedBidSpec updateDeepConversionBehaviorAdvancedBidSpec
     *
     * @return $this
     */
    public function setUpdateDeepConversionBehaviorAdvancedBidSpec($updateDeepConversionBehaviorAdvancedBidSpec)
    {
        $this->container['updateDeepConversionBehaviorAdvancedBidSpec'] = $updateDeepConversionBehaviorAdvancedBidSpec;

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


