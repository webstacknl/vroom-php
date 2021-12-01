<?php

namespace Webstack\Vroom\Resource;

/**
 * @see https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#shipments
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
     * @var array<int>
     */
    protected $amount;

    /**
     * @var array<int>|null
     */
    protected $skills;

    /**
     * @var int
     */
    protected $priority = 0;

    public function getPickup(): Pickup
    {
        return $this->pickup;
    }

    public function setPickup(Pickup $pickup): void
    {
        $this->pickup = $pickup;
    }

    public function getDelivery(): Delivery
    {
        return $this->delivery;
    }

    public function setDelivery(Delivery $delivery): void
    {
        $this->delivery = $delivery;
    }

    /**
     * @return array<int>
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
     * @return array<int>|null
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

    public function addSkill(int $skill): void
    {
        $this->skills[] = $skill;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }
}
