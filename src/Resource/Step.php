<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

/**
 * @see https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#steps
 */
final class Step
{
    public string $type;

    public int|\DateTime $arrival;

    public int $duration;

    public int $setup;

    public int $service;

    public int $waitingTime;

    /**
     * @var array<Violation>
     */
    public array $violations;

    public string $description;

    public Location $location;

    public int $locationIndex;

    public int $id;

    /**
     * @deprecated
     */
    public int $job;

    /**
     * @var array<int>
     */
    public array $load;

    public int $distance;
}
