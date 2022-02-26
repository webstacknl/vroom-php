<?php

declare(strict_types=1);

namespace Webstack\Vroom\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webstack\Vroom\Resource\Location;

class LocationNormalizer implements NormalizerInterface, DenormalizerInterface
{
    /**
     * @param Location $object
     */
    public function normalize($object, string $format = null, array $context = []): array
    {
        return [
            $object->getLon(),
            $object->getLat(),
        ];
    }

    /**
     * @param mixed $data
     */
    public function denormalize($data, string $type, string $format = null, array $context = []): Location
    {
        return new Location($data[0], $data[1]);
    }

    /**
     * @param Location $data
     */
    public function supportsNormalization($data, string $format = null): bool
    {
        return $data instanceof Location;
    }

    /**
     * @param Location $data
     */
    public function supportsDenormalization($data, string $type, string $format = null): bool
    {
        return Location::class === $type;
    }
}
