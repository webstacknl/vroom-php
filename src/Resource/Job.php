<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

/**
 * @see https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#jobs
 */
final class Job
{
    public int $id;

    public string $description;

    public Location $location;

    public int $locationIndex;

    public int $setup;

    public int $service;

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

    /**
     * @var array<int>
     */
    public array $skills;

    public int $priority;

    /**
     * @var array<TimeWindowInterface>
     */
    public array $timeWindows;

    public function __construct(int $id)
    {
        if ($id) {
            $this->id = $id;
        }
    }
}
