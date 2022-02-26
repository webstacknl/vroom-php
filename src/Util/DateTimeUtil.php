<?php

declare(strict_types=1);

namespace Webstack\Vroom\Util;

use DateTime;
use DateTimeZone;

class DateTimeUtil
{
    public static function fromUTC(DateTime $dateTime): DateTime
    {
        $dateTime = clone $dateTime;
        $dateTime->setTimezone(new DateTimeZone('UTC'));

        $localDateTime = new DateTime();
        $localDateTime->setDate((int) $dateTime->format('Y'), (int) $dateTime->format('m'), (int) $dateTime->format('d'));
        $localDateTime->seTTime((int) $dateTime->format('H'), (int) $dateTime->format('i'), (int) $dateTime->format('s'));

        return $localDateTime;
    }

    public static function toUTC(DateTime $dateTime): DateTime
    {
        $localDateTime = new DateTime();
        $localDateTime->setTimezone(new DateTimeZone('UTC'));
        $localDateTime->setDate((int) $dateTime->format('Y'), (int) $dateTime->format('m'), (int) $dateTime->format('d'));
        $localDateTime->seTTime((int) $dateTime->format('H'), (int) $dateTime->format('i'), (int) $dateTime->format('s'));

        return $localDateTime;
    }
}
