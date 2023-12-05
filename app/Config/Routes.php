<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->get('/index_IPM', 'Home::index_IPM');
$routes->get('/index_IKK', 'Home::index_IKK');
$routes->get('/index_PDRB', 'Home::index_PDRB');
$routes->get('/table', 'Home::table');
$routes->get('/table_kepadatan', 'Home::table_kepadatan');
$routes->get('/table_IPM', 'Home::table_IPM');
$routes->get('/table_IKK', 'Home::table_IKK');
$routes->get('/table_LajuPertumbuhan', 'Home::table_LajuPertumbuhan');
