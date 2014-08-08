<?php

namespace Manticora\WeatherCenter\Domain\Model\DateTime;

interface  DateTimeInterface
{
    /**
     * @return int
     */
    public function getYear();

    /**
     * @return int
     */
    public function getMonth();

    /**
     * @return int
     */
    public function getDay();

    /**
     * @return int
     */
    public function getHour();
}
