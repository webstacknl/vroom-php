<?php

namespace Webstack\Vroom\Model;

/**
 * Class ComputingTime
 */
class ComputingTime
{
    /**
     * @var int
     */
    protected $loading;

    /**
     * @var int
     */
    protected $solving;

    /**
     * @var int|null
     */
    protected $routing;

    /**
     * @return int
     */
    public function getLoading(): int
    {
        return $this->loading;
    }

    /**
     * @return int
     */
    public function getSolving(): int
    {
        return $this->solving;
    }

    /**
     * @return int|null
     */
    public function getRouting(): ?int
    {
        return $this->routing;
    }
}