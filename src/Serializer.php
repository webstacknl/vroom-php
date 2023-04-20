<?php

declare(strict_types=1);

namespace Webstack\Vroom;

use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Exception\ExceptionInterface as SerializerExceptionInterface;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer as BaseSerializer;
use Webstack\Vroom\Serializer\Normalizer\ArrivalNormalizer;
use Webstack\Vroom\Serializer\Normalizer\LocationNormalizer;
use Webstack\Vroom\Serializer\Normalizer\TimeWindowNormalizer;

final class Serializer extends BaseSerializer
{
    public function __construct()
    {
        parent::__construct([
            new TimeWindowNormalizer(),
            new LocationNormalizer(),
            new ArrivalNormalizer(),
            new PropertyNormalizer(null, new CamelCaseToSnakeCaseNameConverter(), new ReflectionExtractor()),
            new ObjectNormalizer(null, null, null, new ReflectionExtractor()),
            new ArrayDenormalizer(),
        ], [
            new JsonEncoder(),
        ]);
    }

    /**
     * @throws SerializerExceptionInterface
     */
    public function normalize(mixed $data, ?string $format = null, array $context = []): \ArrayObject|array|string|int|float|bool|null
    {
        $context = array_merge($context, [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
        ]);

        return parent::normalize($data, $format, $context);
    }
}
