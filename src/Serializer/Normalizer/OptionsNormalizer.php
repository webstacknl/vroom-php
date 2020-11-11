<?php

namespace Webstack\Vroom\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webstack\Vroom\Resource\Options;

/**
 * Class OptionsNormalizer
 */
class OptionsNormalizer implements NormalizerInterface
{
    /**
     * @param Options $object
     * @param string|null $format
     * @param array $context
     * @return array
     */
    public function normalize($object, $format = null, array $context = [])
    {
        return array_filter([
            'g' => $object->getGeometry(),
            't' => $object->getThreads(),
            'e' => $object->getExplore()
        ]);
    }

    /**
     * @param Options $data
     * @param string|null $format
     * @return bool
     */
    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof Options;
    }
}