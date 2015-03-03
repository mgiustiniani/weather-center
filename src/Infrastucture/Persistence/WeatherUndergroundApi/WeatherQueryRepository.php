<?php

namespace Manticora\WeatherCenter\Infrastucture\Persistence\WeatherUndergroundApi;
use Buzz\Browser;
use Manticora\WeatherCenter\Domain\Model\DateTime\DateTime;
use Manticora\WeatherCenter\Domain\Model\DateTime\DateTimeInterface;
use Manticora\WeatherCenter\Domain\Model\Weather\Weather;
use Manticora\WeatherCenter\Domain\Model\Weather\WeatherQueryRepository as BaseWeatherQueryRepository;
use Peekmo\JsonPath\JsonStore;

/**
 * Class WeatherQueryRepository
 *
 * is a repository from Weather Underground API
 *
 * @package Manticora\WeatherCenter\Infrastucture\Persistence\WeatherUndergroundApi
 */
class WeatherQueryRepository implements BaseWeatherQueryRepository
{

    /**
     * key of service
     * @var string
     */
    private $key;

    /**
     * language of responses
     * @var string
     */
    private $language;
    /**
     * @var \Buzz\Browser
     */
    private $client;

    public function __construct($key, $language)
    {
        $this->key = $key;
        $this->language = $language;
        $this->client = new Browser();
    }

    /**
     * @param $latitude
     * @param $longitude
     * @return \Manticora\WeatherCenter\Domain\Model\Weather\Weather
     */
    public function findByLocationAndDateTime($latitude, $longitude, DateTimeInterface $dateTime)
    {

        $response = $this->client->get('http://api.wunderground.com/api/'
            .$this->key.'/lang:'
            .$this->language.'/hourly10day/q/'
            .$latitude.','
            .$longitude.'.json');

        $o = json_decode($response->getContent(), true);

        $store = new JsonStore($o);

        $pattern=  "$..hourly_forecast[?(@.FCTTIME.hour == {$dateTime->getHour() }
                    &&  @.FCTTIME.mday == {$dateTime->getDay() }
                    &&  @.FCTTIME.mon == {$dateTime->getMonth() }   )]";



        $res = $store->get(str_replace(array("\n", "\r"), '', $pattern) );
        ;

        if (!isset($res[0])) {

            return null;
        }
        $weat = $res[0];
        $weather = new Weather(
            $weat['condition'],
            $weat['icon'],
            $weat['temp']['metric'],
            $weat['humidity'],
            $weat['pop'],
            $weat['wspd']['metric'],
            $weat['wdir']['degrees']);

        return $weather;

    }
}
