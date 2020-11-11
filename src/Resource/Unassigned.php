<?php

namespace Webstack\Vroom\Resource;

use Webstack\Vroom\Traits\IdTrait;

/**
 * Class Unassigned
 */
class Unassigned
{
    use IdTrait;

    /**
     * @var Location
     */
    protected $location;

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }
}