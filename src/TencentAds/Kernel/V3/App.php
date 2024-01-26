<?php
namespace TencentAds\Kernel\V3;

use GuzzleHttp\Client;
use TencentAds\Container\V3\AdDiagnosisApiContainer;
use TencentAds\Container\V3\AdgroupNegativewordsApiContainer;
use TencentAds\Container\V3\AdgroupsApiContainer;
use TencentAds\Container\V3\AgencyRealtimeCostApiContainer;
use TencentAds\Container\V3\AndroidChannelApiContainer;
use TencentAds\Container\V3\AsyncReportFilesApiContainer;
use TencentAds\Container\V3\AsyncReportsApiContainer;
use TencentAds\Container\V3\AudienceGrantRelationsApiContainer;
use TencentAds\Container\V3\BidwordApiContainer;
use TencentAds\Container\V3\BidwordFlowApiContainer;
use TencentAds\Container\V3\BrandApiContainer;
use TencentAds\Container\V3\BusinessPointApiContainer;
use TencentAds\Container\V3\ConversionsApiContainer;
use TencentAds\Container\V3\CreativeTemplateApiContainer;
use TencentAds\Container\V3\CreativeTemplateListApiContainer;
use TencentAds\Container\V3\CustomAudienceFilesApiContainer;
use TencentAds\Container\V3\CustomAudiencesApiContainer;
use TencentAds\Container\V3\DailyBalanceReportApiContainer;
use TencentAds\Container\V3\DailyReportsApiContainer;
use TencentAds\Container\V3\DynamicCreativesApiContainer;
use TencentAds\Container\V3\EstimationApiContainer;
use TencentAds\Container\V3\ExtendPackageApiContainer;
use TencentAds\Container\V3\FundStatementsDetailedApiContainer;
use TencentAds\Container\V3\FundTransferApiContainer;
use TencentAds\Container\V3\FundsApiContainer;
use TencentAds\Container\V3\GameFeatureApiContainer;
use TencentAds\Container\V3\GameFeatureTagsApiContainer;
use TencentAds\Container\V3\HourlyReportsApiContainer;
use TencentAds\Container\V3\ImagesApiContainer;
use TencentAds\Container\V3\KeywordRecommendApiContainer;
use TencentAds\Container\V3\LocalStoresAddressParsingResultApiContainer;
use TencentAds\Container\V3\LocalStoresApiContainer;
use TencentAds\Container\V3\LocalStoresCategoriesApiContainer;
use TencentAds\Container\V3\LocalStoresSearchInfoApiContainer;
use TencentAds\Container\V3\LocalStoresWxpayMerchantsApiContainer;
use TencentAds\Container\V3\MarketingTargetAssetsApiContainer;
use TencentAds\Container\V3\MarketingTargetTypesApiContainer;
use TencentAds\Container\V3\MaterialLabelsApiContainer;
use TencentAds\Container\V3\MergeFundTypeDailyBalanceReportApiContainer;
use TencentAds\Container\V3\MergeFundTypeFundStatementsDetailedApiContainer;
use TencentAds\Container\V3\MergeFundTypeFundsApiContainer;
use TencentAds\Container\V3\MergeFundTypeSubcustomerTransferApiContainer;
use TencentAds\Container\V3\OauthApiContainer;
use TencentAds\Container\V3\PagesApiContainer;
use TencentAds\Container\V3\ProfilesApiContainer;
use TencentAds\Container\V3\ProgrammedApiContainer;
use TencentAds\Container\V3\ProgrammedTemplateApiContainer;
use TencentAds\Container\V3\RealtimeCostApiContainer;
use TencentAds\Container\V3\SubcustomerTransferApiContainer;
use TencentAds\Container\V3\TargetingTagReportsApiContainer;
use TencentAds\Container\V3\UnionPositionPackagesApiContainer;
use TencentAds\Container\V3\VideosApiContainer;
use TencentAds\Container\V3\WechatPagesApiContainer;
use TencentAds\Container\V3\WechatPagesCustomApiContainer;
use TencentAds\Container\V3\WildcardsApiContainer;

