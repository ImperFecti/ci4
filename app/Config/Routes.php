<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//route to codeigniter welcome message
$routes->get('/codeigniter', 'Home::index');
//home route
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/contact', 'Pages::contact');
//comic route
$routes->get('/comic', 'Comic::index');
$routes->get('/comic/(:segment)', 'Comic::detail/$1');
