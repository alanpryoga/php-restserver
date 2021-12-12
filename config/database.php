<?php
declare(strict_types=1);

/**
 * Database configuration
 *
 * @return array
 */
return [
    'host'      => $_ENV['DB_HOST'],
    'username'  => $_ENV['DB_USERNAME'],
    'password'  => $_ENV['DB_PASSWORD'],
    'dbname'    => $_ENV['DB_NAME'],
    'port'      => $_ENV['DB_PORT']
];
