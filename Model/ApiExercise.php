<?php

namespace M2M\ApiAndCurlExercise\Model;

use \Magento\Framework\HTTP\Client\Curl;

class ApiExercise
{
    /**
     * @var Curl
     */
    protected $curl;

    public function __construct (
        Curl $curl,
    ) {
        $this->curl = $curl;
    }

    public function getApiData()
    {
        $url = "https://api.punkapi.com/v2/beers/random";

        $this->curl->get($url);

        $result = $this->curl->getBody();

        var_dump($result);

        $json_string = json_decode($result, true);

        print(print_r($json_string,true)); die;
    }
}