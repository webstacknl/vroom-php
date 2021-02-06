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
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Webstack\Vroom\Exceptions\Exception;
use Webstack\Vroom\Exceptions\InputException;
use Webstack\Vroom\Exceptions\InternalException;
use Webstack\Vroom\Exceptions\RoutingException;
use Webstack\Vroom\Resource\Problem;
use Webstack\Vroom\Resource\Solution;
use Webstack\Vroom\Serializer\Normalizer\ArrivalNormalizer;
use Webstack\Vroom\Serializer\Normalizer\LocationNormalizer;
use Webstack\Vroom\Serializer\Normalizer\OptionsNormalizer;
use Webstack\Vroom\Serializer\Normalizer\TimeWindowNormalizer;

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
     * @var int
     */
    protected $timeout = 300;

    /**
     * @param string $uri
     */
    public function __construct(string $uri)
    {
        $this->uri = $uri;
    }

    /**
     * Timeout in seconds
     *
     * @param int $timeout
     */
    public function setTimeout(int $timeout)
    {
        $this->timeout = $timeout;
    }

    /**
     * Set the internal HttpClient
     *
     * @param HttpClientInterface $client
     */
    public function setClient(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param Problem $problem
     * @return Solution
     * @throws Exception
     * @throws SerializerExceptionInterface
     * @throws HttpClientExceptionInterface
     */
    public function compute(Problem $problem): Solution
    {
        $client = $this->client ?? HttpClient::create();

        try {
            $serializer = new Serializer([
                new OptionsNormalizer(),
                new TimeWindowNormalizer(),
                new LocationNormalizer(),
                new ArrivalNormalizer(),
                new PropertyNormalizer(null, new CamelCaseToSnakeCaseNameConverter(), new PhpDocExtractor()),
                new ArrayDenormalizer(),
            ], [
                new JsonEncoder()
            ]);

            $json = $serializer->normalize($problem, null, [
                AbstractObjectNormalizer::SKIP_NULL_VALUES => true
            ]);

            $response = $client->request('POST', $this->uri, [
                'json' => $json,
                'timeout' => $this->timeout
            ]);

            return $serializer->deserialize($response->getContent(true), Solution::class, 'json');
        } catch (HttpExceptionInterface $e) {
            $response = $e->getResponse();

            if (stripos($response->getHeaders(false)['content-type'][0], 'application/json') !== false) {
                $result = $response->toArray(false);

                switch ($result['code']) {
                    case 1:
                        throw new InternalException($result['error'], $result['code'], $e);
                    case 2:
                        throw new InputException($result['error'], $result['code'], $e);
                    case 3:
                        throw new RoutingException($result['error'], $result['code'], $e);
                }
            }

            throw new Exception($response->getContent(false), $response->getStatusCode(), $e);
        }
    }
}
