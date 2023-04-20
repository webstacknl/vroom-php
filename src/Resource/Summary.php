<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class Summary
{
    public int $cost;

    public int $routes;

    public int $unassigned;

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

    public int $distance;

    public ComputingTimes $computingTimes;

    public function addViolation(Violation $violation): void
    {
        $this->violations[] = $violation;
    }
}
