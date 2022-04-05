<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

use DateTime;
use Webstack\Vroom\Traits\DescriptionTrait;
use Webstack\Vroom\Traits\IdTrait;

/**
 * @see https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#steps
 */
class Step
{
    use IdTrait;
    use DescriptionTrait;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @var string
     */
    protected $type;

    /**
     * @var DateTime|int
     */
    protected $arrival;

    /**
     * @var int
     */
    protected $duration;

    /**
     * @var Location
     */
    protected $location;

    /**
     * @var int
     *
     * @deprecated
     */
    protected $job;

    /**
     * @var array<int>
     */
    protected $load;

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
    protected $waitingTime;

    /**
     * @var int
     */
    protected $distance;

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return DateTime|int
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @deprecated
     */
    public function getJob(): int
    {
        return $this->job;
    }

    /**
     * @return array<int>
     */
    public function getLoad(): array
    {
        return $this->load;
    }

    public function getService(): ?int
    {
        return $this->service;
    }

    public function getSetup(): ?int
    {
        return $this->setup;
    }

    public function getWaitingTime(): ?int
    {
        return $this->waitingTime;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}