class App
{
    /** @var Client */
    public $client;

    /** @var AdDiagnosisApiContainer */
    public $adDiagnosisApiContainer;

    /** @var AdgroupNegativewordsApiContainer */
    public $adgroupNegativewordsApiContainer;

    /** @var AdgroupsApiContainer */
    public $adgroupsApiContainer;

    /** @var AgencyRealtimeCostApiContainer */
    public $agencyRealtimeCostApiContainer;

    /** @var AndroidChannelApiContainer */
    public $androidChannelApiContainer;

    /** @var AsyncReportFilesApiContainer */
    public $asyncReportFilesApiContainer;

    /** @var AsyncReportsApiContainer */
    public $asyncReportsApiContainer;

    /** @var AudienceGrantRelationsApiContainer */
    public $audienceGrantRelationsApiContainer;

    /** @var BidwordApiContainer */
    public $bidwordApiContainer;

    /** @var BidwordFlowApiContainer */
    public $bidwordFlowApiContainer;

    /** @var BrandApiContainer */
    public $brandApiContainer;

    /** @var BusinessPointApiContainer */
    public $businessPointApiContainer;

    /** @var ConversionsApiContainer */
    public $conversionsApiContainer;

    /** @var CreativeTemplateApiContainer */
    public $creativeTemplateApiContainer;

    /** @var CreativeTemplateListApiContainer */
    public $creativeTemplateListApiContainer;

    /** @var CustomAudienceFilesApiContainer */
    public $customAudienceFilesApiContainer;

    /** @var CustomAudiencesApiContainer */
    public $customAudiencesApiContainer;

    /** @var DailyBalanceReportApiContainer */
    public $dailyBalanceReportApiContainer;

    /** @var DailyReportsApiContainer */
    public $dailyReportsApiContainer;

    /** @var DynamicCreativesApiContainer */
    public $dynamicCreativesApiContainer;

    /** @var EstimationApiContainer */
    public $estimationApiContainer;

    /** @var ExtendPackageApiContainer */
    public $extendPackageApiContainer;

    /** @var FundStatementsDetailedApiContainer */
    public $fundStatementsDetailedApiContainer;

    /** @var FundTransferApiContainer */
    public $fundTransferApiContainer;

    /** @var FundsApiContainer */
    public $fundsApiContainer;

    /** @var GameFeatureApiContainer */
    public $gameFeatureApiContainer;

    /** @var GameFeatureTagsApiContainer */
    public $gameFeatureTagsApiContainer;

    /** @var HourlyReportsApiContainer */
    public $hourlyReportsApiContainer;

    /** @var ImagesApiContainer */
    public $imagesApiContainer;

    /** @var KeywordRecommendApiContainer */
    public $keywordRecommendApiContainer;

    /** @var LocalStoresAddressParsingResultApiContainer */
    public $localStoresAddressParsingResultApiContainer;

    /** @var LocalStoresApiContainer */
    public $localStoresApiContainer;

    /** @var LocalStoresCategoriesApiContainer */
    public $localStoresCategoriesApiContainer;

    /** @var LocalStoresSearchInfoApiContainer */
    public $localStoresSearchInfoApiContainer;

    /** @var LocalStoresWxpayMerchantsApiContainer */
    public $localStoresWxpayMerchantsApiContainer;

    /** @var MarketingTargetAssetsApiContainer */
    public $marketingTargetAssetsApiContainer;

    /** @var MarketingTargetTypesApiContainer */
    public $marketingTargetTypesApiContainer;

    /** @var MaterialLabelsApiContainer */
    public $materialLabelsApiContainer;

    /** @var MergeFundTypeDailyBalanceReportApiContainer */
    public $mergeFundTypeDailyBalanceReportApiContainer;

    /** @var MergeFundTypeFundStatementsDetailedApiContainer */
    public $mergeFundTypeFundStatementsDetailedApiContainer;

    /** @var MergeFundTypeFundsApiContainer */
    public $mergeFundTypeFundsApiContainer;

