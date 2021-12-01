<?php

namespace Webstack\Vroom\Traits;

trait IdTrait
{
    protected ?int $id = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
