<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup', 'Home::signup');//depend on http request, get
$routes->get('/login', 'Login::index');//depend on http request, get
$routes->get('/service', 'Home::service');//depend on http request, get
$routes->post('/submit', 'Home::submit');//depend on http request, get
$routes->get('/contactus', 'Home::contactus');


$routes->get('test-db', 'TestController::index');



