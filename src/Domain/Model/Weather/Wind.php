<?php

namespace Manticora\WeatherCenter\Domain\Model\Weather;
/**
 * Class Wind
 * @package Manticora\WeatherCenter\Domain\Model\Weather
 */
class Wind
{
    /**
     * @var int
     */
    private $speed;

    /** @var  int */
    private $degrees;

    public function __construct($speed, $degrees)
    {
        $this->speed = $speed;
        $this->degrees = $degrees;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getDegrees()
    {
        return $this->degrees;
    }
}
