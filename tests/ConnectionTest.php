<?php

declare(strict_types=1);

namespace Webstack\Vroom\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface as SerializerException;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface as HttpClientException;
use Webstack\Vroom\Connection;
use Webstack\Vroom\Resource\Problem;

final class ConnectionTest extends TestCase
{
    private Connection $connection;

    protected function setUp(): void
    {
        $responses = [
            new MockResponse((string) file_get_contents('https://raw.githubusercontent.com/VROOM-Project/vroom/master/docs/example_1_sol.json')),
            new MockResponse((string) file_get_contents('https://raw.githubusercontent.com/VROOM-Project/vroom/master/docs/example_2_sol.json')),
            new MockResponse((string) file_get_contents('https://raw.githubusercontent.com/VROOM-Project/vroom/master/docs/example_3_sol.json')),
        ];

        $client = new MockHttpClient($responses);

        $this->connection = new Connection('http://localhost:3000');
        $this->connection->setClient($client);
    }

    /**
     * @throws SerializerException
     * @throws HttpClientException
     */
    public function testCompute(): void
    {
        $solution = $this->connection->compute(new Problem());
        $this->assertCount(2, $solution->routes);

        $solution = $this->connection->compute(new Problem());
        $this->assertCount(1, $solution->routes);

        $solution = $this->connection->compute(new Problem());
        $this->assertCount(2, $solution->routes);
    }
}
