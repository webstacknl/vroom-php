<?php

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
     * @var HttpClientInterface|null
     */
    private $client;

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
    public function setTimeout(int $timeout): void
    {
        $this->timeout = $timeout;
    }

    /**
     * Set the internal HttpClient
     *
     * @param HttpClientInterface $client
     */
    public function setClient(HttpClientInterface $client): void
    {
        $this->client = $client;
    }

    /**
     * @param Problem $problem
     * @return Solution
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
