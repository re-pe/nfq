<?php

namespace Nfq\WeatherBundle\WeatherProvider;

use Nfq\WeatherBundle\WeatherInterface;
use Nfq\WeatherBundle\GeoLocation;

class OpenWeatherMap implements WeatherInterface
{
    public function getWeather(GeoLocation $location)
    {
        $site_url = "http://api.openweathermap.org/data/2.5/weather?";
        $appid = '05bc87edbdccb53a9f2c74cfefafd81d';
        $lat = $location->latitude;
        $lon = $location->longitude;
        $api_url = "${site_url}lat=${lat}&lon=${lon}&APPID=${appid}&units=metric";
        //echo '$api_url = ', $api_url;
        $data_str = file_get_contents($api_url);
        $data = json_decode($data_str, true);
        return $data;
    }

} 