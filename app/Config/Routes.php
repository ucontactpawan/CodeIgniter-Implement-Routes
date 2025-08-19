<?php

namespace Config;

$routes = Services::routes();

$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
require('StudentRoutes.php');
