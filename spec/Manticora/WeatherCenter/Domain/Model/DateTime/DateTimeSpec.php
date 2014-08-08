<?php

namespace spec\Manticora\WeatherCenter\Domain\Model\DateTime;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class DateTimeSpec
 * @package spec\Manticora\WeatherCenter\Domain\Model\DateTime
 * @mixin \Manticora\WeatherCenter\Domain\Model\DateTime\DateTime
 */
class DateTimeSpec extends ObjectBehavior
{

    public function let()
    {
        $this->beConstructedWith(new \DateTime );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\WeatherCenter\Domain\Model\DateTime\DateTime');
    }

    function it_get_year_return_integer()
    {
        $this->getYear()->shouldBeInteger();
    }

    function it_get_month_return_integer()
    {
        $this->getMonth()->shouldBeInteger();
    }

    function it_get_day_return_integer()
    {
        $this->getDay()->shouldBeInteger();
    }


    function it_get_hour_return_integer()
    {
        $this->getHour()->shouldBeInteger();
    }
}

