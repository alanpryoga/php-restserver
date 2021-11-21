<?php

namespace PhpRestServer\Controllers;

/**
 * Base MVC controller
 */
class BaseController
{
    /**
     * HTTP Response
     *
     * @var \PhpRestServer\Utils\HTTPResponse;
     */
    protected $httpResponse;

    /**
     * Create BaseController instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->httpResponse = new \PhpRestServer\Utils\HTTPResponse();
    }
}
