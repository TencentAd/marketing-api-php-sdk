<?php

namespace TencentAds\Tools;

use TencentAds\ApiException;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Exception\TencentAdsSDKException;

class RapidAddAds extends ApiContainer
{
    protected $retryTimes = 2;

    protected $accountId    = null;
    protected $campaignId   = null;
    protected $adgroupId    = null;
    protected $adcreativeId = null;
    protected $adId         = null;

    protected $batchParam = [];
    protected $exceptions = [];

    /**
     * @param $campaignRequest
     * @param $adgroupRequest
     * @param $adcreativeRequest
     * @param $adRequest
     *
     * @return RapidAddAdsResponseData|mixed|null
     * @throws TencentAdsSDKException
     */
    public function rapidAddAds($campaignRequest, $adgroupRequest, $adcreativeRequest, $adRequest)
    {
        list ($campaignTargetStatus, $adgroupTargetStatus, $adTargetStatus) = $this->checkParams($campaignRequest,
            $adgroupRequest, $adcreativeRequest, $adRequest);
        // 先全部使用AD_STATUS_SUSPEND创建
        $campaignRequest['configured_status'] = 'AD_STATUS_SUSPEND';
        $adgroupRequest['configured_status'] = 'AD_STATUS_SUSPEND';
        $adRequest['configured_status'] = 'AD_STATUS_SUSPEND';

        // 创建Campaign
        $result = $this->createCampaignWithRetry($campaignRequest);
        if (!$result || !$this->campaignId) {
            // 失败直接抛出异常
            throw $this->exceptions[count($this->exceptions) - 1];
        }
        $adgroupRequest['campaign_id'] = $this->campaignId;
        $adcreativeRequest['campaign_id'] = $this->campaignId;

        // 创建Adgroup & Adcreative
        $result = $this->createAdgroupAndAdcreativeWithRetry($adgroupRequest, $adcreativeRequest);
        if (!$result || !$this->adgroupId || !$this->adcreativeId) {
            if ($this->adcreativeId) {
                $this->deleteAdcreativeWithRetry($this->adcreativeId);
            }
            if ($this->adgroupId) {
                $this->deleteAdgroupWithRetry($this->adgroupId);
            }
            $this->deleteCampaignWithRetry($this->campaignId);
            throw $this->exceptions[count($this->exceptions) - 1];
        }
        $adRequest['adgroup_id'] = $this->adgroupId;
        $adRequest['adcreative_id'] = $this->adcreativeId;

        // 创建Ad
        $result = $this->createAdWithRetry($adRequest);
        if (!$result || !$this->adId) {
            // 失败回滚然后抛出异常
            $this->deleteAdcreativeWithRetry($this->adcreativeId);
            $this->deleteAdgroupWithRetry($this->adgroupId);
            $this->deleteCampaignWithRetry($this->campaignId);
            throw $this->exceptions[count($this->exceptions) - 1];
        }

        // 批量更新状态
        $result = $this->updateAllConfiguredStatusWithRetry($this->campaignId, $campaignTargetStatus, $this->adgroupId,
            $adgroupTargetStatus, $this->adId, $adTargetStatus);
        if (!$result) {
            $this->deleteAdWithRetry($this->adId);
            $this->deleteAdcreativeWithRetry($this->adcreativeId);
            $this->deleteAdgroupWithRetry($this->adgroupId);
            $this->deleteCampaignWithRetry($this->campaignId);
            throw $this->exceptions[count($this->exceptions) - 1];
        }

        $result = new RapidAddAdsResponseData([
            'campaignId'   => $this->campaignId,
            'adgroupId'    => $this->adgroupId,
            'adcreativeId' => $this->adcreativeId,
            'adId'         => $this->adId,
        ]);

        return $result;
    }

