<?php

namespace Webstack\Vroom;

use Webstack\Vroom\Model\Job;
use Webstack\Vroom\Model\Options;
use Webstack\Vroom\Model\Shipment;
use Webstack\Vroom\Model\Vehicle;

/**
 * Class Problem
 */
class Problem
{
    /**
     * @var Options
     */
    protected $options;

    /**
     * @var Vehicle[]
     */
    public $vehicles = [];

    /**
     * @var Shipment[]
     */
    protected $jobs = [];

    /**
     * @var Shipment[]
     */
    protected $shipments = [];

    /**
     * @param Options|null $options
     */
    public function __construct(Options $options = null)
    {
        $this->options = $options;
    }

    /**
     * @param Vehicle $vehicle
     */
    public function addVehicle(Vehicle $vehicle)
    {
        $this->vehicles[] = $vehicle;
    }

    /**
     * @param Job $job
     */
    public function addJob(Job $job)
    {
        $this->jobs[] = $job;
    }

    /**
     * @param Shipment $shipment
     */
    public function addShipment(Shipment $shipment)
    {
        $this->shipments[] = $shipment;
    }
}