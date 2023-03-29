<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class Problem
{
    public Options $options;

    /**
     * @var array<Job>
     */
    public array $jobs;

    /**
     * @var array<Shipment>
     */
    public array $shipments;

    /**
     * @var array<Vehicle>
     */
    public array $vehicles;

    /**
     * @var array{string?: array{string: array{int, array{int, int}}}}
     */
    public array $matrices;

    public function __construct()
    {
        $this->options = new Options();
    }
}
