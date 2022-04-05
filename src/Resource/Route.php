<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

class Route
{
    /**
     * @var int
     */
    protected $vehicle;

    /**
     * @var array<Step>
     */
    protected $steps;

    /**
     * @var int|null
     */
    protected $cost;

    /**
     * @var int
     */
    protected $setup;

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
     * @var array<int>
     *
     * @deprecated
     */
    protected $amount;

    /**
     * @var array<int>
     */
    protected $delivery;

    /**
     * @var array<int>
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

    public function getVehicle(): int
    {
        return $this->vehicle;
    }

    /**
     * @return array<Step>
     */
    public function getSteps(): array
    {
        return $this->steps;
    }

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function getSetup(): int
    {
        return $this->setup;
    }

    public function getService(): int
    {
        return $this->service;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getWaitingTime(): int
    {
        return $this->waitingTime;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @return array<int>
     *
     * @deprecated
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @return array<int>
     */
    public function getDelivery(): array
    {
        return $this->delivery;
    }

    /**
     * @return array<int>
     */
    public function getPickup(): array
    {
        return $this->pickup;
    }

    public function getGeometry(): ?string
    {
        return $this->geometry;
    }

    public function getDistance(): ?int
    {
        return $this->distance;
    }
}
