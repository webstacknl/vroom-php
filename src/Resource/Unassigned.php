<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

use Webstack\Vroom\Traits\IdTrait;

class Unassigned
{
    use IdTrait;

    /**
     * @var Location
     */
    protected $location;

    public function getLocation(): Location
    {
        return $this->location;
    }
}
