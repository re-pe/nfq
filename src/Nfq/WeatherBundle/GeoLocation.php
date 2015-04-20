<?php

namespace Nfq\WeatherBundle;

class GeoLocation
{
    public $latitude;
    public $longitude;
    
    function __construct()
    {
        $data = $this->getCoordinates();
    }
    
    function getCoordinates()
    {
        $service_domain = "http://ip-api.com";
        $format = "json";
        $geoloc_url = "$service_domain/$format";
        $data = file_get_contents($geoloc_url);
        $json = json_decode($data, true);
        if ($this->checkCoordinates($json['lat'], $json['lon'])) {
            $this->latitude = $json['lat'];
            $this->longitude = $json['lon'];
        }
    }
    
    function checkCoordinates($lat, $lon)
    {
        if ( $lat > 0  &&
             $lat < 90 &&
             $lon > -180 &&
             $lon < 180) {
            return true;
        } else {
            throw new Exception("lat: ".$lat."; 'lon: ".$lon);
        }
    }
} 