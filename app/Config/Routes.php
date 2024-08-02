<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Condominio', 'Home::home');


/* Rutas para crear la reidencia */

$routes->get('/Residencia','Residence::index');