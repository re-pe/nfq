<?php

namespace Nfq\WeatherBundle\Controller;

use Nfq\WeatherBundle\GeoLocation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WeatherController extends Controller
{
    public function indexAction()
    {
        $nfq_weather = $this->container->get('nfq.weather');
        $weather = $nfq_weather->getWeather(new GeoLocation());
        $weather_str = print_r($weather, true);
        return new Response('<html><body><pre>' . $weather_str . '</pre></body></html>');
        //return $this->render('Weather/index.html.twig', [ 'weather_str' => $weather_str ]);
    }
} 