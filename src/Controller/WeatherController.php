<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use GuzzleHttp\Client;

class WeatherController {
    /**
     * @Route("/api")
     */
    public function numberAction()
    {

//        $client = new Client([
//            'base_uri' => 'http://httpbin.org/',
//        ]);

        return new Response(
            json_encode(
                array(
                    'data' => 123,
                )
            ),
            200, array('Access-Control-Allow-Origin'=> '*')
        );
    }
}