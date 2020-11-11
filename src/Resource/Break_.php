<?php

namespace Webstack\Vroom\Resource;

use Webstack\Vroom\Traits\DescriptionTrait;
use Webstack\Vroom\Traits\IdTrait;

/**
 * Class Break_
 */
class Break_
{
    use IdTrait;
    use DescriptionTrait;

    /**
     * @var TimeWindowInterface[]
     */
    protected $timeWindows = [];

    /**
     * @var integer
     */
    protected $service = 0;

    /**
     * @return TimeWindowInterface[]
     */
    public function getTimeWindows(): array
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

    /**
     * @return int
     */
    public function getService(): int
    {
        return $this->service;
    }

    /**
     * @param int $service
     */
    public function setService(int $service): void
    {
        $this->service = $service;
    }
}