    /** @var MergeFundTypeSubcustomerTransferApiContainer */
    public $mergeFundTypeSubcustomerTransferApiContainer;

    /** @var OauthApiContainer */
    public $oauthApiContainer;

    /** @var PagesApiContainer */
    public $pagesApiContainer;

    /** @var ProfilesApiContainer */
    public $profilesApiContainer;

    /** @var ProgrammedApiContainer */
    public $programmedApiContainer;

    /** @var ProgrammedTemplateApiContainer */
    public $programmedTemplateApiContainer;

    /** @var RealtimeCostApiContainer */
    public $realtimeCostApiContainer;

    /** @var SubcustomerTransferApiContainer */
    public $subcustomerTransferApiContainer;

    /** @var TargetingTagReportsApiContainer */
    public $targetingTagReportsApiContainer;

    /** @var UnionPositionPackagesApiContainer */
    public $unionPositionPackagesApiContainer;

    /** @var VideosApiContainer */
    public $videosApiContainer;

    /** @var WechatPagesApiContainer */
    public $wechatPagesApiContainer;

    /** @var WechatPagesCustomApiContainer */
    public $wechatPagesCustomApiContainer;

    /** @var WildcardsApiContainer */
    public $wildcardsApiContainer;


    /**
     * @return Client
     */
    public function getClient()
    {
        if (empty($this->client)) {
            $this->client = new Client();
        }
        return $this->client;
    }


    /**
     * @return AdDiagnosisApiContainer
     */
    public function adDiagnosis()
    {
        if (empty($this->adDiagnosisApiContainer)) {
            $container = new AdDiagnosisApiContainer();
            $container->init($this, $this->getClient());
            $this->adDiagnosisApiContainer = $container;
        }
        return $this->adDiagnosisApiContainer;
    }


    /**
     * @return AdgroupNegativewordsApiContainer
     */
    public function adgroupNegativewords()
    {
        if (empty($this->adgroupNegativewordsApiContainer)) {
            $container = new AdgroupNegativewordsApiContainer();
            $container->init($this, $this->getClient());
            $this->adgroupNegativewordsApiContainer = $container;
        }
        return $this->adgroupNegativewordsApiContainer;
    }


    /**
     * @return AdgroupsApiContainer
     */
    public function adgroups()
    {
        if (empty($this->adgroupsApiContainer)) {
            $container = new AdgroupsApiContainer();
            $container->init($this, $this->getClient());
            $this->adgroupsApiContainer = $container;
        }
        return $this->adgroupsApiContainer;
    }


    /**
     * @return AgencyRealtimeCostApiContainer
     */
    public function agencyRealtimeCost()
    {
        if (empty($this->agencyRealtimeCostApiContainer)) {
            $container = new AgencyRealtimeCostApiContainer();
            $container->init($this, $this->getClient());
            $this->agencyRealtimeCostApiContainer = $container;
        }
        return $this->agencyRealtimeCostApiContainer;
    }


    /**
     * @return AndroidChannelApiContainer
     */
    public function androidChannel()
    {
        if (empty($this->androidChannelApiContainer)) {
            $container = new AndroidChannelApiContainer();
            $container->init($this, $this->getClient());
            $this->androidChannelApiContainer = $container;
        }
        return $this->androidChannelApiContainer;
    }


    /**
     * @return AsyncReportFilesApiContainer
     */
    public function asyncReportFiles()
    {
        if (empty($this->asyncReportFilesApiContainer)) {
            $container = new AsyncReportFilesApiContainer();
            $container->init($this, $this->getClient());
            $this->asyncReportFilesApiContainer = $container;
        }
        return $this->asyncReportFilesApiContainer;
    }


    /**
     * @return AsyncReportsApiContainer
     */
    public function asyncReports()
    {
        if (empty($this->asyncReportsApiContainer)) {
            $container = new AsyncReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->asyncReportsApiContainer = $container;
        }
        return $this->asyncReportsApiContainer;
    }


