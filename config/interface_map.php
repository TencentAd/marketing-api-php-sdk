<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-03-12
 * Time: 20:31
 */

return [
    'campaigns/get'                      => [
        'method'         => 'GET',
        'response_class' => \TencentAds\Model\CampaignsGetResponseData::class,
    ],
    'campaigns/add'                      => [
        'method'         => 'POST',
        'response_class' => \TencentAds\Model\CampaignsAddResponseData::class,
    ],
    'campaigns/update'                   => [
        'method'         => 'POST',
        'response_class' => \TencentAds\Model\CampaignsAddResponseData::class,
    ],
    'campaigns/delete'                   => [
        'method'         => 'POST',
        'response_class' => \TencentAds\Model\CampaignsAddResponseData::class,
    ],
    'adgroups/get'                       => [
        'method'         => 'GET',
        'response_class' => \TencentAds\Model\AdgroupsGetResponseData::class,
    ],
    'adgroups/add'                       => [
        'method'         => 'POST',
        'response_class' => \TencentAds\Model\AdgroupsAddResponseData::class,
    ],
    'adgroups/update'                    => [
        'method'         => 'POST',
        'response_class' => \TencentAds\Model\AdgroupsAddResponseData::class,
    ],
    'adgroups/delete'                    => [
        'method'         => 'POST',
        'response_class' => \TencentAds\Model\AdgroupsAddResponseData::class,
    ],
    'advertiser/get'                     => [
        'method'         => 'GET',
        'response_class' => \TencentAds\Model\AdvertiserGetResponseData::class,
    ],
    'advertiser/add'                     => [
        'method'         => 'POST',
        'response_class' => \TencentAds\Model\AdvertiserAddResponseData::class,
    ],
    'advertiser/update'                  => [
        'method'         => 'POST',
        'response_class' => \TencentAds\Model\AdvertiserUpdateResponseData::class,
    ],
    'adcreatives_related_capability/get' => [
        'method'         => 'GET',
        'response_class' => \TencentAds\Model\AdcreativesRelatedCapabilityGetResponseData::class,
    ],
];
