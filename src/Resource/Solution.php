<?php

namespace Webstack\Vroom\Resource;

class Solution
{
    /**
     * @var int
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $error;

    /**
     * @var Summary
     */
    protected $summary;

    /**
     * @var array<Unassigned>
     */
    protected $unassigned;

    /**
     * @var array<Route>
     */
    protected $routes;

    public function getCode(): int
    {
        return $this->code;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function getSummary(): Summary
    {
        return $this->summary;
    }

    /**
     * @return array<Unassigned>
     */
    public function getUnassigned(): array
    {
        return $this->unassigned;
    }

    /**
     * @return array<Route>
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
}