    /**
     * @param $campaignRequest
     * @param $adgroupRequest
     * @param $adcreativeRequest
     * @param $adRequest
     *
     * @return array
     * @throws TencentAdsSDKException
     */
    protected function checkParams($campaignRequest, $adgroupRequest, $adcreativeRequest, $adRequest)
    {
        if (empty($campaignRequest['account_id'])
            || empty($adgroupRequest['account_id'])
            || empty($adcreativeRequest['account_id'])
            || empty($adRequest['account_id'])) {
            throw new TencentAdsSDKException('rapidAddAds need pass account_id in each request param');
        }
        if ($campaignRequest['account_id'] != $adgroupRequest['account_id']
            || $campaignRequest['account_id'] != $adcreativeRequest['account_id']
            || $campaignRequest['account_id'] != $adRequest['account_id']) {
            throw new TencentAdsSDKException('rapidAddAds need pass same account_id in each request param');
        }
        $this->accountId = $campaignRequest['account_id'];

        $campaignStatus = !empty($campaignRequest['configured_status']) ? $campaignRequest['configured_status'] : 'AD_STATUS_NORMAL';
        $adgroupStatus = !empty($adgroupRequest['configured_status']) ? $adgroupRequest['configured_status'] : 'AD_STATUS_NORMAL';
        $adStatus = !empty($adRequest['configured_status']) ? $adRequest['configured_status'] : 'AD_STATUS_NORMAL';

        return [$campaignStatus, $adgroupStatus, $adStatus];
    }

    /**
     * @param $customFunction
     *
     * @return bool|null
     */
    protected function doSomethingWithRetry($customFunction)
    {
        $triedTimes = 0;
        while ($triedTimes < $this->retryTimes) {
            try {
                $returnVal = $customFunction();
                if ($returnVal) {
                    return $returnVal;
                }
            } catch (\Exception $e) {
                $this->exceptions [] = $e;
            }
            $triedTimes += 1;
        }

        return null;
    }

    /**
     * @param $campaignRequest
     *
     * @return bool|null
     */
    protected function createCampaignWithRetry($campaignRequest)
    {
        $func = function () use ($campaignRequest) {
            $campaignResponse = $this->app->campaigns()
                                          ->add($campaignRequest);
            if (!empty($campaignResponse->getCampaignId())) {
                $this->campaignId = $campaignResponse->getCampaignId();

                return true;
            }

            return null;
        };

        return $this->doSomethingWithRetry($func);
    }

    /**
     * @param $campaignId
     *
     * @return bool|null
     */
    protected function deleteCampaignWithRetry($campaignId)
    {
        $func = function () use ($campaignId) {
            $this->app->campaigns()
                      ->delete([
                          'account_id'  => $this->accountId,
                          'campaign_id' => $campaignId,
                      ]);

            return true;
        };

        return $this->doSomethingWithRetry($func);
    }

    /**
     * @param $adgroupRequest
     * @param $adcreativeRequest
     *
     * @return bool|null
     */
    protected function createAdgroupAndAdcreativeWithRetry($adgroupRequest, $adcreativeRequest)
    {
        $this->batchParam = [
            [
                'adgroups/add', $adgroupRequest,
            ],
            [
                'adcreatives/add', $adcreativeRequest,
            ],
        ];

        $func = function () {
            $responses = $this->app->sendBatchRequest($this->accountId, $this->batchParam);
            $nextRoundBatchParam = [];
            foreach ($responses as $key => $response) {
                $action = $this->batchParam[$key][0];
                if ($response->isError()) {
                    $this->exceptions [] = $response->getThrownException();
                    // 失败的，先获取，排除因超时失败的，再进入重试
                    $getParam = [
                        'account_id' => $this->accountId,
                        'filtering'  => [
                            [
                                'field'    => 'campaign_id',
                                'operator' => 'EQUALS',
                                'values'   => [$this->campaignId],
                            ],
                        ],
                    ];
                    switch ($action) {
                        case 'adgroups/add':
                            $adgroupList = $this->app->adgroups()
                                                     ->get($getParam);
                            if (!empty($adgroupList) && !empty($adgroupList->getList()) && count($adgroupList->getList()) == 1) {
                                $this->adgroupId = $adgroupList->getList()[0]->getAdgroupId();
                            } else {
                                $nextRoundBatchParam [] = $this->batchParam[$key];
                            }
                            break;
                        case 'adcreatives/add':
                            $adcreativeList = $this->app->adcreatives()
                                                        ->get($getParam);
                            if (!empty($adcreativeList) && !empty($adcreativeList->getList()) && count($adcreativeList->getList()) == 1) {
                                $this->adcreativeId = $adcreativeList->getList()[0]->getAdcreativeId();
                            } else {
                                $nextRoundBatchParam [] = $this->batchParam[$key];
                            }
                            break;
                    }
                } else {
                    switch ($action) {
                        case 'adgroups/add':
                            $this->adgroupId = $response->getData()
                                                        ->getAdgroupId();
                            break;
                        case 'adcreatives/add':
                            $this->adcreativeId = $response->getData()
                                                           ->getAdcreativeId();
                            break;
                    }
                }
            }
            if ($nextRoundBatchParam) {
                // 如果有错误，先获取，排除因超时失败的，再重试
                $this->batchParam = $nextRoundBatchParam;

                return null;
            } else {
                return true;
            }
        };

        return $this->doSomethingWithRetry($func);
    }

