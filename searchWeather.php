<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 30/03/17
 * Time: 12:04
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "classes/WeatherAPI.php";

$url = new \classes\WeatherAPI($city);
$data = json_decode($url->getWeather(), true);
var_dump($data);

//description
echo $data['weather'][0]['description'] . '<br>';
//temperature
echo $data['main']['temp'] . ' ℃';
