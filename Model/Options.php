<?php

namespace Webstack\Vroom\Model;

/**
 * Class Options
 */
class Options
{
    /**
     * @var bool|null
     */
    protected $geometry;

    /**
     * @var integer|null
     */
    protected $threads;

    /**
     * @var integer|null
     */
    protected $explore;

    /**
     * @param bool|null $geometry Retrieve geometry (-g)
     * @param int|null $threads Number of threads to use (-t)
     * @param int|null $explore Exploration level to use (0..5) (-x)
     */
    public function __construct(bool $geometry = null, int $threads = null, int $explore = null)
    {
        $this->geometry = $geometry;
        $this->threads = $threads;
        $this->explore = $explore;
    }

    /**
     * @return bool|null
     */
    public function getGeometry(): ?bool
    {
        return $this->geometry;
    }

    /**
     * @return int|null
     */
    public function getThreads(): ?int
    {
        return $this->threads;
    }

    /**
     * @return int|null
     */
    public function getExplore(): ?int
    {
        return $this->explore;
    }
}