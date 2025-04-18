<?php
/**
 * AdvertiserGetListStruct
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
 * AdvertiserGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdvertiserGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdvertiserGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'dailyBudget' => 'int',
        'registrationType' => '\TencentAds\Model\V3\CustomerRegistrationType',
        'corporationName' => 'string',
        'corporationLicence' => 'string',
        'certificationImageId' => 'string',
        'certificationImage' => 'string',
        'individualQualification' => '\TencentAds\Model\V3\IndividualQualificationRsp',
        'areaCode' => 'int',
        'mdmId' => 'int',
        'mdmName' => 'string',
        'systemIndustryId' => 'int',
        'customizedIndustry' => 'string',
        'introductionUrl' => 'string',
        'corporateBrandName' => 'string',
        'memo' => 'string',
        'systemStatus' => '\TencentAds\Model\V3\CustomerSystemStatus',
        'rejectMessage' => 'string',
        'isAdx' => 'bool',
        'businessAlias' => 'string',
        'contactPerson' => 'string',
        'contactPersonEmail' => 'string',
        'contactPersonTelephone' => 'string',
        'contactPersonMobile' => 'string',
        'websites' => '\TencentAds\Model\V3\WebsiteReadStruct[]',
        'agencyAccountId' => 'int',
        'operators' => '\TencentAds\Model\V3\AdvertiserOperatorStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'dailyBudget' => 'int64',
        'registrationType' => null,
        'corporationName' => null,
        'corporationLicence' => null,
        'certificationImageId' => null,
        'certificationImage' => null,
        'individualQualification' => null,
        'areaCode' => 'int64',
        'mdmId' => 'int64',
        'mdmName' => null,
        'systemIndustryId' => 'int64',
        'customizedIndustry' => null,
        'introductionUrl' => null,
        'corporateBrandName' => null,
        'memo' => null,
        'systemStatus' => null,
        'rejectMessage' => null,
        'isAdx' => null,
        'businessAlias' => null,
        'contactPerson' => null,
        'contactPersonEmail' => null,
        'contactPersonTelephone' => null,
        'contactPersonMobile' => null,
        'websites' => null,
        'agencyAccountId' => 'int64',
        'operators' => null
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
        'dailyBudget' => 'daily_budget',
        'registrationType' => 'registration_type',
        'corporationName' => 'corporation_name',
        'corporationLicence' => 'corporation_licence',
        'certificationImageId' => 'certification_image_id',
        'certificationImage' => 'certification_image',
        'individualQualification' => 'individual_qualification',
        'areaCode' => 'area_code',
        'mdmId' => 'mdm_id',
        'mdmName' => 'mdm_name',
        'systemIndustryId' => 'system_industry_id',
        'customizedIndustry' => 'customized_industry',
        'introductionUrl' => 'introduction_url',
        'corporateBrandName' => 'corporate_brand_name',
        'memo' => 'memo',
        'systemStatus' => 'system_status',
        'rejectMessage' => 'reject_message',
        'isAdx' => 'is_adx',
        'businessAlias' => 'business_alias',
        'contactPerson' => 'contact_person',
        'contactPersonEmail' => 'contact_person_email',
        'contactPersonTelephone' => 'contact_person_telephone',
        'contactPersonMobile' => 'contact_person_mobile',
        'websites' => 'websites',
        'agencyAccountId' => 'agency_account_id',
        'operators' => 'operators'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'dailyBudget' => 'setDailyBudget',
        'registrationType' => 'setRegistrationType',
        'corporationName' => 'setCorporationName',
        'corporationLicence' => 'setCorporationLicence',
        'certificationImageId' => 'setCertificationImageId',
        'certificationImage' => 'setCertificationImage',
        'individualQualification' => 'setIndividualQualification',
        'areaCode' => 'setAreaCode',
        'mdmId' => 'setMdmId',
        'mdmName' => 'setMdmName',
        'systemIndustryId' => 'setSystemIndustryId',
        'customizedIndustry' => 'setCustomizedIndustry',
        'introductionUrl' => 'setIntroductionUrl',
        'corporateBrandName' => 'setCorporateBrandName',
        'memo' => 'setMemo',
        'systemStatus' => 'setSystemStatus',
        'rejectMessage' => 'setRejectMessage',
        'isAdx' => 'setIsAdx',
        'businessAlias' => 'setBusinessAlias',
        'contactPerson' => 'setContactPerson',
        'contactPersonEmail' => 'setContactPersonEmail',
        'contactPersonTelephone' => 'setContactPersonTelephone',
        'contactPersonMobile' => 'setContactPersonMobile',
        'websites' => 'setWebsites',
        'agencyAccountId' => 'setAgencyAccountId',
        'operators' => 'setOperators'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'dailyBudget' => 'getDailyBudget',
        'registrationType' => 'getRegistrationType',
        'corporationName' => 'getCorporationName',
        'corporationLicence' => 'getCorporationLicence',
        'certificationImageId' => 'getCertificationImageId',
        'certificationImage' => 'getCertificationImage',
        'individualQualification' => 'getIndividualQualification',
        'areaCode' => 'getAreaCode',
        'mdmId' => 'getMdmId',
        'mdmName' => 'getMdmName',
        'systemIndustryId' => 'getSystemIndustryId',
        'customizedIndustry' => 'getCustomizedIndustry',
        'introductionUrl' => 'getIntroductionUrl',
        'corporateBrandName' => 'getCorporateBrandName',
        'memo' => 'getMemo',
        'systemStatus' => 'getSystemStatus',
        'rejectMessage' => 'getRejectMessage',
        'isAdx' => 'getIsAdx',
        'businessAlias' => 'getBusinessAlias',
        'contactPerson' => 'getContactPerson',
        'contactPersonEmail' => 'getContactPersonEmail',
        'contactPersonTelephone' => 'getContactPersonTelephone',
        'contactPersonMobile' => 'getContactPersonMobile',
        'websites' => 'getWebsites',
        'agencyAccountId' => 'getAgencyAccountId',
        'operators' => 'getOperators'
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
        $this->container['dailyBudget'] = isset($data['dailyBudget']) ? $data['dailyBudget'] : null;
        $this->container['registrationType'] = isset($data['registrationType']) ? $data['registrationType'] : null;
        $this->container['corporationName'] = isset($data['corporationName']) ? $data['corporationName'] : null;
        $this->container['corporationLicence'] = isset($data['corporationLicence']) ? $data['corporationLicence'] : null;
        $this->container['certificationImageId'] = isset($data['certificationImageId']) ? $data['certificationImageId'] : null;
        $this->container['certificationImage'] = isset($data['certificationImage']) ? $data['certificationImage'] : null;
        $this->container['individualQualification'] = isset($data['individualQualification']) ? $data['individualQualification'] : null;
        $this->container['areaCode'] = isset($data['areaCode']) ? $data['areaCode'] : null;
        $this->container['mdmId'] = isset($data['mdmId']) ? $data['mdmId'] : null;
        $this->container['mdmName'] = isset($data['mdmName']) ? $data['mdmName'] : null;
        $this->container['systemIndustryId'] = isset($data['systemIndustryId']) ? $data['systemIndustryId'] : null;
        $this->container['customizedIndustry'] = isset($data['customizedIndustry']) ? $data['customizedIndustry'] : null;
        $this->container['introductionUrl'] = isset($data['introductionUrl']) ? $data['introductionUrl'] : null;
        $this->container['corporateBrandName'] = isset($data['corporateBrandName']) ? $data['corporateBrandName'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['systemStatus'] = isset($data['systemStatus']) ? $data['systemStatus'] : null;
        $this->container['rejectMessage'] = isset($data['rejectMessage']) ? $data['rejectMessage'] : null;
        $this->container['isAdx'] = isset($data['isAdx']) ? $data['isAdx'] : null;
        $this->container['businessAlias'] = isset($data['businessAlias']) ? $data['businessAlias'] : null;
        $this->container['contactPerson'] = isset($data['contactPerson']) ? $data['contactPerson'] : null;
        $this->container['contactPersonEmail'] = isset($data['contactPersonEmail']) ? $data['contactPersonEmail'] : null;
        $this->container['contactPersonTelephone'] = isset($data['contactPersonTelephone']) ? $data['contactPersonTelephone'] : null;
        $this->container['contactPersonMobile'] = isset($data['contactPersonMobile']) ? $data['contactPersonMobile'] : null;
        $this->container['websites'] = isset($data['websites']) ? $data['websites'] : null;
        $this->container['agencyAccountId'] = isset($data['agencyAccountId']) ? $data['agencyAccountId'] : null;
        $this->container['operators'] = isset($data['operators']) ? $data['operators'] : null;
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
     * Gets dailyBudget
     *
     * @return int|mixed
     */
    public function getDailyBudget()
    {
        return $this->container['dailyBudget'];
    }

    /**
     * Sets dailyBudget
     *
     * @param int|mixed $dailyBudget dailyBudget
     *
     * @return $this
     */
    public function setDailyBudget($dailyBudget)
    {
        $this->container['dailyBudget'] = $dailyBudget;

        return $this;
    }

    /**
     * Gets registrationType
     *
     * @return \TencentAds\Model\V3\CustomerRegistrationType|mixed
     */
    public function getRegistrationType()
    {
        return $this->container['registrationType'];
    }

    /**
     * Sets registrationType
     *
     * @param \TencentAds\Model\V3\CustomerRegistrationType|mixed $registrationType registrationType
     *
     * @return $this
     */
    public function setRegistrationType($registrationType)
    {
        $this->container['registrationType'] = $registrationType;

        return $this;
    }

    /**
     * Gets corporationName
     *
     * @return string|mixed
     */
    public function getCorporationName()
    {
        return $this->container['corporationName'];
    }

    /**
     * Sets corporationName
     *
     * @param string|mixed $corporationName corporationName
     *
     * @return $this
     */
    public function setCorporationName($corporationName)
    {
        $this->container['corporationName'] = $corporationName;

        return $this;
    }

    /**
     * Gets corporationLicence
     *
     * @return string|mixed
     */
    public function getCorporationLicence()
    {
        return $this->container['corporationLicence'];
    }

    /**
     * Sets corporationLicence
     *
     * @param string|mixed $corporationLicence corporationLicence
     *
     * @return $this
     */
    public function setCorporationLicence($corporationLicence)
    {
        $this->container['corporationLicence'] = $corporationLicence;

        return $this;
    }

    /**
     * Gets certificationImageId
     *
     * @return string|mixed
     */
    public function getCertificationImageId()
    {
        return $this->container['certificationImageId'];
    }

    /**
     * Sets certificationImageId
     *
     * @param string|mixed $certificationImageId certificationImageId
     *
     * @return $this
     */
    public function setCertificationImageId($certificationImageId)
    {
        $this->container['certificationImageId'] = $certificationImageId;

        return $this;
    }

    /**
     * Gets certificationImage
     *
     * @return string|mixed
     */
    public function getCertificationImage()
    {
        return $this->container['certificationImage'];
    }

    /**
     * Sets certificationImage
     *
     * @param string|mixed $certificationImage certificationImage
     *
     * @return $this
     */
    public function setCertificationImage($certificationImage)
    {
        $this->container['certificationImage'] = $certificationImage;

        return $this;
    }

    /**
     * Gets individualQualification
     *
     * @return \TencentAds\Model\V3\IndividualQualificationRsp|mixed
     */
    public function getIndividualQualification()
    {
        return $this->container['individualQualification'];
    }

    /**
     * Sets individualQualification
     *
     * @param \TencentAds\Model\V3\IndividualQualificationRsp|mixed $individualQualification individualQualification
     *
     * @return $this
     */
    public function setIndividualQualification($individualQualification)
    {
        $this->container['individualQualification'] = $individualQualification;

        return $this;
    }

    /**
     * Gets areaCode
     *
     * @return int|mixed
     */
    public function getAreaCode()
    {
        return $this->container['areaCode'];
    }

    /**
     * Sets areaCode
     *
     * @param int|mixed $areaCode areaCode
     *
     * @return $this
     */
    public function setAreaCode($areaCode)
    {
        $this->container['areaCode'] = $areaCode;

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
     * Gets mdmName
     *
     * @return string|mixed
     */
    public function getMdmName()
    {
        return $this->container['mdmName'];
    }

    /**
     * Sets mdmName
     *
     * @param string|mixed $mdmName mdmName
     *
     * @return $this
     */
    public function setMdmName($mdmName)
    {
        $this->container['mdmName'] = $mdmName;

        return $this;
    }

    /**
     * Gets systemIndustryId
     *
     * @return int|mixed
     */
    public function getSystemIndustryId()
    {
        return $this->container['systemIndustryId'];
    }

    /**
     * Sets systemIndustryId
     *
     * @param int|mixed $systemIndustryId systemIndustryId
     *
     * @return $this
     */
    public function setSystemIndustryId($systemIndustryId)
    {
        $this->container['systemIndustryId'] = $systemIndustryId;

        return $this;
    }

    /**
     * Gets customizedIndustry
     *
     * @return string|mixed
     */
    public function getCustomizedIndustry()
    {
        return $this->container['customizedIndustry'];
    }

    /**
     * Sets customizedIndustry
     *
     * @param string|mixed $customizedIndustry customizedIndustry
     *
     * @return $this
     */
    public function setCustomizedIndustry($customizedIndustry)
    {
        $this->container['customizedIndustry'] = $customizedIndustry;

        return $this;
    }

    /**
     * Gets introductionUrl
     *
     * @return string|mixed
     */
    public function getIntroductionUrl()
    {
        return $this->container['introductionUrl'];
    }

    /**
     * Sets introductionUrl
     *
     * @param string|mixed $introductionUrl introductionUrl
     *
     * @return $this
     */
    public function setIntroductionUrl($introductionUrl)
    {
        $this->container['introductionUrl'] = $introductionUrl;

        return $this;
    }

    /**
     * Gets corporateBrandName
     *
     * @return string|mixed
     */
    public function getCorporateBrandName()
    {
        return $this->container['corporateBrandName'];
    }

    /**
     * Sets corporateBrandName
     *
     * @param string|mixed $corporateBrandName corporateBrandName
     *
     * @return $this
     */
    public function setCorporateBrandName($corporateBrandName)
    {
        $this->container['corporateBrandName'] = $corporateBrandName;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|mixed
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|mixed $memo memo
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets systemStatus
     *
     * @return \TencentAds\Model\V3\CustomerSystemStatus|mixed
     */
    public function getSystemStatus()
    {
        return $this->container['systemStatus'];
    }

    /**
     * Sets systemStatus
     *
     * @param \TencentAds\Model\V3\CustomerSystemStatus|mixed $systemStatus systemStatus
     *
     * @return $this
     */
    public function setSystemStatus($systemStatus)
    {
        $this->container['systemStatus'] = $systemStatus;

        return $this;
    }

    /**
     * Gets rejectMessage
     *
     * @return string|mixed
     */
    public function getRejectMessage()
    {
        return $this->container['rejectMessage'];
    }

    /**
     * Sets rejectMessage
     *
     * @param string|mixed $rejectMessage rejectMessage
     *
     * @return $this
     */
    public function setRejectMessage($rejectMessage)
    {
        $this->container['rejectMessage'] = $rejectMessage;

        return $this;
    }

    /**
     * Gets isAdx
     *
     * @return bool|mixed
     */
    public function getIsAdx()
    {
        return $this->container['isAdx'];
    }

    /**
     * Sets isAdx
     *
     * @param bool|mixed $isAdx isAdx
     *
     * @return $this
     */
    public function setIsAdx($isAdx)
    {
        $this->container['isAdx'] = $isAdx;

        return $this;
    }

    /**
     * Gets businessAlias
     *
     * @return string|mixed
     */
    public function getBusinessAlias()
    {
        return $this->container['businessAlias'];
    }

    /**
     * Sets businessAlias
     *
     * @param string|mixed $businessAlias businessAlias
     *
     * @return $this
     */
    public function setBusinessAlias($businessAlias)
    {
        $this->container['businessAlias'] = $businessAlias;

        return $this;
    }

    /**
     * Gets contactPerson
     *
     * @return string|mixed
     */
    public function getContactPerson()
    {
        return $this->container['contactPerson'];
    }

    /**
     * Sets contactPerson
     *
     * @param string|mixed $contactPerson contactPerson
     *
     * @return $this
     */
    public function setContactPerson($contactPerson)
    {
        $this->container['contactPerson'] = $contactPerson;

        return $this;
    }

    /**
     * Gets contactPersonEmail
     *
     * @return string|mixed
     */
    public function getContactPersonEmail()
    {
        return $this->container['contactPersonEmail'];
    }

    /**
     * Sets contactPersonEmail
     *
     * @param string|mixed $contactPersonEmail contactPersonEmail
     *
     * @return $this
     */
    public function setContactPersonEmail($contactPersonEmail)
    {
        $this->container['contactPersonEmail'] = $contactPersonEmail;

        return $this;
    }

    /**
     * Gets contactPersonTelephone
     *
     * @return string|mixed
     */
    public function getContactPersonTelephone()
    {
        return $this->container['contactPersonTelephone'];
    }

    /**
     * Sets contactPersonTelephone
     *
     * @param string|mixed $contactPersonTelephone contactPersonTelephone
     *
     * @return $this
     */
    public function setContactPersonTelephone($contactPersonTelephone)
    {
        $this->container['contactPersonTelephone'] = $contactPersonTelephone;

        return $this;
    }

    /**
     * Gets contactPersonMobile
     *
     * @return string|mixed
     */
    public function getContactPersonMobile()
    {
        return $this->container['contactPersonMobile'];
    }

    /**
     * Sets contactPersonMobile
     *
     * @param string|mixed $contactPersonMobile contactPersonMobile
     *
     * @return $this
     */
    public function setContactPersonMobile($contactPersonMobile)
    {
        $this->container['contactPersonMobile'] = $contactPersonMobile;

        return $this;
    }

    /**
     * Gets websites
     *
     * @return \TencentAds\Model\V3\WebsiteReadStruct[]|mixed
     */
    public function getWebsites()
    {
        return $this->container['websites'];
    }

    /**
     * Sets websites
     *
     * @param \TencentAds\Model\V3\WebsiteReadStruct[]|mixed $websites websites
     *
     * @return $this
     */
    public function setWebsites($websites)
    {
        $this->container['websites'] = $websites;

        return $this;
    }

    /**
     * Gets agencyAccountId
     *
     * @return int|mixed
     */
    public function getAgencyAccountId()
    {
        return $this->container['agencyAccountId'];
    }

    /**
     * Sets agencyAccountId
     *
     * @param int|mixed $agencyAccountId agencyAccountId
     *
     * @return $this
     */
    public function setAgencyAccountId($agencyAccountId)
    {
        $this->container['agencyAccountId'] = $agencyAccountId;

        return $this;
    }

    /**
     * Gets operators
     *
     * @return \TencentAds\Model\V3\AdvertiserOperatorStruct[]|mixed
     */
    public function getOperators()
    {
        return $this->container['operators'];
    }

    /**
     * Sets operators
     *
     * @param \TencentAds\Model\V3\AdvertiserOperatorStruct[]|mixed $operators operators
     *
     * @return $this
     */
    public function setOperators($operators)
    {
        $this->container['operators'] = $operators;

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


