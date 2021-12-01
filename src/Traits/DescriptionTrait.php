<?php

namespace Webstack\Vroom\Traits;

trait DescriptionTrait
{
    protected ?string $description = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}
