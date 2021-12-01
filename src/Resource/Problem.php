<?php

namespace Webstack\Vroom\Resource;

class Problem
{
    /**
     * @var Options
     */
    protected $options;

    /**
     * @var array<Vehicle>
     */
    public $vehicles = [];

    /**
     * @var array<Shipment>
     */
    protected $jobs = [];

    /**
     * @var array<Shipment>
     */
    protected $shipments = [];

    public function __construct(Options $options = null)
    {
        $this->options = $options;
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function addJob(Job $job): void
    {
        $this->jobs[] = $job;
    }

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
