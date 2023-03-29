<?php

declare(strict_types=1);

namespace Webstack\Vroom\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webstack\Vroom\Resource\AbsoluteTimeWindow;
use Webstack\Vroom\Resource\RelativeTimeWindow;
use Webstack\Vroom\Resource\TimeWindowInterface;
use Webstack\Vroom\Util\DateTimeUtil;

final class TimeWindowNormalizer implements NormalizerInterface
{
    /**
     * @param TimeWindowInterface $object
     */
    public function normalize(mixed $object, string $format = null, array $context = []): ?array
    {
        if ($object instanceof AbsoluteTimeWindow) {
            return [
                DateTimeUtil::toUTC($object->start)->getTimestamp(),
                DateTimeUtil::toUTC($object->end)->getTimestamp(),
            ];
        }

        if ($object instanceof RelativeTimeWindow) {
            return [
                $object->start,
                $object->end,
            ];
        }

        return null;
    }

    /**
     * @param TimeWindowInterface $data
     */
    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return $data instanceof TimeWindowInterface;
    }
}
