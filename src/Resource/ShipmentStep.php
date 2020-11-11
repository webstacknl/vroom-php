<?php

namespace Webstack\Vroom\Resource;

use Webstack\Vroom\Traits\DescriptionTrait;
use Webstack\Vroom\Traits\IdTrait;

/**
 * Class ShipmentStep
 *
 * @link https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#shipments
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
     * @var integer|null
     */
    protected $locationIndex;

    /**
     * @var integer|null
     */
    protected $service;

    /**
     * @var TimeWindowInterface[]|null
     */
    protected $timeWindows;

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * @param Location|null $location
     */
    public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }

    /**
     * @return int|null
     */
    public function getLocationIndex(): ?int
    {
        return $this->locationIndex;
    }

    /**
     * @param int|null $locationIndex
     */
    public function setLocationIndex(?int $locationIndex): void
    {
        $this->locationIndex = $locationIndex;
    }

    /**
     * @return int|null
     */
    public function getService(): ?int
    {
        return $this->service;
    }

    /**
     * @param int|null $service
     */
    public function setService(?int $service): void
    {
        $this->service = $service;
    }

    /**
     * @return TimeWindowInterface[]|null
     */
    public function getTimeWindows(): ?array
    {
        return $this->timeWindows;
    }

    /**
     * @param TimeWindowInterface $timeWindow
     */
    public function addTimeWindow(TimeWindowInterface $timeWindow): void
    {
        $this->timeWindows[] = $timeWindow;
    }
}