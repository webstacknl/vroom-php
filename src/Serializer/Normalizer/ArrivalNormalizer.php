<?php

namespace Webstack\Vroom\Serializer\Normalizer;

use DateTime;
use Exception;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class ArrivalNormalizer
 */
class ArrivalNormalizer implements DenormalizerInterface
{
    /**
     * @param int $data
     * @param string $type
     * @param null $format
     * @param array $context
     * @return DateTime
     * @throws Exception
     */
    public function denormalize($data, $type, $format = null, array $context = [])
    {
        return new DateTime('@'. $data);
    }

    /**
     * @param mixed $data
     * @param string $type
     * @param null $format
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DateTime' && is_int($data) && $data > 604800;
    }
}
