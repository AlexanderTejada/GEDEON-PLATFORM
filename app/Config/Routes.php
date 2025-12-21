<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');

// Rutas de Noticias
$routes->get('/noticias', 'Noticias::index');
$routes->get('/noticias/(:any)', 'Noticias::detalle/$1');
