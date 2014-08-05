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
     * @param $condition string
     */
    public function __construct($condition)
    {
        $this->condition = $condition;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }
}
