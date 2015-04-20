<?php

namespace Nfq\WeatherBundle\WeatherProvider;

use Nfq\WeatherBundle\WeatherInterface;
use Nfq\WeatherBundle\GeoLocation;

class ForecastIO implements WeatherInterface
{
    public function getWeather(GeoLocation $location)
    {
        $site_url = "https://api.forecast.io/forecast/";
        $apkey = '9b00a220d4c5f2781db2d30f31b0ea4c';
        $lat = $location->latitude;
        $lon = $location->longitude;
        $api_url = "${site_url}$apkey/${lat},${lon}?units=si";
        //echo '$api_url = ', $api_url;
        $data_str = file_get_contents($api_url);
        $data = json_decode($data_str, true);
        return $data["currently"];
    }
    
    function toCelsius($temp){
        return ($temp - 32) / 1.800;
    }

} 