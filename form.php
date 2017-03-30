<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 30/03/17
 * Time: 14:34
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "classes/WeatherAPI.php";
require_once "classes/DeezerAPI.php";

if (isset($_POST["searchcity"])) {
    index($_POST["searchcity"]);
}

function index($city) {
    $dataWeather = searchWeather($city);
    $playList = getPlaylist ($dataWeather['weather'][0]['description']);
}

function searchWeather($city) {
    $url = new \classes\WeatherAPI($city);
    $data = json_decode($url->getWeather(), true);

    return $data;


    //$description = $data['weather'][0]['description'] . '<br>';
    //$tempmain = $data['main']['temp'] . ' ℃';

}

