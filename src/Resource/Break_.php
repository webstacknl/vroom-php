<?php

namespace Webstack\Vroom\Resource;

use Webstack\Vroom\Traits\DescriptionTrait;
use Webstack\Vroom\Traits\IdTrait;

/**_
 */
class Break_
{
    use IdTrait;
    use DescriptionTrait;

    /**
     * @var array<TimeWindowInterface>
     */
    protected $timeWindows = [];

    /**
     * @var int
     */
    protected $service = 0;

    /**
     * @return array<TimeWindowInterface>
     */
    public function getTimeWindows(): array
    {
        return $this->timeWindows;
    }

    public function addTimeWindow(TimeWindowInterface $timeWindow): void
    {
        $this->timeWindows[] = $timeWindow;
    }

    public function getService(): int
    {
        return $this->service;
    }

    public function setService(int $service): void
    {
        $this->service = $service;
    }
}
