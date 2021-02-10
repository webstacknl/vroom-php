<?php

namespace Webstack\Vroom\Tests;

use Geocoder\Model\Coordinates;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Webstack\Vroom\Resource\Job;
use Webstack\Vroom\Resource\Problem;
use Webstack\Vroom\Resource\Solution;
use Webstack\Vroom\Resource\Vehicle;
use Webstack\Vroom\Connection;

class ConnectionTest extends TestCase
{
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

    public function testCompute()
    {
        $problem = new Problem();

        $solution = $this->connection->compute($problem);

        $this->assertInstanceOf(Solution::class, $solution);
        $this->assertCount(2, $solution->getRoutes());
    }
}
