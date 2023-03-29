<?php

declare(strict_types=1);

namespace Webstack\Vroom\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webstack\Vroom\Resource\Location;

final class LocationNormalizer implements NormalizerInterface, DenormalizerInterface
{
    /**
     * @param Location $object
     */
    public function normalize(mixed $object, string $format = null, array $context = []): array
    {
        return [
            $object->lon,
            $object->lat,
        ];
    }

    /**
     * @param Location $data
     */
    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return $data instanceof Location;
    }

    /**
     * @param array $data
     */
    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): Location
    {
        return new Location($data[0], $data[1]);
    }

    /**
     * @param array $data
     */
    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return Location::class === $type;
    }
}
