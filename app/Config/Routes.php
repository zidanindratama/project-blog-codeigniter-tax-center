<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// ROUTES CATEGORY
$routes->get('/category', 'CategoryController::index');
$routes->get('/category/create', 'CategoryController::create');
