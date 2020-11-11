<?php

namespace Webstack\Vroom\Resource;

/**
 * Class RelativeTimeWindow
 */
class RelativeTimeWindow implements TimeWindowInterface
{
    /**
     * @var int
     */
    private $start;

    /**
     * @var int
     */
    private $end;

    /**
     * RelativeTimeWindow constructor.
     * @param int $start
     * @param int $end
     */
    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @return int
     */
    public function getEnd(): int
    {
        return $this->end;
    }
}