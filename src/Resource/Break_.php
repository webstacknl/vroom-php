<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class Break_
{
    public int $id;

    /**
     * @var array<TimeWindowInterface>
     */
    public array $timeWindows;

    public int $service;

    public string $description;

    /**
     * @var array<int>
     */
    public array $maxLoad;
}
