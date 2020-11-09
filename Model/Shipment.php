<?php

namespace Webstack\Vroom\Model;

/**
 * Class Shipment
 *
 * @link https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#shipments
 */
class Shipment
{
    /**
     * @var ShipmentStep
     */
    protected $pickup;

    /**
     * @var ShipmentStep
     */
    protected $delivery;

    /**
     * @var int[]
     */
    protected $amount;

    /**
     * @var int[]|null
     */
    protected $skills;

    /**
     * @var integer
     */
    protected $priority = 0;

    /**
     * @return ShipmentStep
     */
    public function getPickup(): ShipmentStep
    {
        return $this->pickup;
    }

    /**
     * @param ShipmentStep $pickup
     */
    public function setPickup(ShipmentStep $pickup): void
    {
        $this->pickup = $pickup;
    }

    /**
     * @return ShipmentStep
     */
    public function getDelivery(): ShipmentStep
    {
        return $this->delivery;
    }

    /**
     * @param ShipmentStep $delivery
     */
    public function setDelivery(ShipmentStep $delivery): void
    {
        $this->delivery = $delivery;
    }

    /**
     * @return int[]
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @param int[] $amount
     */
    public function setAmount(array $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int[]|null
     */
    public function getSkills(): ?array
    {
        return $this->skills;
    }

    /**
     * @param int[]|null $skills
     */
    public function setSkills(?array $skills): void
    {
        $this->skills = $skills;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }
}