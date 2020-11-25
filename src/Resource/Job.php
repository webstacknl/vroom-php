<?php

namespace Webstack\Vroom\Resource;

/**
 * Class Job
 *
 * @link https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#jobs
 */
class Job extends ShipmentStep
{
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
     * @var int[]
     */
    protected $skills;

    /**
     * @var int
     */
    protected $priority = 0;

    /**
     * @return int[]
     * @deprecated
     */
    public function getAmount(): array
    {
        return $this->amount;
    }

    /**
     * @param int[] $amount
     * @deprecated
     */
    public function setAmount(array $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int[]
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
     * @return int[]
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
     * @return int[]
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