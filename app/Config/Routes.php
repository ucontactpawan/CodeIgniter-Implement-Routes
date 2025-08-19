<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/students', 'Students::index');
$routes->post('/students/create', 'Students::create');
$routes->get('/students/delete/(:num)', 'Students::delete/$1');