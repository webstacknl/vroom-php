<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class AbsoluteTimeWindow implements TimeWindowInterface
{
    public function __construct(public \DateTimeImmutable $start, public \DateTimeImmutable $end)
    {
    }
}
