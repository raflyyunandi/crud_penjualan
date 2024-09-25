<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Routing untuk Barang
$routes->get('/barang', 'Barang::index');
$routes->get('/barang/create', 'Barang::create');
$routes->post('/barang/store', 'Barang::store');
$routes->get('/barang/edit/(:num)', 'Barang::edit/$1');
$routes->post('/barang/update/(:num)', 'Barang::update/$1');
$routes->get('/barang/delete/(:num)', 'Barang::delete/$1');

// Routing untuk Transaksi
$routes->get('transaksi', 'Transaksi::index');
$routes->get('transaksi/create', 'Transaksi::create');
$routes->post('transaksi/store', 'Transaksi::store');
$routes->get('transaksi/edit/(:segment)', 'Transaksi::edit/$1');
$routes->post('transaksi/update/(:segment)', 'Transaksi::update/$1');
$routes->get('transaksi/delete/(:segment)', 'Transaksi::delete/$1');

// API Routes
$routes->resource('api/barang', ['controller' => 'ApiBarang']);
$routes->group('api', function($routes) {
    $routes->resource('transaksi', ['controller' => 'ApiTransaksi']);
});
