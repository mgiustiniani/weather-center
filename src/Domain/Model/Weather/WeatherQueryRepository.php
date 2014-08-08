<?php
/**
 * Created by PhpStorm.
 * User: mgiustiniani
 * Date: 05/08/14
 * Time: 14.43
 */

namespace Manticora\WeatherCenter\Domain\Model\Weather;
use Manticora\WeatherCenter\Domain\Model\DateTime\DateTimeInterface;

/**
 * Interface WeatherQueryRepository
 * @package Manticora\WeatherCenter\Domain\Model\Weather
 */
interface WeatherQueryRepository {

    /**
     * @param $latitude
     * @param $longitude
     * @return \Manticora\WeatherCenter\Domain\Model\Weather\Weather
     */
    public function findByLocationAndDateTime($latitude, $longitude, DateTimeInterface $dateTime);

} 