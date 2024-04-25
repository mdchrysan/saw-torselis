<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Main page
$routes->get('/', 'Home::index');

// Login page
$routes->get('/login', 'Login::index');
