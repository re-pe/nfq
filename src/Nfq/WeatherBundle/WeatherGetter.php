<?php

namespace Nfq\WeatherBundle;

use Symfony\Component\Config\Definition\Exception\Exception;

class WeatherGetter
{
    public function __construct(WeatherInterface $provider)
    {
        $this->provider = $provider;
    }

    public function getWeather(GeoLocation $location)
    {
        return $this->provider->getWeather($location);
    }

} 