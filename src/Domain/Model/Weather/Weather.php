<?php

namespace Manticora\WeatherCenter\Domain\Model\Weather;

/**
 * Class Weather
 * @package Manticora\WeatherCenter\Domain\Model\Weather
 */
class Weather
{
    /**
     * @var string
     */
    private $condition;

    /**
     * @var string
     */
    private $conditionIcon;

    /**
     * @var int
     */
    private $temperature;

    /**
     * @var int
     */
    private $humidity;

    /**
     * @var int
     */
    private $probabilityOfPrecipitation;

    /**
     * @param $condition string
     */
    public function __construct($condition, $conditionIcon, $temperature, $humidity, $probabilityOfPrecipitation)
    {
        $this->condition = $condition;
        $this->conditionIcon = $conditionIcon;
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->probabilityOfPrecipitation = $probabilityOfPrecipitation;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @return int
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @return int
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @return int
     */
    public function getProbabilityOfPrecipitation()
    {
        return $this->probabilityOfPrecipitation;
    }
}
