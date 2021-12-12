<?php
declare(strict_types=1);

/**
 * Routes definition
 *
 * @return void
 */
$router->post('/users', 'UserController@create');
$router->get('/users', 'UserController@list');
$router->get('/users/(\d+)', 'UserController@detail');
$router->put('/users/(\d+)', 'UserController@update');
$router->delete('/users/(\d+)', 'UserController@delete');

