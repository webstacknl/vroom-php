<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class ShipmentStep
{
    public int $id;

    public string $description;

    public Location $location;

    public int $locationIndex;

    public int $setup;

    public int $service;

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
