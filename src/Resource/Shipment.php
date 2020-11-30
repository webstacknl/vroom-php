<?php

namespace Webstack\Vroom\Resource;

/**
 * Class Shipment
 *
 * @link https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#shipments
 */
class Shipment
{
    /**
     * @var Pickup
     */
    protected $pickup;

    /**
     * @var Delivery
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
     * @return Pickup
     */
    public function getPickup(): Pickup
    {
        return $this->pickup;
    }

    /**
     * @param Pickup $pickup
     */
    public function setPickup(Pickup $pickup): void
    {
        $this->pickup = $pickup;
    }

    /**
     * @return Delivery
     */
    public function getDelivery(): Delivery
    {
        return $this->delivery;
    }

    /**
     * @param Delivery $delivery
     */
    public function setDelivery(Delivery $delivery): void
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
     * @param int $skill
     */
    public function addSkill(int $skill): void
    {
        $this->skills[] = $skill;
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