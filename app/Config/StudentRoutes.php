<?php
$routes->group('students', static function ($routes) {
    $routes->get('/', 'Students::index');
    $routes->post('create', 'Students::create');
    $routes->get('view/(:num)', 'Students::view/$1');
    $routes->get('delete/(:num)', 'Students::delete/$1');
});