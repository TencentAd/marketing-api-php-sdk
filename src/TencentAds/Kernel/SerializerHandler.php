<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-14
 * Time: 14:17
 */

namespace TencentAds\Kernel;

use TencentAds\ObjectSerializer;

class SerializerHandler extends ObjectSerializer
{
    /**
     * Serializer type array
     * @var string
     */
    const SERIALIZER_TYPE_ARRAY = 'array';

    /**
     * Serializer type class
     * @var string
     */
    const SERIALIZER_TYPE_CLASS = 'class';

    /**
     * Serialize data to array
     *
     * @param mixed  $data   the data to serialize
     * @param string $type   the SwaggerType of the data
     * @param string $format the format of the Swagger type of the data
     *
     * @return string|array
     */
    public static function sanitizeForSerializationToArray($data, $type = null, $format = null)
    {
        if (is_scalar($data) || null === $data) {
            return $data;
        } elseif ($data instanceof \DateTime) {
            return ($format === 'date') ? $data->format('Y-m-d') : $data->format(\DateTime::ATOM);
        } elseif (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerializationToArray($value);
            }
            return $data;
        } elseif ($data instanceof \stdClass) {
            $values = [];
            foreach ($data as $property => $value) {
                $values[$property] = self::sanitizeForSerializationToArray($value);
            }
            return $values;
        } elseif (is_object($data)) {
            $values = [];
            $formats = $data::swaggerFormats();
            foreach ($data::swaggerTypes() as $property => $swaggerType) {
                $getter = $data::getters()[$property];
                $value = $data->$getter();
                if ($value !== null) {
                    $values[$data::attributeMap()[$property]] = self::sanitizeForSerializationToArray($value, $swaggerType, $formats[$property]);
                }
            }
            return $values;
        } else {
            return (string)$data;
        }
    }
}
