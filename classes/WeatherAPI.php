<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 30/03/17
 * Time: 11:02
 */

namespace classes;



class WeatherAPI
{
    private static $site = 'http://api.openweathermap.org/data/2.5/weather?q=';
    private static $apiKey = '&APPID=16e816267f0e8311f4fb38291193b1d';
    private static $currentUrl = '';
    private $_city;
    private static $units = 'd&units=metric';

public function __construct($city)
{
    self::$currentUrl = self::$site;
    $this->_city=$city;
    self::$currentUrl.=$this->_city.self::$apiKey.self::$units;
    }

    public function getWeather(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_URL => self::$currentUrl,
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ));
    $data = curl_exec($curl);
    curl_close($curl);
return $data;
    }
}
