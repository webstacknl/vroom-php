<?php

declare(strict_types=1);

namespace Webstack\Vroom\Util;

final class DateTimeUtil
{
    public static function fromUTC(\DateTimeImmutable $dateTime): \DateTimeImmutable
    {
        $dateTime = clone $dateTime;
        $dateTime = $dateTime->setTimezone(new \DateTimeZone('UTC'));

        $localDateTime = new \DateTimeImmutable();
        $localDateTime = $localDateTime->setDate((int) $dateTime->format('Y'), (int) $dateTime->format('m'), (int) $dateTime->format('d'));
        $localDateTime = $localDateTime->seTTime((int) $dateTime->format('H'), (int) $dateTime->format('i'), (int) $dateTime->format('s'));

        return $localDateTime;
    }

    public static function toUTC(\DateTimeImmutable $dateTime): \DateTimeImmutable
    {
        $localDateTime = new \DateTimeImmutable();
        $localDateTime = $localDateTime->setTimezone(new \DateTimeZone('UTC'));
        $localDateTime = $localDateTime->setDate((int) $dateTime->format('Y'), (int) $dateTime->format('m'), (int) $dateTime->format('d'));
        $localDateTime = $localDateTime->seTTime((int) $dateTime->format('H'), (int) $dateTime->format('i'), (int) $dateTime->format('s'));

        return $localDateTime;
    }
}
