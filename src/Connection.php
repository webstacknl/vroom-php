<?php

declare(strict_types=1);

namespace Webstack\Vroom;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Serializer\Exception\ExceptionInterface as SerializerException;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface as HttpClientException;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Webstack\Vroom\Exceptions\Exception;
use Webstack\Vroom\Exceptions\InputException;
use Webstack\Vroom\Exceptions\InternalException;
use Webstack\Vroom\Exceptions\RoutingException;
use Webstack\Vroom\Resource\Problem;
use Webstack\Vroom\Resource\Solution;

final class Connection
{
    public string $uri;

    public int $timeout = 300;

    private ?HttpClientInterface $client = null;

    public function __construct(string $uri = null)
    {
        if ($uri) {
            $this->uri = $uri;
        }
    }

    /**
     * Set the internal HttpClient.
     */
    public function setClient(HttpClientInterface $client): void
    {
        $this->client = $client;
    }

    /**
     * @throws SerializerException
     * @throws HttpClientException
     */
    public function compute(Problem $problem): Solution
    {
        $client = $this->client ?? HttpClient::create();

        try {
            $serializer = new Serializer();

            $json = $serializer->normalize($problem);

            $response = $client->request('POST', $this->uri, [
                'json' => $json,
                'timeout' => $this->timeout,
            ]);

            /** @var Solution $solution */
            $solution = $serializer->deserialize($response->getContent(), Solution::class, 'json');
            $solution->code = 0;

            return $solution;
        } catch (HttpExceptionInterface $httpException) {
            $response = $httpException->getResponse();

            if (false !== stripos($response->getHeaders(false)['content-type'][0], 'application/json')) {
                $result = $response->toArray(false);

                switch ($result['code']) {
                    case 1:
                        throw new InternalException($result['error'], $result['code'], $httpException);
                    case 2:
                        throw new InputException($result['error'], $result['code'], $httpException);
                    case 3:
                        throw new RoutingException($result['error'], $result['code'], $httpException);
                }
            }

            throw new Exception($response->getContent(false), $response->getStatusCode(), $httpException);
        }
    }
}
