<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

class VehicleStep
{
    public string $key;

    public int $id;

    public int $serviceAt;

    public int $serviceAfter;

    public int $serviceBefore;
}
