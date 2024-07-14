<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/blog', 'Home::blog');
$routes->get('/movie/edit/(:segement)', 'Movie::edit/$1');
$routes->get('/movie/(:segment)', 'Movie::detail/$1');
$routes->setAutoRoute(true);
