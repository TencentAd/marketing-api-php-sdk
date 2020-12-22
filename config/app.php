<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-11
 * Time: 22:08
 */

return [
    // 暂不区分环境
    'TencentAds\Api\AsyncTaskFilesApi'                  => [
        'get' => [
            'url' => 'https://dl.e.qq.com/v1.1',
        ],
    ],
    'TencentAds\Api\AsyncReportFilesApi'                => [
        'get' => [
            'url' => 'https://dl.e.qq.com/v1.1',
        ],
    ],
    'TencentAds\Api\OauthApi'                           => [
        'token'     => [
            'url' => 'https://api.e.qq.com',
        ],
        'authorize' => [
            'url' => 'https://developers.e.qq.com',
        ],
    ],
    'TencentAds\Api\AuthorizationApi'                   => [
        'wechatBind' => [
            'url' => 'https://developers.e.qq.com',
        ],
    ],
    'TencentAds\Api\AudienceGrantRelationsApi'          => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\AudienceLaunchesApi'                => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\BatchRequestsApi'                   => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\CustomAudiencesApi'                 => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\CustomAudienceEstimationsApi'       => [
        'get' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\CustomFeatureClassProjectGrantsApi' => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\CustomFeatureClassesApi'            => [
        'add'    => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
        'update' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\CustomFeaturesApi'                  => [
        'add'    => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
        'update' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\CustomTagFilesApi'                  => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\LabelAudiencesApi'                  => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\UserActionsApi'                     => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\UserPropertiesApi'                  => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\LocalStoresApi'                     => [
        'add'    => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
        'delete' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\LocalStoresAddressParsingResultApi' => [
        'get' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\AdDiagnosisApi'                     => [
        'get' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\XijingPageApi'                      => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\XijingPageByComponentsApi'          => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\LeadCluesApi'                       => [
        'get'    => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
        'update' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\BatchAsyncRequestsApi'              => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\LeadsFormApi'                       => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\BidSimulationApi'                   => [
        'get' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\AdcreativesValidateResultApi'       => [
        'get' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
];
