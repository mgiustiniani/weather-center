<?php

namespace spec\Manticora\WeatherCenter\Domain\Model\Weather;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class WeatherSpec
 * @package spec\Manticora\WeatherCenter\Domain\Model\Weather
 * @mixin \Manticora\WeatherCenter\Domain\Model\Weather\Weather
 */
class WeatherSpec extends ObjectBehavior
{
    public function let($name)
    {
        $this->beConstructedWith('Clear', 'clear', 38, 60, 20, 10,30 );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\WeatherCenter\Domain\Model\Weather\Weather');
    }

    function it_get_condition_method_should_return_clear()
    {
        $this->getCondition()->shouldReturn('Clear');

    }

    function it_get_temperature_method_shound_return_integer()
    {
        $this->getTemperature()->shouldBeInteger();
    }

    function it_get_humidity_method_should_return_integer()
    {
        $this->getHumidity()->shouldBeInteger();
    }

    function it_get_probability_of_precipitation_return_integer()
    {
        $this->getProbabilityOfPrecipitation()->shouldBeInteger();
    }

    function it_get_wind_return_a_wind_object()
    {
        $this->getWind()->shouldHaveType('Manticora\WeatherCenter\Domain\Model\Weather\Wind');
    }
}

