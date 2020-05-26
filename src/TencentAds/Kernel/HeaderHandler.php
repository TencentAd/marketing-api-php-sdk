<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-11
 * Time: 16:29
 */

namespace TencentAds\Kernel;

use TencentAds\HeaderSelector;
use TencentAds\TencentAds;

class HeaderHandler extends HeaderSelector
{
    /**
     * @param string[] $accept
     * @param string[] $contentTypes
     * @return array
     */
    public function selectHeaders($accept, $contentTypes)
    {
        $headers = parent::selectHeaders($accept, $contentTypes);
        $headers = array_merge($this->getCustomHeaders(), $headers);
        return $headers;
    }

    /**
     * @param string[] $accept
     * @return array
     */
    public function selectHeadersForMultipart($accept)
    {
        $headers = parent::selectHeadersForMultipart($accept);
        $headers = array_merge($this->getCustomHeaders(), $headers);
        return $headers;
    }

    /**
     * 获取自定义 header
     * @return array
     */
    public function getCustomHeaders()
    {
        $headers = [];
        $app = TencentAds::getInstance();
        $config = $app->getGlobalConfig();
        if (!empty($config['http_options']['headers'])) {
            $headers = $config['http_options']['headers'];
        }
        /**
         * X-SDK-LANGUAGE SDK语言，如PHP
         * X-SDK-LANGUAGE-VERSION 语言版本，如PHP 7.1
         * X-SDK-VERSION SDK版本，如1.0
         * X-SDK-OS 操作系统，如Linux
         * Some possible values for PHP predefined constant PHP_OS:
         * Darwin FreeBSD Linux NetBSD OpenBSD SunOS Unix WIN32 WINNT Windows
         */
        if (!empty($config['is_monitor'])) {
            $headers = array_merge($headers, [
                'X-SDK-LANGUAGE' => 'PHP',
                'X-SDK-LANGUAGE-VERSION' => defined('PHP_VERSION') ? PHP_VERSION : 'Unknown',
                'X-SDK-VERSION' => $app->getVersion(),
                'X-SDK-OS' => defined('PHP_OS') ? PHP_OS : 'Unknown',
            ]);
        }
        return $headers;
    }
}
