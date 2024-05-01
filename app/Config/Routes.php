<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Main page
$routes->get('/', 'Home::index');
$routes->get('/settings', 'Home::setWeight');
$routes->get('/products/motor-listrik', 'Product::indexMolis');
$routes->get('/products/sepeda-listrik', 'Product::indexSelis');
$routes->get('/products/(:segment)', 'Product::details/$1');

// Login page
$routes->get('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');

// Admin page - Produk
$routes->get('/molis-list', 'Admin_produk::indexMolis');
$routes->get('/selis-list', 'Admin_produk::indexSelis');
$routes->get('/create-produk', 'Admin_produk::create');
$routes->post('/save-produk', 'Admin_produk::save');
$routes->delete('/delete-produk/(:num)', 'Admin_produk::delete/$1');
$routes->get('/edit-produk/(:segment)', 'Admin_produk::edit/$1');

// Admin page - Tabel
$routes->get('/kriteria', 'Admin_tabel::indexKriteria');
$routes->get('/bobot-produk', 'Admin_tabel::indexBobotProduk');
$routes->get('/normalisasi', 'Admin_tabel::indexNormalisasi');
