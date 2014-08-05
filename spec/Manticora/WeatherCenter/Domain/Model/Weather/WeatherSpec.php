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
        $this->beConstructedWith('Clear', 38, 60, 20 );
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
        $this->getTemperature()->shouldBeAInteger();
    }

    function it_get_humidity_method_should_return_integer()
    {
        $this->getHumidity()->shouldBeAInteger();
    }

    function it_get_probability_of_precipitation_return_integer()
    {
        $this->getProbabilityOfPrecipitation()->shouldBeAInteger();
    }
}

