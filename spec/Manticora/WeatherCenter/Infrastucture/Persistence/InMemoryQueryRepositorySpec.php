<?php

namespace spec\Manticora\WeatherCenter\Infrastucture\Persistence;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class InMemoryQueryRepositorySpec
 * @package spec\Manticora\WeatherCenter\Infrastucture\Persistence
 * @mixin \Manticora\WeatherCenter\Infrastucture\Persistence\InMemoryQueryRepository
 */
class InMemoryQueryRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\WeatherCenter\Infrastucture\Persistence\InMemoryQueryRepository');
    }

    function it_implement_weather_query_repository_contract()
    {
        $this->shouldImplement('Manticora\WeatherCenter\Domain\Model\Weather\WeatherQueryRepository');
    }
    function it_return_a_weather_by_coords()
    {
        $this->findByLocation(3.332, 49.44003)->shouldHaveType('Manticora\WeatherCenter\Domain\Model\Weather\Weather');
        $this->findByLocation(3.332, 49.44003)->getCondition()->shouldBeEqualTo("Clear");
    }

}

