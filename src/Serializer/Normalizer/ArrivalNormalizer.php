<?php

declare(strict_types=1);

namespace Webstack\Vroom\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Webstack\Vroom\Util\DateTimeUtil;

final class ArrivalNormalizer implements DenormalizerInterface
{
    /**
     * @param int $data
     *
     * @throws \Exception
     */
    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): \DateTime
    {
        return DateTimeUtil::fromUTC(new \DateTime('@'.$data));
    }

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return 'DateTime' === $type && is_int($data) && $data > 604800;
    }
}
