<?php

namespace Webstack\Vroom\Resource;

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

    public function __construct(float $lon = null, float $lat = null)
    {
        $this->lon = $lon;
        $this->lat = $lat;
    }

    public function getLon(): float
    {
        return $this->lon;
    }

    public function setLon(float $lon): void
    {
        $this->lon = $lon;
    }

    public function getLat(): float
    {
        return $this->lat;
    }

    public function setLat(float $lat): void
    {
        $this->lat = $lat;
    }
}
