<?php

namespace Webstack\Vroom\Tests;

use Geocoder\Model\Coordinates;
use PHPUnit\Framework\TestCase;
use Webstack\Vroom\Resource\Location;
use Webstack\Vroom\Resource\AbsoluteTimeWindow;
use Webstack\Vroom\Resource\RelativeTimeWindow;
use Webstack\Vroom\Resource\Vehicle;
use Webstack\Vroom\Serializer;

class SerializerTest extends TestCase
{
    public function setUp(): void
    {
        $this->serializer = new Serializer();
    }

    public function testNormalizeVehicle()
    {
        $vehicle = new Vehicle();
        $vehicle->setId(1);
        $vehicle->setStart(new Location(4.6311356, 52.1284105));

        $this->assertEquals([
            'id' => 1,
            'profile' => 'car',
            'start' => [
                4.6311356,
                52.1284105
            ],
        ], $this->serializer->normalize($vehicle));

        $vehicle->setEnd(new Location(4.6311356, 52.1284105));

        $this->assertEquals([
            'id' => 1,
            'profile' => 'car',
            'start' => [
                4.6311356,
                52.1284105
            ],
            'end' => [
                4.6311356,
                52.1284105
            ],
        ], $this->serializer->normalize($vehicle));
    }

    public function testNormalizeTimeWindow()
    {
        $start = new \DateTime('2021-02-06T12:30:00+00:00');
        $end = new \DateTime('2021-02-06T14:30:00+00:00');

        $absoluteTimeWindow = new AbsoluteTimeWindow($start, $end);

        $this->assertEquals([
            1612614600,
            1612621800,
        ], $this->serializer->normalize($absoluteTimeWindow));

        $relativeTimeWindow = new RelativeTimeWindow(0, 14400);

        $this->assertEquals([
            0,
            14400,
        ], $this->serializer->normalize($relativeTimeWindow));
    }
}
