<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class RelativeTimeWindow implements TimeWindowInterface
{
    public int $start;

    public int $end;
}
