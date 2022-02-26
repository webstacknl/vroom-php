<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

/**
 * @see https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#jobs
 */
class Job extends ShipmentStep
{
    /**
     * @var array<int>
     *
     * @deprecated
     */
    protected $amount;

    /**
     * @var array<int>
     */
    protected $delivery;

    /**
     * @var array<int>
     */
    protected $pickup;

    /**
     * @var array<int>
     */
    protected $skills;

    /**
     * @var int
     */
    protected $priority = 0;

    /**
     * @return array<int>
     *
     * @deprecated
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @param int[] $amount
     *
     * @deprecated
     */
    public function setAmount(array $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return array<int>
     */
    public function getDelivery(): array
    {
        return $this->delivery;
    }

    /**
     * @param int[] $delivery
     */
    public function setDelivery(array $delivery): void
    {
        $this->delivery = $delivery;
    }

    /**
     * @return array<int>
     */
    public function getPickup(): array
    {
        return $this->pickup;
    }

    /**
     * @param int[] $pickup
     */
    public function setPickup(array $pickup): void
    {
        $this->pickup = $pickup;
    }

    /**
     * @return array<int>
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @param int[] $skills
     */
    public function setSkills(array $skills): void
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