    /**
     * @return AudienceGrantRelationsApiContainer
     */
    public function audienceGrantRelations()
    {
        if (empty($this->audienceGrantRelationsApiContainer)) {
            $container = new AudienceGrantRelationsApiContainer();
            $container->init($this, $this->getClient());
            $this->audienceGrantRelationsApiContainer = $container;
        }
        return $this->audienceGrantRelationsApiContainer;
    }


    /**
     * @return BidwordApiContainer
     */
    public function bidword()
    {
        if (empty($this->bidwordApiContainer)) {
            $container = new BidwordApiContainer();
            $container->init($this, $this->getClient());
            $this->bidwordApiContainer = $container;
        }
        return $this->bidwordApiContainer;
    }


    /**
     * @return BidwordFlowApiContainer
     */
    public function bidwordFlow()
    {
        if (empty($this->bidwordFlowApiContainer)) {
            $container = new BidwordFlowApiContainer();
            $container->init($this, $this->getClient());
            $this->bidwordFlowApiContainer = $container;
        }
        return $this->bidwordFlowApiContainer;
    }


    /**
     * @return BrandApiContainer
     */
    public function brand()
    {
        if (empty($this->brandApiContainer)) {
            $container = new BrandApiContainer();
            $container->init($this, $this->getClient());
            $this->brandApiContainer = $container;
        }
        return $this->brandApiContainer;
    }


    /**
     * @return BusinessPointApiContainer
     */
    public function businessPoint()
    {
        if (empty($this->businessPointApiContainer)) {
            $container = new BusinessPointApiContainer();
            $container->init($this, $this->getClient());
            $this->businessPointApiContainer = $container;
        }
        return $this->businessPointApiContainer;
    }


    /**
     * @return ConversionsApiContainer
     */
    public function conversions()
    {
        if (empty($this->conversionsApiContainer)) {
            $container = new ConversionsApiContainer();
            $container->init($this, $this->getClient());
            $this->conversionsApiContainer = $container;
        }
        return $this->conversionsApiContainer;
    }


    /**
     * @return CreativeTemplateApiContainer
     */
    public function creativeTemplate()
    {
        if (empty($this->creativeTemplateApiContainer)) {
            $container = new CreativeTemplateApiContainer();
            $container->init($this, $this->getClient());
            $this->creativeTemplateApiContainer = $container;
        }
        return $this->creativeTemplateApiContainer;
    }


    /**
     * @return CreativeTemplateListApiContainer
     */
    public function creativeTemplateList()
    {
        if (empty($this->creativeTemplateListApiContainer)) {
            $container = new CreativeTemplateListApiContainer();
            $container->init($this, $this->getClient());
            $this->creativeTemplateListApiContainer = $container;
        }
        return $this->creativeTemplateListApiContainer;
    }


    /**
     * @return CustomAudienceFilesApiContainer
     */
    public function customAudienceFiles()
    {
        if (empty($this->customAudienceFilesApiContainer)) {
            $container = new CustomAudienceFilesApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudienceFilesApiContainer = $container;
        }
        return $this->customAudienceFilesApiContainer;
    }


    /**
     * @return CustomAudiencesApiContainer
     */
    public function customAudiences()
    {
        if (empty($this->customAudiencesApiContainer)) {
            $container = new CustomAudiencesApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudiencesApiContainer = $container;
        }
        return $this->customAudiencesApiContainer;
    }


    /**
     * @return DailyBalanceReportApiContainer
     */
    public function dailyBalanceReport()
    {
        if (empty($this->dailyBalanceReportApiContainer)) {
            $container = new DailyBalanceReportApiContainer();
            $container->init($this, $this->getClient());
            $this->dailyBalanceReportApiContainer = $container;
        }
        return $this->dailyBalanceReportApiContainer;
    }


    /**
     * @return DailyReportsApiContainer
     */
    public function dailyReports()
    {
        if (empty($this->dailyReportsApiContainer)) {
            $container = new DailyReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->dailyReportsApiContainer = $container;
        }
        return $this->dailyReportsApiContainer;
    }


    /**
     * @return DynamicCreativesApiContainer
     */
    public function dynamicCreatives()
    {
        if (empty($this->dynamicCreativesApiContainer)) {
            $container = new DynamicCreativesApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicCreativesApiContainer = $container;
        }
        return $this->dynamicCreativesApiContainer;
    }