    /**
     * @param $adgroupId
     *
     * @return bool|null
     */
    protected function deleteAdgroupWithRetry($adgroupId)
    {
        $func = function () use ($adgroupId) {
            $this->app->adgroups()
                      ->delete([
                          'account_id' => $this->accountId,
                          'adgroup_id' => $adgroupId,
                      ]);

            return true;
        };

        return $this->doSomethingWithRetry($func);
    }

    /**
     * @param $adcreativeId
     *
     * @return bool|null
     */
    protected function deleteAdcreativeWithRetry($adcreativeId)
    {
        $func = function () use ($adcreativeId) {
            $this->app->adcreatives()
                      ->delete([
                          'account_id'    => $this->accountId,
                          'adcreative_id' => $adcreativeId,
                      ]);

            return true;
        };

        return $this->doSomethingWithRetry($func);
    }

    /**
     * @param $adRequest
     *
     * @return bool|null
     */
    protected function createAdWithRetry($adRequest)
    {
        $func = function () use ($adRequest) {
            try {
                $adResponse = $this->app->ads()
                                        ->add($adRequest);
                if (!empty($adResponse->getAdId())) {
                    $this->adId = $adResponse->getAdId();

                    return true;
                }
            } catch (ApiException $e) {
                // 先获取，排除因超时失败的
                $this->exceptions [] = $e;
                $adList = $this->app->ads()
                                    ->get([
                                        'account_id' => $this->accountId,
                                        'filtering'  => [
                                            [
                                                'field'    => 'campaign_id',
                                                'operator' => 'EQUALS',
                                                'values'   => [$this->campaignId],
                                            ],
                                        ],
                                    ]);
                if (!empty($adList) && !empty($adList->getList()) && count($adList->getList()) == 1) {
                    $this->adId = $adList->getList()[0]->getAdId();

                    return true;
                }
            }

            return null;
        };

        return $this->doSomethingWithRetry($func);
    }

    /**
     * @param $adId
     *
     * @return bool|null
     */
    protected function deleteAdWithRetry($adId)
    {
        $func = function () use ($adId) {
            $this->app->ads()
                      ->delete([
                          'account_id' => $this->accountId,
                          'ad_id'      => $adId,
                      ]);

            return true;
        };

        return $this->doSomethingWithRetry($func);
    }

    /**
     * @param $campaignId
     * @param $campaignStatus
     * @param $adgroupId
     * @param $adgroupStatus
     * @param $adId
     * @param $adStatus
     *
     * @return bool|null
     */
    protected function updateAllConfiguredStatusWithRetry(
        $campaignId,
        $campaignStatus,
        $adgroupId,
        $adgroupStatus,
        $adId,
        $adStatus
    ) {
        $this->batchParam = [
            [
                'campaigns/update', [
                'account_id'        => $this->accountId,
                'campaign_id'       => $campaignId,
                'configured_status' => $campaignStatus,
            ],
            ],
            [
                'adgroups/update', [
                'account_id'        => $this->accountId,
                'adgroup_id'        => $adgroupId,
                'configured_status' => $adgroupStatus,
            ],
            ],
            [
                'ads/update', [
                'account_id'        => $this->accountId,
                'ad_id'             => $adId,
                'configured_status' => $adStatus,
            ],
            ],
        ];
        $func = function () {
            $responses = $this->app->sendBatchRequest($this->accountId, $this->batchParam);
            $nextRoundBatchParam = [];
            foreach ($responses as $key => $response) {
                if ($response->isError()) {
                    $this->exceptions [] = $response->getThrownException();
                    // 失败的进入重试
                    $nextRoundBatchParam [] = $this->batchParam[$key];
                }
            }
            if ($nextRoundBatchParam) {
                // 如果有错误，则重试
                $this->batchParam = $nextRoundBatchParam;

                return null;
            } else {
                return true;
            }
        };

        return $this->doSomethingWithRetry($func);
    }

}
