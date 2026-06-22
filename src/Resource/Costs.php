<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

class Costs
{
    public int $fixed = 0;

    public int $perHour = 3600;

    public int $perTaskHour = 0;

    public int $perKm = 0;
}
