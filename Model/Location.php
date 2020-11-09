<?php

namespace Webstack\Vroom\Model;

/**
 * Class Location
 */
class Location
{
    /**
     * @var float
     */
    protected $lon;

    /**
     * @var float
     */
    protected $lat;

    /**
     * Location constructor.
     *
     * @param float|null $lon
     * @param float|null $lat
     */
    public function __construct(float $lon = null, float $lat = null)
    {
        $this->lon = $lon;
        $this->lat = $lat;
    }

    /**
     * @return float
     */
    public function getLon(): float
    {
        return $this->lon;
    }

    /**
     * @param float $lon
     */
    public function setLon(float $lon): void
    {
        $this->lon = $lon;
    }

    /**
     * @return float
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     */
    public function setLat(float $lat): void
    {
        $this->lat = $lat;
    }

}