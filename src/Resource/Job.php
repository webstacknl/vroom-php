<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

/**
 * @see https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#jobs
 */
final class Job extends ShipmentStep
{
    /**
     * @var array<int>
     *
     * @deprecated
     */
    public array $amount;

    /**
     * @var array<int>
     */
    public array $delivery;

    /**
     * @var array<int>
     */
    public array $pickup;

    /**
     * @var array<int>
     */
    public array $skills;

    public int $priority;
}
