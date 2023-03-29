<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class Route
{
    public int $vehicle;

    /**
     * @var array<Step>
     */
    public array $steps;

    public int $cost;

    public int $setup;

    public int $service;

    public int $duration;

    public int $waitingTime;

    public int $priority;

    /**
     * @var array<Violation>
     */
    public array $violations;

    /**
     * @var array<int>
     *
     * @deprecated
     */
    public array $amount;

    /**
     * @var array<int>
     */
    public array $delivery;

    /**
     * @var array<int>
     */
    public array $pickup;

    public string $description;

    public string $geometry;

    public int $distance;
}
