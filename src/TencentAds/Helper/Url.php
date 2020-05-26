<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-03-12
 * Time: 21:12
 */

namespace TencentAds\Helper;


class Url
{
    /**
     * http_build_query & convert boolean to string
     * @param array $array
     * @param array $prefix
     * @return string
     */
    public static function buildQuery(array $array, $prefix = []) {
        $parts = [];
        foreach ($array as $key => $value) {
            if (!is_scalar($value)) {
                $parts[] = self::buildQuery($value, array_merge($prefix, [$key]));
                continue;
            } else if (is_bool($value)) {
                $value = $value ? 'true' : 'false';
            }
            if (empty($prefix)) {
                $parts[] = urlencode($key) . '='. $value;
            } else {
                $arrayKey = '';
                foreach ($prefix as $index => $prefixKey) {
                    if ($index == 0) {
                        $arrayKey .= $prefixKey;
                    } else {
                        $arrayKey .= '[' . $prefixKey . ']';
                    }
                }
                $arrayKey .= '[' . $key . ']';
                $parts[] = urlencode($arrayKey) . '='. $value;
            }

        }
        return implode('&', $parts);
    }
}
