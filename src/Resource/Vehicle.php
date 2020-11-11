<?php

namespace Webstack\Vroom\Resource;

use Webstack\Vroom\Traits\IdTrait;

/**
 * Class Vehicle
 *
 * @link https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#vehicles
 */
class Vehicle
{
    use IdTrait;

    /**
     * @var string
     */
    protected $profile = 'car';

    /**
     * @var Location|null
     */
    protected $start;

    /**
     * @var integer|null
     */
    protected $start_index;

    /**
     * @var Location|null
     */
    protected $end;

    /**
     * @var integer|null
     */
    protected $end_index;

    /**
     * @var int[]|null
     */
    protected $capacity;

    /**
     * @var int[]|null
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

    /**
     * @return string
     */
    public function getProfile(): string
    {
        return $this->profile;
    }

    /**
     * @param string $profile
     */
    public function setProfile(string $profile): void
    {
        $this->profile = $profile;
    }

    /**
     * @return Location|null
     */
    public function getStart(): ?Location
    {
        return $this->start;
    }

    /**
     * @param Location|null $start
     */
    public function setStart(?Location $start): void
    {
        $this->start = $start;
    }

    /**
     * @return int|null
     */
    public function getStartIndex(): ?int
    {
        return $this->start_index;
    }

    /**
     * @param int|null $start_index
     */
    public function setStartIndex(?int $start_index): void
    {
        $this->start_index = $start_index;
    }

    /**
     * @return Location|null
     */
    public function getEnd(): ?Location
    {
        return $this->end;
    }

    /**
     * @param Location|null $end
     */
    public function setEnd(?Location $end): void
    {
        $this->end = $end;
    }

    /**
     * @return int|null
     */
    public function getEndIndex(): ?int
    {
        return $this->end_index;
    }

    /**
     * @param int|null $end_index
     */
    public function setEndIndex(?int $end_index): void
    {
        $this->end_index = $end_index;
    }

    /**
     * @return int[]|null
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
     * @return int[]|null
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

    /**
     * @return TimeWindowInterface|null
     */
    public function getTimeWindow(): ?TimeWindowInterface
    {
        return $this->time_window;
    }

    /**
     * @param TimeWindowInterface|null $time_window
     */
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

    /**
     * @param Break_ $break
     */
    public function addBreak(Break_ $break): void
    {
        $this->breaks[] = $break;
    }
}