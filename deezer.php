<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 30/03/17
 * Time: 11:26
 */

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once "classes/DeezerAPI.php";

    $apiDeezer = new \classes\DeezerAPI();
    $data = json_decode($apiDeezer->search("sun"));

    $playlist = $data->data[0]->id;