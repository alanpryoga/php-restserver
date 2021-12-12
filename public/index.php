<?php
declare(strict_types=1);

use Bramus\Router\Router;
use Dotenv\Dotenv;

/**
 * PHP REST Server
 *
 * A native PHP OOP script for building RESTful API application
 *
 * Copyright (c) 2021, Ade Syahlan Prayoga
 *
 * @author  Ade Syahlan Prayoga
 * @license https://opensource.org/licenses/MIT
 */
require __DIR__ . '/../vendor/autoload.php';

// Load dotenv file
$rootPath = __DIR__ . '/..';
$dotenv   = Dotenv::createImmutable($rootPath);
$dotenv->load();

// Create router instance
$router = new Router();

// Set controller namespace
$controllerNamespace = '\App\Controllers';
$router->setNamespace($controllerNamespace);

// Load all routes definition
require __DIR__ . '/../config/routes.php';

// Run router
$router->run();
