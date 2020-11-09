<?php

namespace Webstack\Vroom\Serializer;

use RuntimeException;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webstack\Vroom\Model\AbsoluteTimeWindow;
use Webstack\Vroom\Model\Location;
use Webstack\Vroom\Model\TimeWindowInterface;

/**
 * Class TimeWindowNormalizer
 */
class TimeWindowNormalizer implements NormalizerInterface
{
    /**
     * @param Location $object
     * @param string|null $format
     * @param array $context
     * @return array
     */
    public function normalize($object, $format = null, array $context = [])
    {
        if ($object instanceof AbsoluteTimeWindow) {
            return [
                (int) $object->getStart()->format('U'),
                (int) $object->getEnd()->format('U')
            ];
        }

        throw new RuntimeException('Not implemented');
    }

    /**
     * @param Location $data
     * @param string|null $format
     * @return bool
     */
    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof TimeWindowInterface;
    }
}