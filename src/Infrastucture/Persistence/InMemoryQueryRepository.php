<?php

namespace Manticora\WeatherCenter\Infrastucture\Persistence;

use Manticora\WeatherCenter\Domain\Model\Weather\Weather;
use Manticora\WeatherCenter\Domain\Model\Weather\WeatherQueryRepository;

class InMemoryQueryRepository implements WeatherQueryRepository
{
    public function findByLocation($latitude, $longitude)
    {
        return new Weather('Clear');
    }
}
