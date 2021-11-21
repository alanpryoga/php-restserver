<?php

namespace PhpRestServer\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $response = [
            'status' => 200,
            'message' => 'Hello world!'
        ];

        $this->httpResponse->toJson($response);
    }
}
