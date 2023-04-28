<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

/**
 * @see https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#steps
 */
final class Step
{
    public ?int $id = null;

    public string $type;

    public int|\DateTimeImmutable $arrival;

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

    /**
     * @deprecated
     */
    public int $job;

    /**
     * @var array<int>
     */
    public array $load;

    public int $distance;

    public function addViolation(Violation $violation): void
    {
        $this->violations[] = $violation;
    }
}
