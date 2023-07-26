<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class Location implements \Stringable
{
    public float $lon;

    public float $lat;

    public function __construct(float $lon, float $lat)
    {
        if ($lon && $lat) {
            $this->lon = $lon;
            $this->lat = $lat;
        }
    }

    public function __toString(): string
    {
        return vsprintf('%f, %f', [
            $this->lat,
            $this->lon,
        ]);
    }
}
