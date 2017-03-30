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

if (!empty($_POST["searchcity"])) {
    index($_POST["searchcity"]);
}

function index($city) {
    $dataWeather = searchWeather($city);
    $track = getPlaylist ($dataWeather['weather'][0]['description']);

    $condition = $dataWeather['weather'][0]['description'] . '<br>';
    $temperature = $dataWeather['main']['temp'] . ' ℃';
    $icon = $dataWeather['weather'][0]['icon'];
    $ville = $dataWeather['name'];
    include "index.php";
}

function searchWeather($city) {
    $url = new \classes\WeatherAPI($city);
    $data = json_decode($url->getWeather(), true);

    return $data;
}

function getPlaylist($weatherDescript){
    $apiDeezer = new \classes\DeezerAPI();
    $data =  json_decode($apiDeezer->search($weatherDescript), true);
    $pistes = "";

    foreach ($data as $track) {
        foreach ($track as $value){
            $pistes .= $value["id"] .",";
        }
    }

    return $pistes;
}