    /**
     * @return EstimationApiContainer
     */
    public function estimation()
    {
        if (empty($this->estimationApiContainer)) {
            $container = new EstimationApiContainer();
            $container->init($this, $this->getClient());
            $this->estimationApiContainer = $container;
        }
        return $this->estimationApiContainer;
    }


    /**
     * @return ExtendPackageApiContainer
     */
    public function extendPackage()
    {
        if (empty($this->extendPackageApiContainer)) {
            $container = new ExtendPackageApiContainer();
            $container->init($this, $this->getClient());
            $this->extendPackageApiContainer = $container;
        }
        return $this->extendPackageApiContainer;
    }


    /**
     * @return FundStatementsDetailedApiContainer
     */
    public function fundStatementsDetailed()
    {
        if (empty($this->fundStatementsDetailedApiContainer)) {
            $container = new FundStatementsDetailedApiContainer();
            $container->init($this, $this->getClient());
            $this->fundStatementsDetailedApiContainer = $container;
        }
        return $this->fundStatementsDetailedApiContainer;
    }


    /**
     * @return FundTransferApiContainer
     */
    public function fundTransfer()
    {
        if (empty($this->fundTransferApiContainer)) {
            $container = new FundTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->fundTransferApiContainer = $container;
        }
        return $this->fundTransferApiContainer;
    }


    /**
     * @return FundsApiContainer
     */
    public function funds()
    {
        if (empty($this->fundsApiContainer)) {
            $container = new FundsApiContainer();
            $container->init($this, $this->getClient());
            $this->fundsApiContainer = $container;
        }
        return $this->fundsApiContainer;
    }


    /**
     * @return GameFeatureApiContainer
     */
    public function gameFeature()
    {
        if (empty($this->gameFeatureApiContainer)) {
            $container = new GameFeatureApiContainer();
            $container->init($this, $this->getClient());
            $this->gameFeatureApiContainer = $container;
        }
        return $this->gameFeatureApiContainer;
    }


    /**
     * @return GameFeatureTagsApiContainer
     */
    public function gameFeatureTags()
    {
        if (empty($this->gameFeatureTagsApiContainer)) {
            $container = new GameFeatureTagsApiContainer();
            $container->init($this, $this->getClient());
            $this->gameFeatureTagsApiContainer = $container;
        }
        return $this->gameFeatureTagsApiContainer;
    }


    /**
     * @return HourlyReportsApiContainer
     */
    public function hourlyReports()
    {
        if (empty($this->hourlyReportsApiContainer)) {
            $container = new HourlyReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->hourlyReportsApiContainer = $container;
        }
        return $this->hourlyReportsApiContainer;
    }


    /**
     * @return ImagesApiContainer
     */
    public function images()
    {
        if (empty($this->imagesApiContainer)) {
            $container = new ImagesApiContainer();
            $container->init($this, $this->getClient());
            $this->imagesApiContainer = $container;
        }
        return $this->imagesApiContainer;
    }


    /**
     * @return KeywordRecommendApiContainer
     */
    public function keywordRecommend()
    {
        if (empty($this->keywordRecommendApiContainer)) {
            $container = new KeywordRecommendApiContainer();
            $container->init($this, $this->getClient());
            $this->keywordRecommendApiContainer = $container;
        }
        return $this->keywordRecommendApiContainer;
    }


    /**
     * @return LocalStoresAddressParsingResultApiContainer
     */
    public function localStoresAddressParsingResult()
    {
        if (empty($this->localStoresAddressParsingResultApiContainer)) {
            $container = new LocalStoresAddressParsingResultApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresAddressParsingResultApiContainer = $container;
        }
        return $this->localStoresAddressParsingResultApiContainer;
    }


    /**
     * @return LocalStoresApiContainer
     */
    public function localStores()
    {
        if (empty($this->localStoresApiContainer)) {
            $container = new LocalStoresApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresApiContainer = $container;
        }
        return $this->localStoresApiContainer;
    }


