<?php

namespace Webstack\Vroom;

use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Exception\ExceptionInterface as SerializerExceptionInterface;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer as BaseSerializer;
use Webstack\Vroom\Serializer\Normalizer\ArrivalNormalizer;
use Webstack\Vroom\Serializer\Normalizer\LocationNormalizer;
use Webstack\Vroom\Serializer\Normalizer\OptionsNormalizer;
use Webstack\Vroom\Serializer\Normalizer\TimeWindowNormalizer;

/**
 * Class Serializer
 */
class Serializer extends BaseSerializer
{
    /**
     * Serializer constructor.
     */
    public function __construct()
    {
        parent::__construct([
            new OptionsNormalizer(),
            new TimeWindowNormalizer(),
            new LocationNormalizer(),
            new ArrivalNormalizer(),
            new PropertyNormalizer(null, new CamelCaseToSnakeCaseNameConverter(), new PhpDocExtractor()),
            new ArrayDenormalizer(),
        ], [
            new JsonEncoder()
        ]);
    }

    /**
     * @param mixed $data
     * @param null $format
     * @param array $context
     * @return array
     * @throws SerializerExceptionInterface
     */
    public function normalize($data, $format = null, array $context = [])
    {
        $context = array_merge($context, [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true
        ]);

        return parent::normalize($data, $format, $context);
    }
}
