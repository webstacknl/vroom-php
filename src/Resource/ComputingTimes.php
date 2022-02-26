<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

class ComputingTimes
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

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function getSolving(): int
    {
        return $this->solving;
    }

    public function getRouting(): ?int
    {
        return $this->routing;
    }
}