    /**
     * @return LocalStoresCategoriesApiContainer
     */
    public function localStoresCategories()
    {
        if (empty($this->localStoresCategoriesApiContainer)) {
            $container = new LocalStoresCategoriesApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresCategoriesApiContainer = $container;
        }
        return $this->localStoresCategoriesApiContainer;
    }


    /**
     * @return LocalStoresSearchInfoApiContainer
     */
    public function localStoresSearchInfo()
    {
        if (empty($this->localStoresSearchInfoApiContainer)) {
            $container = new LocalStoresSearchInfoApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresSearchInfoApiContainer = $container;
        }
        return $this->localStoresSearchInfoApiContainer;
    }


    /**
     * @return LocalStoresWxpayMerchantsApiContainer
     */
    public function localStoresWxpayMerchants()
    {
        if (empty($this->localStoresWxpayMerchantsApiContainer)) {
            $container = new LocalStoresWxpayMerchantsApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresWxpayMerchantsApiContainer = $container;
        }
        return $this->localStoresWxpayMerchantsApiContainer;
    }


    /**
     * @return MarketingTargetAssetsApiContainer
     */
    public function marketingTargetAssets()
    {
        if (empty($this->marketingTargetAssetsApiContainer)) {
            $container = new MarketingTargetAssetsApiContainer();
            $container->init($this, $this->getClient());
            $this->marketingTargetAssetsApiContainer = $container;
        }
        return $this->marketingTargetAssetsApiContainer;
    }


    /**
     * @return MarketingTargetTypesApiContainer
     */
    public function marketingTargetTypes()
    {
        if (empty($this->marketingTargetTypesApiContainer)) {
            $container = new MarketingTargetTypesApiContainer();
            $container->init($this, $this->getClient());
            $this->marketingTargetTypesApiContainer = $container;
        }
        return $this->marketingTargetTypesApiContainer;
    }


    /**
     * @return MaterialLabelsApiContainer
     */
    public function materialLabels()
    {
        if (empty($this->materialLabelsApiContainer)) {
            $container = new MaterialLabelsApiContainer();
            $container->init($this, $this->getClient());
            $this->materialLabelsApiContainer = $container;
        }
        return $this->materialLabelsApiContainer;
    }


    /**
     * @return MergeFundTypeDailyBalanceReportApiContainer
     */
    public function mergeFundTypeDailyBalanceReport()
    {
        if (empty($this->mergeFundTypeDailyBalanceReportApiContainer)) {
            $container = new MergeFundTypeDailyBalanceReportApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeDailyBalanceReportApiContainer = $container;
        }
        return $this->mergeFundTypeDailyBalanceReportApiContainer;
    }


    /**
     * @return MergeFundTypeFundStatementsDetailedApiContainer
     */
    public function mergeFundTypeFundStatementsDetailed()
    {
        if (empty($this->mergeFundTypeFundStatementsDetailedApiContainer)) {
            $container = new MergeFundTypeFundStatementsDetailedApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeFundStatementsDetailedApiContainer = $container;
        }
        return $this->mergeFundTypeFundStatementsDetailedApiContainer;
    }


    /**
     * @return MergeFundTypeFundsApiContainer
     */
    public function mergeFundTypeFunds()
    {
        if (empty($this->mergeFundTypeFundsApiContainer)) {
            $container = new MergeFundTypeFundsApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeFundsApiContainer = $container;
        }
        return $this->mergeFundTypeFundsApiContainer;
    }


    /**
     * @return MergeFundTypeSubcustomerTransferApiContainer
     */
    public function mergeFundTypeSubcustomerTransfer()
    {
        if (empty($this->mergeFundTypeSubcustomerTransferApiContainer)) {
            $container = new MergeFundTypeSubcustomerTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeSubcustomerTransferApiContainer = $container;
        }
        return $this->mergeFundTypeSubcustomerTransferApiContainer;
    }


