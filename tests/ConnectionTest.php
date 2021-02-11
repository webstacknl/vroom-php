<?php


namespace Webstack\Vroom\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface as HttpClientException;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface as SerializerException;
use Webstack\Vroom\Resource\Problem;
use Webstack\Vroom\Connection;

/**
 * Class ConnectionTest
 */
class ConnectionTest extends TestCase
{
    /**
     * @var Connection
     */
    private $connection;

    public function setUp(): void
    {
        $solution = file_get_contents('https://raw.githubusercontent.com/VROOM-Project/vroom/master/docs/example_1_sol.json');

        $responses = [
            new MockResponse($solution)
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
        $problem = new Problem();

        $solution = $this->connection->compute($problem);

        $this->assertCount(2, $solution->getRoutes());
    }
}
