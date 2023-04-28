<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class AbsoluteTimeWindow implements TimeWindowInterface
{
    public \DateTimeImmutable $start;

    public \DateTimeImmutable $end;

    public function __construct(\DateTimeImmutable $start, \DateTimeImmutable $end)
    {
        $this->start = $start;
        $this->end = $end;
    }
}
