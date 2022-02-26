<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

use Webstack\Vroom\Traits\DescriptionTrait;
use Webstack\Vroom\Traits\IdTrait;

/**
 * @see https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#vehicles
 */
class Vehicle
{
    use IdTrait;
    use DescriptionTrait;

    /**
     * @var string
     */
    protected $profile = 'car';

    /**
     * @var Location|null
     */
    protected $start;

    /**
     * @var int|null
     */
    protected $start_index;

    /**
     * @var Location|null
     */
    protected $end;

    /**
     * @var int|null
     */
    protected $end_index;

    /**
     * @var array<int>|null
     */
    protected $capacity;

    /**
     * @var array<int>|null
     */
    protected $skills;

    /**
     * @var TimeWindowInterface|null
     */
    protected $time_window;

    /**
     * @var Break_[]|null
     */
    protected $breaks;

    public function getProfile(): string
    {
        return $this->profile;
    }

    public function setProfile(string $profile): void
    {
        $this->profile = $profile;
    }

    public function getStart(): ?Location
    {
        return $this->start;
    }

    public function setStart(?Location $start): void
    {
        $this->start = $start;
    }

    public function getStartIndex(): ?int
    {
        return $this->start_index;
    }

    public function setStartIndex(?int $start_index): void
    {
        $this->start_index = $start_index;
    }

    public function getEnd(): ?Location
    {
        return $this->end;
    }

    public function setEnd(?Location $end): void
    {
        $this->end = $end;
    }

    public function getEndIndex(): ?int
    {
        return $this->end_index;
    }

    public function setEndIndex(?int $end_index): void
    {
        $this->end_index = $end_index;
    }

    /**
     * @return array<int>|null
     */
    public function getCapacity(): ?array
    {
        return $this->capacity;
    }

    /**
     * @param int[]|null $capacity
     */
    public function setCapacity(?array $capacity): void
    {
        $this->capacity = $capacity;
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
    public function setSkills(array $skills): void
    {
        $this->skills = $skills;
    }

    public function addSkill(int $skill): void
    {
        $this->skills[] = $skill;
    }

    public function getTimeWindow(): ?TimeWindowInterface
    {
        return $this->time_window;
    }

    public function setTimeWindow(?TimeWindowInterface $time_window): void
    {
        $this->time_window = $time_window;
    }

    /**
     * @return Break_[]|null
     */
    public function getBreaks(): ?array
    {
        return $this->breaks;
    }

    /**
     * @param Break_[]|null $breaks
     */
    public function setBreaks(?array $breaks): void
    {
        $this->breaks = $breaks;
    }

    public function addBreak(Break_ $break): void
    {
        $this->breaks[] = $break;
    }
}
