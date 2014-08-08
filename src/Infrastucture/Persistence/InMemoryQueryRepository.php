<?php

namespace Manticora\WeatherCenter\Infrastucture\Persistence;

use Manticora\WeatherCenter\Domain\Model\DateTime\DateTimeInterface;
use Manticora\WeatherCenter\Domain\Model\Weather\Weather;
use Manticora\WeatherCenter\Domain\Model\Weather\WeatherQueryRepository;

class InMemoryQueryRepository implements WeatherQueryRepository
{
    public function findByLocationAndDateTime($latitude, $longitude, DateTimeInterface $dateTime)
    {
        return new Weather('Clear','clear', 38, 60, 20, 10, 30);
    }
}
