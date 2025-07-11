<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->resource('booking');
$routes->resource('ruangan');
$routes->resource('users');
$routes->resource('login');
$routes->resource('regristrasi');
$routes->resource('member');

$routes->get('/api/booking', 'Booking::index');
$routes->get('/api/ruangan', 'Ruangan::index');
$routes->get('/api/users', 'users::index');
$routes->get('/api/login', 'Login::index');
$routes->get('/api/regristrasi', 'Regristrasi::index');
$routes->get('/api/member', 'Member::index');


$routes->post('/api/booking/create', 'Booking::create');
$routes->post('/api/ruangan/create', 'Ruangan::create');
$routes->post('/api/users/create', 'Users::create');
$routes->post('/api/login/create', 'Login::create');
$routes->post('/api/regristrasi/create', 'Regristrasi::create');
$routes->post('/api/member/create', 'Member::create');

$routes->put('/api/booking/update/(:num)', 'Booking::update/$1');
$routes->put('/api/ruangan/update/(:num)', 'Ruangan::update/$1');
$routes->put('/api/users/update/(:num)', 'Users::update/$1');
$routes->put('/api/login/update/(:num)', 'Login::update/$1');
$routes->put('/api/regristrasi/update/(:num)', 'Regristrasi::update/$1');
$routes->put('/api/member/update/(:num)', 'Member::update/$1');


$routes->delete('/api/booking/delete/(:num)', 'Booking::delete/$1');
$routes->delete('/api/ruangan/delete/(:num)', 'Ruangan::delete/$1');
$routes->delete('/api/users/delete/(:num)', 'Users::delete/$1');
$routes->delete('/api/login/delete/(:num)', 'Login::delete/$1');
$routes->delete('/api/regristrasi/delete/(:num)', 'Regristrasi::delete/$1');
$routes->delete('/api/member/delete/(:num)', 'Member::delete/$1');
