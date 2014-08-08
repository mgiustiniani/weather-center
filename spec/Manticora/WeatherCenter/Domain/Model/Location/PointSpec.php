<?php

namespace spec\Manticora\WeatherCenter\Domain\Model\Location;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class PointSpec
 * @package spec\Manticora\WeatherCenter\Domain\Model\Location
 * @mixin \Manticora\WeatherCenter\Domain\Model\Location\Point
 */
class PointSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\WeatherCenter\Domain\Model\Location\Point');
    }
}

