<?php
/**
 * Database Configuration
 */
return [
    'host'      => getenv('DB_HOST'),
    'username'  => getenv('DB_USERNAME'),
    'password'  => getenv('DB_PASSWORD'),
    'dbname'    => getenv('DB_NAME'),
    'port'      => getenv('DB_PORT')
];
