<?php
$routes->group('students', static function ($routes) {
    // These routes are open to everyone
    $routes->get('/', 'Students::index');
    $routes->post('create', 'Students::create');
    $routes->get('view/(:num)', 'Students::view/$1');

    // This route is now protected by our permission filter.
    $routes->get('delete/(:num)', 'Students::delete/$1', ['filter' => 'permission']);
});
