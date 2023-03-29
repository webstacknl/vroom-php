<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class Options
{
    /**
     * Add detailed route geometry and distance.
     */
    public bool $g;

    /**
     * Choose ETA for custom routes and report violations.
     */
    public bool $c;

    /**
     * Number of available threads.
     */
    public int $t;

    /**
     * Exploration level to use (0..5).
     */
    public int $x;

    /**
     * Stop solving process after 'limit' seconds.
     */
    public int $l;
}
