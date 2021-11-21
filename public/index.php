<?php
// Require composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Create DotEnv instance
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->setNamespace('\PhpRestServer\Controllers');

require __DIR__ . '/../config/routes.php';

// Run Router
$router->run();
