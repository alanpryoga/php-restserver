<?php

namespace PhpRestServer\Utils;

/**
 * HTTP Response Helper
 */
class HTTPResponse
{
    /**
     * Return response to JSON
     *
     * @param array $data
     *
     * @return string JSON
     */
    public function toJson($data)
    {
        header('HTTP/1.1 404 Not Found');
        header('Content-Type: application/json');

        echo json_encode($data);
    }
}
