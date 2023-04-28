<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class AbsoluteTimeWindow implements TimeWindowInterface
{
    public \DateTime $start;

    public \DateTime $end;

    public function __construct(\DateTime $start, \DateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }
}
