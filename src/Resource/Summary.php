<?php

namespace Webstack\Vroom\Resource;

/**
 * Class Summary
 */
class Summary
{
    /**
     * @var int
     */
    protected $unassigned;

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
    protected $costs;

    /**
     * @return int|null
     */
    public function getCosts(): ?int
    {
        return $this->costs;
    }

    /**
     * @return int
     */
    public function getUnassigned(): int
    {
        return $this->unassigned;
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
     * @return int|null
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }

    /**
     * @return ComputingTimes
     */
    public function getComputingTimes(): ComputingTimes
    {
        return $this->computingTimes;
    }
}