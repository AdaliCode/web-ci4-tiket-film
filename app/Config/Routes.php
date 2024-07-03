<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/blog', 'Home::blog');
$routes->get('/movie/create', 'Movie::create');
$routes->get('/movie/save', 'Movie::save');
$routes->get('/movie/(:segment)', 'Movie::detail/$1');
$routes->setAutoRoute(true);
