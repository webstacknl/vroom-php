<?php

namespace Webstack\Vroom\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webstack\Vroom\Resource\Options;

class OptionsNormalizer implements NormalizerInterface
{
    /**
     * @param Options     $object
     * @param string|null $format
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        return array_filter([
            'g' => $object->getGeometry(),
            't' => $object->getThreads(),
            'e' => $object->getExplore(),
        ]);
    }

    /**
     * @param Options     $data
     * @param string|null $format
     */
    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof Options;
    }
}
