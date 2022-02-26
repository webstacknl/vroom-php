<?php

declare(strict_types=1);

namespace Webstack\Vroom\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webstack\Vroom\Resource\Options;

class OptionsNormalizer implements NormalizerInterface
{
    /**
     * @param Options $object
     */
    public function normalize($object, string $format = null, array $context = []): array
    {
        return array_filter([
            'g' => $object->getGeometry(),
            't' => $object->getThreads(),
            'e' => $object->getExplore(),
        ]);
    }

    /**
     * @param Options $data
     */
    public function supportsNormalization($data, string $format = null): bool
    {
        return $data instanceof Options;
    }
}
