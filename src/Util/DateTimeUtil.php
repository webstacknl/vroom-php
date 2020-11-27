<?php

namespace Webstack\Vroom\Util;

use DateTime;
use DateTimeZone;

/**
 * Class DateTimeUtil
 */
class DateTimeUtil
{
    /**
     * @param DateTime $dateTime
     * @return DateTime
     */
    public static function fromUTC(DateTime $dateTime): DateTime
    {
        $dateTime = clone $dateTime;
        $dateTime->setTimezone(new DateTimeZone('UTC'));

        $localDateTime = new DateTime();
        $localDateTime->setDate($dateTime->format('Y'), $dateTime->format('m'), $dateTime->format('d'));
        $localDateTime->seTTime($dateTime->format('H'), $dateTime->format('i'), $dateTime->format('s'));

        return $localDateTime;
    }
    /**
     * @param DateTime $dateTime
     * @return DateTime
     */
    public static function toUTC(DateTime $dateTime): DateTime
    {
        $localDateTime = new DateTime();
        $localDateTime->setTimezone(new DateTimeZone('UTC'));
        $localDateTime->setDate($dateTime->format('Y'), $dateTime->format('m'), $dateTime->format('d'));
        $localDateTime->seTTime($dateTime->format('H'), $dateTime->format('i'), $dateTime->format('s'));

        return $localDateTime;
    }
}