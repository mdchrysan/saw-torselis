<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Main page
$routes->get('/', 'Home::index');
$routes->get('/settings', 'Home::setWeight');
$routes->get('/products', 'Product::index');

// Login page
$routes->get('/login', 'Login::index');
