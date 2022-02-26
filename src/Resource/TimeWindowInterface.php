<?php

declare(strict_types=1);

namespace Webstack\Vroom\Resource;

/**
 * Interface TimeWindowInterface.
 */
interface TimeWindowInterface
{
    public function getStart();

    public function getEnd();
}
