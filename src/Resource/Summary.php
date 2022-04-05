<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

class Summary
{
    /**
     * @var int
     */
    protected $unassigned;

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
     * @var int|null
     */
    protected $distance;

    /**
     * @var ComputingTimes
     */
    protected $computingTimes;

    /**
     * @var int|null
     */
    protected $cost;

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function getUnassigned(): int
    {
        return $this->unassigned;
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

    public function getDistance(): ?int
    {
        return $this->distance;
    }

    public function getComputingTimes(): ComputingTimes
    {
        return $this->computingTimes;
    }
}