    /**
     * @return OauthApiContainer
     */
    public function oauth()
    {
        if (empty($this->oauthApiContainer)) {
            $container = new OauthApiContainer();
            $container->init($this, $this->getClient());
            $this->oauthApiContainer = $container;
        }
        return $this->oauthApiContainer;
    }


    /**
     * @return PagesApiContainer
     */
    public function pages()
    {
        if (empty($this->pagesApiContainer)) {
            $container = new PagesApiContainer();
            $container->init($this, $this->getClient());
            $this->pagesApiContainer = $container;
        }
        return $this->pagesApiContainer;
    }


    /**
     * @return ProfilesApiContainer
     */
    public function profiles()
    {
        if (empty($this->profilesApiContainer)) {
            $container = new ProfilesApiContainer();
            $container->init($this, $this->getClient());
            $this->profilesApiContainer = $container;
        }
        return $this->profilesApiContainer;
    }


    /**
     * @return ProgrammedApiContainer
     */
    public function programmed()
    {
        if (empty($this->programmedApiContainer)) {
            $container = new ProgrammedApiContainer();
            $container->init($this, $this->getClient());
            $this->programmedApiContainer = $container;
        }
        return $this->programmedApiContainer;
    }


    /**
     * @return ProgrammedTemplateApiContainer
     */
    public function programmedTemplate()
    {
        if (empty($this->programmedTemplateApiContainer)) {
            $container = new ProgrammedTemplateApiContainer();
            $container->init($this, $this->getClient());
            $this->programmedTemplateApiContainer = $container;
        }
        return $this->programmedTemplateApiContainer;
    }


    /**
     * @return RealtimeCostApiContainer
     */
    public function realtimeCost()
    {
        if (empty($this->realtimeCostApiContainer)) {
            $container = new RealtimeCostApiContainer();
            $container->init($this, $this->getClient());
            $this->realtimeCostApiContainer = $container;
        }
        return $this->realtimeCostApiContainer;
    }


    /**
     * @return SubcustomerTransferApiContainer
     */
    public function subcustomerTransfer()
    {
        if (empty($this->subcustomerTransferApiContainer)) {
            $container = new SubcustomerTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->subcustomerTransferApiContainer = $container;
        }
        return $this->subcustomerTransferApiContainer;
    }


    /**
     * @return TargetingTagReportsApiContainer
     */
    public function targetingTagReports()
    {
        if (empty($this->targetingTagReportsApiContainer)) {
            $container = new TargetingTagReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->targetingTagReportsApiContainer = $container;
        }
        return $this->targetingTagReportsApiContainer;
    }


    /**
     * @return UnionPositionPackagesApiContainer
     */
    public function unionPositionPackages()
    {
        if (empty($this->unionPositionPackagesApiContainer)) {
            $container = new UnionPositionPackagesApiContainer();
            $container->init($this, $this->getClient());
            $this->unionPositionPackagesApiContainer = $container;
        }
        return $this->unionPositionPackagesApiContainer;
    }


    /**
     * @return VideosApiContainer
     */
    public function videos()
    {
        if (empty($this->videosApiContainer)) {
            $container = new VideosApiContainer();
            $container->init($this, $this->getClient());
            $this->videosApiContainer = $container;
        }
        return $this->videosApiContainer;
    }


    /**
     * @return WechatPagesApiContainer
     */
    public function wechatPages()
    {
        if (empty($this->wechatPagesApiContainer)) {
            $container = new WechatPagesApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesApiContainer = $container;
        }
        return $this->wechatPagesApiContainer;
    }


    /**
     * @return WechatPagesCustomApiContainer
     */
    public function wechatPagesCustom()
    {
        if (empty($this->wechatPagesCustomApiContainer)) {
            $container = new WechatPagesCustomApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesCustomApiContainer = $container;
        }
        return $this->wechatPagesCustomApiContainer;
    }


    /**
     * @return WildcardsApiContainer
     */
    public function wildcards()
    {
        if (empty($this->wildcardsApiContainer)) {
            $container = new WildcardsApiContainer();
            $container->init($this, $this->getClient());
            $this->wildcardsApiContainer = $container;
        }
        return $this->wildcardsApiContainer;
    }
}
