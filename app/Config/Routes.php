<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Main page
$routes->get('/', 'Home::index');
$routes->get('/settings', 'Home::setWeight');
$routes->post('/result', 'SAW::getWeight');
$routes->get('/products', 'Product::indexMolis');
$routes->get('/products/motor-listrik', 'Product::indexMolis');
$routes->get('/products/sepeda-listrik', 'Product::indexSelis');
$routes->get('/products/(:segment)', 'Product::details/$1');

// Login page
$routes->get('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');

// Admin page - Produk
$routes->get('/molis-list', 'AdminProduct::indexMolis');
$routes->get('/selis-list', 'AdminProduct::indexSelis');
$routes->get('/create-product', 'AdminProduct::create');
$routes->post('/save-product', 'AdminProduct::save');
$routes->delete('/delete-product/(:num)', 'AdminProduct::delete/$1');
$routes->get('/edit-product/(:segment)', 'AdminProduct::edit/$1');

// Admin page - Tabel SAW
$routes->get('/kriteria', 'SAW::indexKriteria');
$routes->get('/bobot-produk', 'SAW::indexBobotProduk');
$routes->get('/normalisasi', 'SAW::indexNormalisasi');
