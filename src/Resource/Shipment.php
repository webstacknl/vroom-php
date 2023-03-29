<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

/**
 * @see https://github.com/VROOM-Project/vroom/blob/master/docs/API.md#shipments
 */
final class Shipment
{
    public ShipmentStep $pickup;

    public ShipmentStep $delivery;

    /**
     * @var array<int>
     */
    public array $amount;

    /**
     * @var array<int>
     */
    public array $skills;

    public int $priority;
}
