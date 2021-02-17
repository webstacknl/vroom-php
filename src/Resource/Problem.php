<?php

namespace Webstack\Vroom\Resource;

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
    public function addVehicle(Vehicle $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    /**
     * @param Job $job
     */
    public function addJob(Job $job): void
    {
        $this->jobs[] = $job;
    }

    /**
     * @param Shipment $shipment
     */
    public function addShipment(Shipment $shipment): void
    {
        $this->shipments[] = $shipment;
    }

    /**
     * @return Shipment[]
     */
    public function getShipments(): array
    {
        return $this->shipments;
    }
}