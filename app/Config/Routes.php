<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [\App\Controllers\Home::class, 'index']);
$routes->get('pages', [\App\Controllers\Pages::class, 'index']);
$routes->get('(:segment)', [\App\Controllers\Pages::class, 'view']);