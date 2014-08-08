<?php

namespace Manticora\WeatherCenter\Domain\Model\DateTime;

class  DateTime implements DateTimeInterface
{

    /**
     * @var \DateTime
     */
    private $dateTime;

    /**
     * @param \DateTime $dateTime
     */
    public function __construct(\DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->getIntegerOf('Y');
    }

    /**
     * @return int
     */
    public function getMonth()
    {
        return $this->getIntegerOf('m');
    }

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->getIntegerOf('d');
    }

    /**
     * @return int
     */
    public function getHour()
    {
        return ($this->getIntegerOf('H')+1)%24;
    }

    /**
     * @param $format
     * @return int
     */
    private function getIntegerOf($format) {

        return (int) $this->dateTime->format($format);
    }
}
