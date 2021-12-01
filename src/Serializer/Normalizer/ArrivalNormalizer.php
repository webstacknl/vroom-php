<?php

namespace Webstack\Vroom\Serializer\Normalizer;

use DateTime;
use Exception;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Webstack\Vroom\Util\DateTimeUtil;

class ArrivalNormalizer implements DenormalizerInterface
{
    /**
     * @param int    $data
     * @param string $type
     * @param null   $format
     *
     * @throws Exception
     */
    public function denormalize($data, $type, $format = null, array $context = []): DateTime
    {
        return DateTimeUtil::fromUTC(new DateTime('@'.$data));
    }

    /**
     * @param mixed  $data
     * @param string $type
     * @param null   $format
     */
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'DateTime' === $type && is_int($data) && $data > 604800;
    }
}
