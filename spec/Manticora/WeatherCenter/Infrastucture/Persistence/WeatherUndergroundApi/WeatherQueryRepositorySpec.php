<?php

namespace spec\Manticora\WeatherCenter\Infrastucture\Persistence\WeatherUndergroundApi;

use Buzz\Browser;
use Manticora\WeatherCenter\Domain\Model\DateTime\DateTime;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class WeatherQueryRepositorySpec
 * @package spec\Manticora\WeatherCenter\Infrastucture\Persistence\WeatherUndergroundApi
 * @mixin \Manticora\WeatherCenter\Infrastucture\Persistence\WeatherUndergroundApi\WeatherQueryRepository
 */
class WeatherQueryRepositorySpec extends ObjectBehavior
{

    public function let($name)
    {
        $this->beConstructedWith('api_key', 'IT', new Browser() );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\WeatherCenter\Infrastucture\Persistence\WeatherUndergroundApi\WeatherQueryRepository');
    }

    function it_implement_weather_query_repository_contract()
    {
        $this->shouldImplement('Manticora\WeatherCenter\Domain\Model\Weather\WeatherQueryRepository');
    }
/*
    function it_return_a_null_by_coords()
    {
       // $this->findByLocationAndDateTime(3.332, 49.44003, new DateTime(new \DateTime))->shouldBeNull();
    }
    function it_return_a_weather_by_coords()
    {
        // $this->findByLocationAndDateTime(42.332, 12.44003, new DateTime(new \DateTime))->shouldHaveType('Manticora\WeatherCenter\Domain\Model\Weather\Weather');
    }
*/
}

