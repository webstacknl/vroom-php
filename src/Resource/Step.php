<?php

namespace Webstack\Vroom\Resource;

use DateTime;
use Webstack\Vroom\Traits\DescriptionTrait;
use Webstack\Vroom\Traits\IdTrait;

/**
 * Class Step
 *
 * @link https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#steps
 */
class Step
{
    use IdTrait;
    use DescriptionTrait;

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
     * @deprecated
     */
    protected $job;

    /**
     * @var int[]
     */
    protected $load;

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

    /**
     * @return string
     */
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

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @return int
     * @deprecated
     */
    public function getJob(): int
    {
        return $this->job;
    }

    /**
     * @return int[]
     */
    public function getLoad(): array
    {
        return $this->load;
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
    public function getWaitingTime(): int
    {
        return $this->waitingTime;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

}