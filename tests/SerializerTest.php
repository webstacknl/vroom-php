<?php

declare(strict_types=1);

namespace Webstack\Vroom\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Exception\ExceptionInterface as SerializerException;
use Webstack\Vroom\Resource\AbsoluteTimeWindow;
use Webstack\Vroom\Resource\Costs;
use Webstack\Vroom\Resource\Job;
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

    /**
     * @throws SerializerException
     */
    public function testNormalizeVehicleTypeAndCosts(): void
    {
        $vehicle = new Vehicle(1);
        $vehicle->type = 'truck';
        $vehicle->costs = new Costs();
        $vehicle->costs->perTaskHour = 1800;
        $vehicle->costs->perKm = 100;

        $this->assertEquals([
            'id' => 1,
            'costs' => [
                'fixed' => 0,
                'per_hour' => 3600,
                'per_task_hour' => 1800,
                'per_km' => 100,
            ],
            'type' => 'truck',
        ], $this->serializer->normalize($vehicle));
    }

    /**
     * @throws SerializerException
     */
    public function testNormalizeJobPerType(): void
    {
        $job = new Job(999);
        $job->setupPerType = ['truck' => 120, 'bike' => 300];
        $job->servicePerType = ['truck' => 60];

        $this->assertEquals([
            'id' => 999,
            'setup_per_type' => ['truck' => 120, 'bike' => 300],
            'service_per_type' => ['truck' => 60],
        ], $this->serializer->normalize($job));
    }
}
