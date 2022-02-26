<?php

declare(strict_types=1);

namespace Webstack\Vroom\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webstack\Vroom\Resource\AbsoluteTimeWindow;
use Webstack\Vroom\Resource\RelativeTimeWindow;
use Webstack\Vroom\Resource\TimeWindowInterface;
use Webstack\Vroom\Util\DateTimeUtil;

class TimeWindowNormalizer implements NormalizerInterface
{
    /**
     * @param TimeWindowInterface $object
     */
    public function normalize($object, string $format = null, array $context = []): ?array
    {
        if ($object instanceof AbsoluteTimeWindow) {
            return [
                DateTimeUtil::toUTC($object->getStart())->getTimestamp(),
                DateTimeUtil::toUTC($object->getEnd())->getTimestamp(),
            ];
        }

        if ($object instanceof RelativeTimeWindow) {
            return [
                $object->getStart(),
                $object->getEnd(),
            ];
        }

        return null;
    }

    /**
     * @param TimeWindowInterface $data
     */
    public function supportsNormalization($data, string $format = null): bool
    {
        return $data instanceof TimeWindowInterface;
    }
}
