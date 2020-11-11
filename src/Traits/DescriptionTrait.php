<?php

namespace Webstack\Vroom\Traits;

/**
 * Trait DescriptionTrait
 */
trait DescriptionTrait
{
    /**
     * @var string|null
     */
    protected $description;

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}