<?php

namespace Webstack\Vroom\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webstack\Vroom\Resource\Location;

class LocationNormalizer implements NormalizerInterface, DenormalizerInterface
{
    /**
     * @param Location    $object
     * @param string|null $format
     *
     * @return array
     */
    public function normalize($object, $format = null, array $context = [])
    {
        return [
            $object->getLon(),
            $object->getLat(),
        ];
    }

    /**
     * @param mixed  $data
     * @param string $type
     * @param null   $format
     *
     * @return Location
     */
    public function denormalize($data, $type, $format = null, array $context = [])
    {
        return new Location($data[0], $data[1]);
    }

    /**
     * @param Location    $data
     * @param string|null $format
     */
    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof Location;
    }

    /**
     * @param Location    $data
     * @param string      $type
     * @param string|null $format
     */
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return Location::class === $type;
    }
}
