<?php

declare(strict_types=1);

namespace Webstack\Vroom\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Exception\ExceptionInterface as SerializerException;
use Webstack\Vroom\Resource\AbsoluteTimeWindow;
use Webstack\Vroom\Resource\Location;
use Webstack\Vroom\Resource\RelativeTimeWindow;
use Webstack\Vroom\Resource\Vehicle;
use Webstack\Vroom\Serializer;

final class SerializerTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = new Serializer();
    }

    /**
     * @throws SerializerException
     */
    public function testNormalizeVehicle(): void
    {
        $vehicle = new Vehicle(1);
        $vehicle->start = new Location(4.6311356, 52.1284105);

        $this->assertEquals([
            'id' => 1,
            'start' => [
                4.6311356,
                52.1284105,
            ],
        ], $this->serializer->normalize($vehicle));

        $vehicle->end = new Location(4.6311356, 52.1284105);

        $this->assertEquals([
            'id' => 1,
            'start' => [
                4.6311356,
                52.1284105,
            ],
            'end' => [
                4.6311356,
                52.1284105,
            ],
        ], $this->serializer->normalize($vehicle));
    }

    /**
     * @throws SerializerException
     */
    public function testNormalizeTimeWindow(): void
    {
        $absoluteTimeWindow = new AbsoluteTimeWindow(new \DateTimeImmutable('2021-02-06T12:30:00+00:00'), new \DateTimeImmutable('2021-02-06T14:30:00+00:00'));

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
