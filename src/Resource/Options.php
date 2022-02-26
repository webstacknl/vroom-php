<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

class Options
{
    /**
     * @var bool|null
     */
    protected $geometry;

    /**
     * @var int|null
     */
    protected $threads;

    /**
     * @var int|null
     */
    protected $explore;

    /**
     * @param bool|null $geometry Retrieve geometry (-g)
     * @param int|null  $threads  Number of threads to use (-t)
     * @param int|null  $explore  Exploration level to use (0..5) (-x)
     */
    public function __construct(bool $geometry = null, int $threads = null, int $explore = null)
    {
        $this->geometry = $geometry;
        $this->threads = $threads;
        $this->explore = $explore;
    }

    public function getGeometry(): ?bool
    {
        return $this->geometry;
    }

    public function getThreads(): ?int
    {
        return $this->threads;
    }

    public function getExplore(): ?int
    {
        return $this->explore;
    }
}
