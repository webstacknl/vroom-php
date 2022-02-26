<?php

declare(strict_types=1);

namespace Webstack\Vroom\Serializer\Normalizer;

use DateTime;
use Exception;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Webstack\Vroom\Util\DateTimeUtil;

class ArrivalNormalizer implements DenormalizerInterface
{
    /**
     * @param int $data
     *
     * @throws Exception
     */
    public function denormalize($data, string $type, string $format = null, array $context = []): DateTime
    {
        return DateTimeUtil::fromUTC(new DateTime('@'.$data));
    }

    /**
     * @param mixed $data
     */
    public function supportsDenormalization($data, string $type, string $format = null): bool
    {
        return 'DateTime' === $type && is_int($data) && $data > 604800;
    }
}
