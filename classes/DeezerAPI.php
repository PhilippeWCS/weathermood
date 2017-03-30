<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 30/03/17
 * Time: 10:50
 */

namespace classes;


class DeezerAPI
{

    private static $apiUrl = "http://api.deezer.com/";
    private static $currentURL = "";

    public function __construct(){
        self::$currentURL = self::$apiUrl;
    }

    public function search($search){

        if (isset($search)){
            $search = str_replace(" ", "+", $search);
            self::$currentURL .=  "search/track?q=" . $search;

            return $this->getData();
        }
        else{
            return false;
        }

    }

    private function getData(){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => self::$currentURL,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));

        $data = curl_exec($curl);
        curl_close($curl);

        return $data;

    }




}