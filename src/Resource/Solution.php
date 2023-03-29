<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

final class Solution
{
    public int $code;

    public Summary $summary;

    /**
     * @var array<Unassigned>
     */
    public array $unassigned;

    /**
     * @var array<Route>
     */
    public array $routes;
}
