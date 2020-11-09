<?php

namespace Webstack\Vroom\Model;

/**
 * Class Summary
 */
class Summary
{
    /**
     * @var int
     */
    protected $costs;

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
     * @var ComputingTime
     */
    protected $computingTime;
}