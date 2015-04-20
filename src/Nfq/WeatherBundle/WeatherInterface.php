<?php

namespace Nfq\WeatherBundle;

interface WeatherInterface
{
    public function getWeather(GeoLocation $location);
} 