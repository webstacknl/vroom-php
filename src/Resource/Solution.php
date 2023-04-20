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

    public function addUnassigned(Unassigned $unassigned): void
    {
        $this->unassigned[] = $unassigned;
    }

    public function addRoute(Route $route): void
    {
        $this->routes[] = $route;
    }
}
