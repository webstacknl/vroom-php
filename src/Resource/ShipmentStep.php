<?php

namespace Webstack\Vroom\Resource;

use Webstack\Vroom\Traits\DescriptionTrait;
use Webstack\Vroom\Traits\IdTrait;

/**
 * @see https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#shipments
 */
abstract class ShipmentStep
{
    use IdTrait;
    use DescriptionTrait;

    /**
     * @var Location|null
     */
    protected $location;

    /**
     * @var int|null
     */
    protected $locationIndex;

    /**
     * @var int|null
     */
    protected $service;

    /**
     * @var array<TimeWindowInterface>|null
     */
    protected $timeWindows;

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }

    public function getLocationIndex(): ?int
    {
        return $this->locationIndex;
    }

    public function setLocationIndex(?int $locationIndex): void
    {
        $this->locationIndex = $locationIndex;
    }

    public function getService(): ?int
    {
        return $this->service;
    }

    public function setService(?int $service): void
    {
        $this->service = $service;
    }

    /**
     * @return array<TimeWindowInterface>|null
     */
    public function getTimeWindows(): ?array
    {
        return $this->timeWindows;
    }

    public function addTimeWindow(TimeWindowInterface $timeWindow): void
    {
        $this->timeWindows[] = $timeWindow;
    }
}
