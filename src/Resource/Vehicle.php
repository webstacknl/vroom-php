<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

/**
 * @see https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#vehicles
 */
final class Vehicle
{
    public int $id;

    public string $profile;

    public string $description;

    public Location $start;

    public int $startIndex;

    public Location $end;

    public int $endIndex;

    /**
     * @var array<int>
     */
    public array $capacity;

    /**
     * @var Costs
     */
    public Costs $costs;

    /**
     * @var array<int>
     */
    public array $skills;

    public TimeWindowInterface $timeWindow;

    /**
     * @var Break_[]
     */
    public array $breaks;

    public float $speedFactor;

    public int $maxTasks;

    public int $maxTravelTime;

    public array $steps;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
