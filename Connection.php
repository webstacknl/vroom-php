<?php

namespace Webstack\Vroom;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Exception\ExceptionInterface as SerializerExceptionInterface;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface as HttpClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;
use Webstack\Vroom\Serializer\LocationNormalizer;
use Webstack\Vroom\Serializer\OptionsNormalizer;
use Webstack\Vroom\Serializer\TimeWindowNormalizer;

/**
 * Class Connection
 */
class Connection
{
    /**
     * @var string
     */
    protected $uri;

    /**
     * @param string $uri
     */
    public function __construct(string $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @param Problem $request
     * @return Solution
     * @throws SerializerExceptionInterface
     * @throws HttpClientExceptionInterface
     */
    public function compute(Problem $request)
    {
        $client = HttpClient::create();

        try {
            $normalizers = [
                new OptionsNormalizer(),
                new TimeWindowNormalizer(),
                new LocationNormalizer(),
                new PropertyNormalizer(null, new CamelCaseToSnakeCaseNameConverter(), new PhpDocExtractor()),
                new ArrayDenormalizer(),
            ];

            $serializer = new Serializer($normalizers, [
                new JsonEncoder()
            ]);

            $json = $serializer->normalize($request, null, [
                AbstractObjectNormalizer::SKIP_NULL_VALUES => true
            ]);

            $response = $client->request('POST', $this->uri, [
                'json' => $json
            ]);

            return $serializer->deserialize($response->getContent(true), Solution::class, 'json');
        } catch (HttpExceptionInterface $e) {
            $response = $e->getResponse();

            if (stripos($response->getHeaders(false)['content-type'][0], 'application/json') !== false) {
                $result = $response->toArray(false);

                throw new Exception($result['error'], $result['code'], $e);
            }

            throw new Exception($response->getContent(false), $response->getStatusCode(), $e);
        }
    }
}