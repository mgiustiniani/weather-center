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
     * @var Wind
     */
    private $wind;

    /**
     * @param $condition string
     */
    public function __construct($condition, $conditionIcon, $temperature, $humidity, $probabilityOfPrecipitation, $wind_speed, $wind_degrees)
    {
        $this->condition = $condition;
        $this->conditionIcon = $conditionIcon;
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->probabilityOfPrecipitation = $probabilityOfPrecipitation;
        $this->wind = new Wind($wind_speed, $wind_degrees);
    }
    /**
     * @return string
     */
    public function getConditionIcon()
    {
        return $this->conditionIcon;
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

    public function getWind()
    {
        return $this->wind;
    }
}
