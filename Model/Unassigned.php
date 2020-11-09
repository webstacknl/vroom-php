<?php

namespace Webstack\Vroom\Model;

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