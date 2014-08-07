<?php

namespace spec\Manticora\WeatherCenter\Domain\Model\Weather;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class WindSpec
 * @package spec\Manticora\WeatherCenter\Domain\Model\Weather
 * @mixin \Manticora\WeatherCenter\Domain\Model\Weather\Wind
 */
class WindSpec extends ObjectBehavior
{

    public function let($name)
    {
        $this->beConstructedWith( 10, 30  );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\WeatherCenter\Domain\Model\Weather\Wind');
    }

    function it_get_speed_method_shound_return_integer()
    {
        $this->getSpeed()->shouldBeInteger();
    }

    function it_get_degree_method_shound_return_integer()
    {
        $this->getDegrees()->shouldBeInteger();
    }
}

