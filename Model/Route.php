<?php

namespace Webstack\Vroom\Model;

/**
 * Class Route
 */
class Route
{
    /**
     * @var int
     */
    protected $vehicle;

    /**
     * @var Step[]
     */
    protected $steps;

    /**
     * @var int
     */
    protected $costs;

    /**
     * @var int
     */
    protected $service;

    /**
     * @var int
     */
    protected $duration;

    /**
     * @var int
     */
    protected $waitingTime;

    /**
     * @var int
     */
    protected $priority;

    /**
     * @var int[]
     * @deprecated
     */
    protected $amount;

    /**
     * @var int[]
     */
    protected $delivery;

    /**
     * @var int[]
     */
    protected $pickup;

    /**
     * @var string|null
     */
    protected $geometry;

    /**
     * @var int|null
     */
    protected $distance;

    /**
     * @return int
     */
    public function getVehicle(): int
    {
        return $this->vehicle;
    }

    /**
     * @return Step[]
     */
    public function getSteps(): array
    {
        return $this->steps;
    }

    /**
     * @return int
     */
    public function getCosts(): int
    {
        return $this->costs;
    }

    /**
     * @return int
     */
    public function getService(): int
    {
        return $this->service;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @return int
     */
    public function getWaitingTime(): int
    {
        return $this->waitingTime;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @return int[]
     * @deprecated
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @return int[]
     */
    public function getDelivery(): array
    {
        return $this->delivery;
    }

    /**
     * @return int[]
     */
    public function getPickup(): array
    {
        return $this->pickup;
    }

    /**
     * @return string|null
     */
    public function getGeometry(): ?string
    {
        return $this->geometry;
    }

    /**
     * @return int|null
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }
}