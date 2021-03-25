<?php
/**
 * BatchAdDiagnosisListItem
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
 * BatchAdDiagnosisListItem Class Doc Comment
 *
 * @category Class
 * @description 单个广告的诊断明细
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchAdDiagnosisListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'batch_ad_diagnosis_list_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adgroupId' => 'int',
        'diagnoseTime' => 'string',
        'operateSuggestion' => '\TencentAds\Model\OperateSuggestion',
        'learningStatus' => '\TencentAds\Model\LearningStatus',
        'costGuaranteeStatus' => '\TencentAds\Model\CostGuaranteeStatus',
        'costGuaranteeMoney' => 'int',
        'exposureCompeteScore' => 'string',
        'exposureRaiseRate' => 'string',
        'cpaBiasToday' => 'string',
        'cpaBiasOverall' => 'string',
        'isOcpx' => 'bool',
        'optimizationGoal' => 'string',
        'deepOptimizationGoal' => 'string',
        'conclusionDescription' => 'string',
        'hasDiagnoseDetail' => 'bool',
        'operateSuggestionDesc' => 'string',
        'learningStatusDesc' => 'string',
        'exposureCompeteScoreDesc' => 'string',
        'detail' => '\TencentAds\Model\ResponseDetailStruct',
        'autoAcquisitionStatus' => '\TencentAds\Model\AutoAcquisitionStatus',
        'autoAcquisitionStatusName' => 'string',
        'autoAcquisitionStatusDesc' => 'string',
        'autoAcquisitionBeginTime' => 'string',
        'autoAcquisitionEndTime' => 'string',
        'isPotential' => 'bool',
        'potentialDetail' => '\TencentAds\Model\ResponsePotentialStruct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adgroupId' => 'int64',
        'diagnoseTime' => null,
        'operateSuggestion' => null,
        'learningStatus' => null,
        'costGuaranteeStatus' => null,
        'costGuaranteeMoney' => 'int64',
        'exposureCompeteScore' => null,
        'exposureRaiseRate' => null,
        'cpaBiasToday' => null,
        'cpaBiasOverall' => null,
        'isOcpx' => null,
        'optimizationGoal' => null,
        'deepOptimizationGoal' => null,
        'conclusionDescription' => null,
        'hasDiagnoseDetail' => null,
        'operateSuggestionDesc' => null,
        'learningStatusDesc' => null,
        'exposureCompeteScoreDesc' => null,
        'detail' => null,
        'autoAcquisitionStatus' => null,
        'autoAcquisitionStatusName' => null,
        'autoAcquisitionStatusDesc' => null,
        'autoAcquisitionBeginTime' => null,
        'autoAcquisitionEndTime' => null,
        'isPotential' => null,
        'potentialDetail' => null
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
        'adgroupId' => 'adgroup_id',
        'diagnoseTime' => 'diagnose_time',
        'operateSuggestion' => 'operate_suggestion',
        'learningStatus' => 'learning_status',
        'costGuaranteeStatus' => 'cost_guarantee_status',
        'costGuaranteeMoney' => 'cost_guarantee_money',
        'exposureCompeteScore' => 'exposure_compete_score',
        'exposureRaiseRate' => 'exposure_raise_rate',
        'cpaBiasToday' => 'cpa_bias_today',
        'cpaBiasOverall' => 'cpa_bias_overall',
        'isOcpx' => 'is_ocpx',
        'optimizationGoal' => 'optimization_goal',
        'deepOptimizationGoal' => 'deep_optimization_goal',
        'conclusionDescription' => 'conclusion_description',
        'hasDiagnoseDetail' => 'has_diagnose_detail',
        'operateSuggestionDesc' => 'operate_suggestion_desc',
        'learningStatusDesc' => 'learning_status_desc',
        'exposureCompeteScoreDesc' => 'exposure_compete_score_desc',
        'detail' => 'detail',
        'autoAcquisitionStatus' => 'auto_acquisition_status',
        'autoAcquisitionStatusName' => 'auto_acquisition_status_name',
        'autoAcquisitionStatusDesc' => 'auto_acquisition_status_desc',
        'autoAcquisitionBeginTime' => 'auto_acquisition_begin_time',
        'autoAcquisitionEndTime' => 'auto_acquisition_end_time',
        'isPotential' => 'is_potential',
        'potentialDetail' => 'potential_detail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adgroupId' => 'setAdgroupId',
        'diagnoseTime' => 'setDiagnoseTime',
        'operateSuggestion' => 'setOperateSuggestion',
        'learningStatus' => 'setLearningStatus',
        'costGuaranteeStatus' => 'setCostGuaranteeStatus',
        'costGuaranteeMoney' => 'setCostGuaranteeMoney',
        'exposureCompeteScore' => 'setExposureCompeteScore',
        'exposureRaiseRate' => 'setExposureRaiseRate',
        'cpaBiasToday' => 'setCpaBiasToday',
        'cpaBiasOverall' => 'setCpaBiasOverall',
        'isOcpx' => 'setIsOcpx',
        'optimizationGoal' => 'setOptimizationGoal',
        'deepOptimizationGoal' => 'setDeepOptimizationGoal',
        'conclusionDescription' => 'setConclusionDescription',
        'hasDiagnoseDetail' => 'setHasDiagnoseDetail',
        'operateSuggestionDesc' => 'setOperateSuggestionDesc',
        'learningStatusDesc' => 'setLearningStatusDesc',
        'exposureCompeteScoreDesc' => 'setExposureCompeteScoreDesc',
        'detail' => 'setDetail',
        'autoAcquisitionStatus' => 'setAutoAcquisitionStatus',
        'autoAcquisitionStatusName' => 'setAutoAcquisitionStatusName',
        'autoAcquisitionStatusDesc' => 'setAutoAcquisitionStatusDesc',
        'autoAcquisitionBeginTime' => 'setAutoAcquisitionBeginTime',
        'autoAcquisitionEndTime' => 'setAutoAcquisitionEndTime',
        'isPotential' => 'setIsPotential',
        'potentialDetail' => 'setPotentialDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adgroupId' => 'getAdgroupId',
        'diagnoseTime' => 'getDiagnoseTime',
        'operateSuggestion' => 'getOperateSuggestion',
        'learningStatus' => 'getLearningStatus',
        'costGuaranteeStatus' => 'getCostGuaranteeStatus',
        'costGuaranteeMoney' => 'getCostGuaranteeMoney',
        'exposureCompeteScore' => 'getExposureCompeteScore',
        'exposureRaiseRate' => 'getExposureRaiseRate',
        'cpaBiasToday' => 'getCpaBiasToday',
        'cpaBiasOverall' => 'getCpaBiasOverall',
        'isOcpx' => 'getIsOcpx',
        'optimizationGoal' => 'getOptimizationGoal',
        'deepOptimizationGoal' => 'getDeepOptimizationGoal',
        'conclusionDescription' => 'getConclusionDescription',
        'hasDiagnoseDetail' => 'getHasDiagnoseDetail',
        'operateSuggestionDesc' => 'getOperateSuggestionDesc',
        'learningStatusDesc' => 'getLearningStatusDesc',
        'exposureCompeteScoreDesc' => 'getExposureCompeteScoreDesc',
        'detail' => 'getDetail',
        'autoAcquisitionStatus' => 'getAutoAcquisitionStatus',
        'autoAcquisitionStatusName' => 'getAutoAcquisitionStatusName',
        'autoAcquisitionStatusDesc' => 'getAutoAcquisitionStatusDesc',
        'autoAcquisitionBeginTime' => 'getAutoAcquisitionBeginTime',
        'autoAcquisitionEndTime' => 'getAutoAcquisitionEndTime',
        'isPotential' => 'getIsPotential',
        'potentialDetail' => 'getPotentialDetail'
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
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['diagnoseTime'] = isset($data['diagnoseTime']) ? $data['diagnoseTime'] : null;
        $this->container['operateSuggestion'] = isset($data['operateSuggestion']) ? $data['operateSuggestion'] : null;
        $this->container['learningStatus'] = isset($data['learningStatus']) ? $data['learningStatus'] : null;
        $this->container['costGuaranteeStatus'] = isset($data['costGuaranteeStatus']) ? $data['costGuaranteeStatus'] : null;
        $this->container['costGuaranteeMoney'] = isset($data['costGuaranteeMoney']) ? $data['costGuaranteeMoney'] : null;
        $this->container['exposureCompeteScore'] = isset($data['exposureCompeteScore']) ? $data['exposureCompeteScore'] : null;
        $this->container['exposureRaiseRate'] = isset($data['exposureRaiseRate']) ? $data['exposureRaiseRate'] : null;
        $this->container['cpaBiasToday'] = isset($data['cpaBiasToday']) ? $data['cpaBiasToday'] : null;
        $this->container['cpaBiasOverall'] = isset($data['cpaBiasOverall']) ? $data['cpaBiasOverall'] : null;
        $this->container['isOcpx'] = isset($data['isOcpx']) ? $data['isOcpx'] : null;
        $this->container['optimizationGoal'] = isset($data['optimizationGoal']) ? $data['optimizationGoal'] : null;
        $this->container['deepOptimizationGoal'] = isset($data['deepOptimizationGoal']) ? $data['deepOptimizationGoal'] : null;
        $this->container['conclusionDescription'] = isset($data['conclusionDescription']) ? $data['conclusionDescription'] : null;
        $this->container['hasDiagnoseDetail'] = isset($data['hasDiagnoseDetail']) ? $data['hasDiagnoseDetail'] : null;
        $this->container['operateSuggestionDesc'] = isset($data['operateSuggestionDesc']) ? $data['operateSuggestionDesc'] : null;
        $this->container['learningStatusDesc'] = isset($data['learningStatusDesc']) ? $data['learningStatusDesc'] : null;
        $this->container['exposureCompeteScoreDesc'] = isset($data['exposureCompeteScoreDesc']) ? $data['exposureCompeteScoreDesc'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['autoAcquisitionStatus'] = isset($data['autoAcquisitionStatus']) ? $data['autoAcquisitionStatus'] : null;
        $this->container['autoAcquisitionStatusName'] = isset($data['autoAcquisitionStatusName']) ? $data['autoAcquisitionStatusName'] : null;
        $this->container['autoAcquisitionStatusDesc'] = isset($data['autoAcquisitionStatusDesc']) ? $data['autoAcquisitionStatusDesc'] : null;
        $this->container['autoAcquisitionBeginTime'] = isset($data['autoAcquisitionBeginTime']) ? $data['autoAcquisitionBeginTime'] : null;
        $this->container['autoAcquisitionEndTime'] = isset($data['autoAcquisitionEndTime']) ? $data['autoAcquisitionEndTime'] : null;
        $this->container['isPotential'] = isset($data['isPotential']) ? $data['isPotential'] : null;
        $this->container['potentialDetail'] = isset($data['potentialDetail']) ? $data['potentialDetail'] : null;
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
     * Gets adgroupId
     *
     * @return int
     */
    public function getAdgroupId()
    {
        return $this->container['adgroupId'];
    }

    /**
     * Sets adgroupId
     *
     * @param int $adgroupId adgroupId
     *
     * @return $this
     */
    public function setAdgroupId($adgroupId)
    {
        $this->container['adgroupId'] = $adgroupId;

        return $this;
    }

    /**
     * Gets diagnoseTime
     *
     * @return string
     */
    public function getDiagnoseTime()
    {
        return $this->container['diagnoseTime'];
    }

    /**
     * Sets diagnoseTime
     *
     * @param string $diagnoseTime diagnoseTime
     *
     * @return $this
     */
    public function setDiagnoseTime($diagnoseTime)
    {
        $this->container['diagnoseTime'] = $diagnoseTime;

        return $this;
    }

    /**
     * Gets operateSuggestion
     *
     * @return \TencentAds\Model\OperateSuggestion
     */
    public function getOperateSuggestion()
    {
        return $this->container['operateSuggestion'];
    }

    /**
     * Sets operateSuggestion
     *
     * @param \TencentAds\Model\OperateSuggestion $operateSuggestion operateSuggestion
     *
     * @return $this
     */
    public function setOperateSuggestion($operateSuggestion)
    {
        $this->container['operateSuggestion'] = $operateSuggestion;

        return $this;
    }

    /**
     * Gets learningStatus
     *
     * @return \TencentAds\Model\LearningStatus
     */
    public function getLearningStatus()
    {
        return $this->container['learningStatus'];
    }

    /**
     * Sets learningStatus
     *
     * @param \TencentAds\Model\LearningStatus $learningStatus learningStatus
     *
     * @return $this
     */
    public function setLearningStatus($learningStatus)
    {
        $this->container['learningStatus'] = $learningStatus;

        return $this;
    }

    /**
     * Gets costGuaranteeStatus
     *
     * @return \TencentAds\Model\CostGuaranteeStatus
     */
    public function getCostGuaranteeStatus()
    {
        return $this->container['costGuaranteeStatus'];
    }

    /**
     * Sets costGuaranteeStatus
     *
     * @param \TencentAds\Model\CostGuaranteeStatus $costGuaranteeStatus costGuaranteeStatus
     *
     * @return $this
     */
    public function setCostGuaranteeStatus($costGuaranteeStatus)
    {
        $this->container['costGuaranteeStatus'] = $costGuaranteeStatus;

        return $this;
    }

    /**
     * Gets costGuaranteeMoney
     *
     * @return int
     */
    public function getCostGuaranteeMoney()
    {
        return $this->container['costGuaranteeMoney'];
    }

    /**
     * Sets costGuaranteeMoney
     *
     * @param int $costGuaranteeMoney costGuaranteeMoney
     *
     * @return $this
     */
    public function setCostGuaranteeMoney($costGuaranteeMoney)
    {
        $this->container['costGuaranteeMoney'] = $costGuaranteeMoney;

        return $this;
    }

    /**
     * Gets exposureCompeteScore
     *
     * @return string
     */
    public function getExposureCompeteScore()
    {
        return $this->container['exposureCompeteScore'];
    }

    /**
     * Sets exposureCompeteScore
     *
     * @param string $exposureCompeteScore exposureCompeteScore
     *
     * @return $this
     */
    public function setExposureCompeteScore($exposureCompeteScore)
    {
        $this->container['exposureCompeteScore'] = $exposureCompeteScore;

        return $this;
    }

    /**
     * Gets exposureRaiseRate
     *
     * @return string
     */
    public function getExposureRaiseRate()
    {
        return $this->container['exposureRaiseRate'];
    }

    /**
     * Sets exposureRaiseRate
     *
     * @param string $exposureRaiseRate exposureRaiseRate
     *
     * @return $this
     */
    public function setExposureRaiseRate($exposureRaiseRate)
    {
        $this->container['exposureRaiseRate'] = $exposureRaiseRate;

        return $this;
    }

    /**
     * Gets cpaBiasToday
     *
     * @return string
     */
    public function getCpaBiasToday()
    {
        return $this->container['cpaBiasToday'];
    }

    /**
     * Sets cpaBiasToday
     *
     * @param string $cpaBiasToday cpaBiasToday
     *
     * @return $this
     */
    public function setCpaBiasToday($cpaBiasToday)
    {
        $this->container['cpaBiasToday'] = $cpaBiasToday;

        return $this;
    }

    /**
     * Gets cpaBiasOverall
     *
     * @return string
     */
    public function getCpaBiasOverall()
    {
        return $this->container['cpaBiasOverall'];
    }

    /**
     * Sets cpaBiasOverall
     *
     * @param string $cpaBiasOverall cpaBiasOverall
     *
     * @return $this
     */
    public function setCpaBiasOverall($cpaBiasOverall)
    {
        $this->container['cpaBiasOverall'] = $cpaBiasOverall;

        return $this;
    }

    /**
     * Gets isOcpx
     *
     * @return bool
     */
    public function getIsOcpx()
    {
        return $this->container['isOcpx'];
    }

    /**
     * Sets isOcpx
     *
     * @param bool $isOcpx isOcpx
     *
     * @return $this
     */
    public function setIsOcpx($isOcpx)
    {
        $this->container['isOcpx'] = $isOcpx;

        return $this;
    }

    /**
     * Gets optimizationGoal
     *
     * @return string
     */
    public function getOptimizationGoal()
    {
        return $this->container['optimizationGoal'];
    }

    /**
     * Sets optimizationGoal
     *
     * @param string $optimizationGoal optimizationGoal
     *
     * @return $this
     */
    public function setOptimizationGoal($optimizationGoal)
    {
        $this->container['optimizationGoal'] = $optimizationGoal;

        return $this;
    }

    /**
     * Gets deepOptimizationGoal
     *
     * @return string
     */
    public function getDeepOptimizationGoal()
    {
        return $this->container['deepOptimizationGoal'];
    }

    /**
     * Sets deepOptimizationGoal
     *
     * @param string $deepOptimizationGoal deepOptimizationGoal
     *
     * @return $this
     */
    public function setDeepOptimizationGoal($deepOptimizationGoal)
    {
        $this->container['deepOptimizationGoal'] = $deepOptimizationGoal;

        return $this;
    }

    /**
     * Gets conclusionDescription
     *
     * @return string
     */
    public function getConclusionDescription()
    {
        return $this->container['conclusionDescription'];
    }

    /**
     * Sets conclusionDescription
     *
     * @param string $conclusionDescription conclusionDescription
     *
     * @return $this
     */
    public function setConclusionDescription($conclusionDescription)
    {
        $this->container['conclusionDescription'] = $conclusionDescription;

        return $this;
    }

    /**
     * Gets hasDiagnoseDetail
     *
     * @return bool
     */
    public function getHasDiagnoseDetail()
    {
        return $this->container['hasDiagnoseDetail'];
    }

    /**
     * Sets hasDiagnoseDetail
     *
     * @param bool $hasDiagnoseDetail hasDiagnoseDetail
     *
     * @return $this
     */
    public function setHasDiagnoseDetail($hasDiagnoseDetail)
    {
        $this->container['hasDiagnoseDetail'] = $hasDiagnoseDetail;

        return $this;
    }

    /**
     * Gets operateSuggestionDesc
     *
     * @return string
     */
    public function getOperateSuggestionDesc()
    {
        return $this->container['operateSuggestionDesc'];
    }

    /**
     * Sets operateSuggestionDesc
     *
     * @param string $operateSuggestionDesc operateSuggestionDesc
     *
     * @return $this
     */
    public function setOperateSuggestionDesc($operateSuggestionDesc)
    {
        $this->container['operateSuggestionDesc'] = $operateSuggestionDesc;

        return $this;
    }

    /**
     * Gets learningStatusDesc
     *
     * @return string
     */
    public function getLearningStatusDesc()
    {
        return $this->container['learningStatusDesc'];
    }

    /**
     * Sets learningStatusDesc
     *
     * @param string $learningStatusDesc learningStatusDesc
     *
     * @return $this
     */
    public function setLearningStatusDesc($learningStatusDesc)
    {
        $this->container['learningStatusDesc'] = $learningStatusDesc;

        return $this;
    }

    /**
     * Gets exposureCompeteScoreDesc
     *
     * @return string
     */
    public function getExposureCompeteScoreDesc()
    {
        return $this->container['exposureCompeteScoreDesc'];
    }

    /**
     * Sets exposureCompeteScoreDesc
     *
     * @param string $exposureCompeteScoreDesc exposureCompeteScoreDesc
     *
     * @return $this
     */
    public function setExposureCompeteScoreDesc($exposureCompeteScoreDesc)
    {
        $this->container['exposureCompeteScoreDesc'] = $exposureCompeteScoreDesc;

        return $this;
    }

    /**
     * Gets detail
     *
     * @return \TencentAds\Model\ResponseDetailStruct
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param \TencentAds\Model\ResponseDetailStruct $detail detail
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets autoAcquisitionStatus
     *
     * @return \TencentAds\Model\AutoAcquisitionStatus
     */
    public function getAutoAcquisitionStatus()
    {
        return $this->container['autoAcquisitionStatus'];
    }

    /**
     * Sets autoAcquisitionStatus
     *
     * @param \TencentAds\Model\AutoAcquisitionStatus $autoAcquisitionStatus autoAcquisitionStatus
     *
     * @return $this
     */
    public function setAutoAcquisitionStatus($autoAcquisitionStatus)
    {
        $this->container['autoAcquisitionStatus'] = $autoAcquisitionStatus;

        return $this;
    }

    /**
     * Gets autoAcquisitionStatusName
     *
     * @return string
     */
    public function getAutoAcquisitionStatusName()
    {
        return $this->container['autoAcquisitionStatusName'];
    }

    /**
     * Sets autoAcquisitionStatusName
     *
     * @param string $autoAcquisitionStatusName autoAcquisitionStatusName
     *
     * @return $this
     */
    public function setAutoAcquisitionStatusName($autoAcquisitionStatusName)
    {
        $this->container['autoAcquisitionStatusName'] = $autoAcquisitionStatusName;

        return $this;
    }

    /**
     * Gets autoAcquisitionStatusDesc
     *
     * @return string
     */
    public function getAutoAcquisitionStatusDesc()
    {
        return $this->container['autoAcquisitionStatusDesc'];
    }

    /**
     * Sets autoAcquisitionStatusDesc
     *
     * @param string $autoAcquisitionStatusDesc autoAcquisitionStatusDesc
     *
     * @return $this
     */
    public function setAutoAcquisitionStatusDesc($autoAcquisitionStatusDesc)
    {
        $this->container['autoAcquisitionStatusDesc'] = $autoAcquisitionStatusDesc;

        return $this;
    }

    /**
     * Gets autoAcquisitionBeginTime
     *
     * @return string
     */
    public function getAutoAcquisitionBeginTime()
    {
        return $this->container['autoAcquisitionBeginTime'];
    }

    /**
     * Sets autoAcquisitionBeginTime
     *
     * @param string $autoAcquisitionBeginTime autoAcquisitionBeginTime
     *
     * @return $this
     */
    public function setAutoAcquisitionBeginTime($autoAcquisitionBeginTime)
    {
        $this->container['autoAcquisitionBeginTime'] = $autoAcquisitionBeginTime;

        return $this;
    }

    /**
     * Gets autoAcquisitionEndTime
     *
     * @return string
     */
    public function getAutoAcquisitionEndTime()
    {
        return $this->container['autoAcquisitionEndTime'];
    }

    /**
     * Sets autoAcquisitionEndTime
     *
     * @param string $autoAcquisitionEndTime autoAcquisitionEndTime
     *
     * @return $this
     */
    public function setAutoAcquisitionEndTime($autoAcquisitionEndTime)
    {
        $this->container['autoAcquisitionEndTime'] = $autoAcquisitionEndTime;

        return $this;
    }

    /**
     * Gets isPotential
     *
     * @return bool
     */
    public function getIsPotential()
    {
        return $this->container['isPotential'];
    }

    /**
     * Sets isPotential
     *
     * @param bool $isPotential isPotential
     *
     * @return $this
     */
    public function setIsPotential($isPotential)
    {
        $this->container['isPotential'] = $isPotential;

        return $this;
    }

    /**
     * Gets potentialDetail
     *
     * @return \TencentAds\Model\ResponsePotentialStruct
     */
    public function getPotentialDetail()
    {
        return $this->container['potentialDetail'];
    }

    /**
     * Sets potentialDetail
     *
     * @param \TencentAds\Model\ResponsePotentialStruct $potentialDetail potentialDetail
     *
     * @return $this
     */
    public function setPotentialDetail($potentialDetail)
    {
        $this->container['potentialDetail'] = $potentialDetail;

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


