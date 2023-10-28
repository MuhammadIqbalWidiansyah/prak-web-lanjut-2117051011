<?php

use App\Controllers\UserController;
use App\Controllers\ClassController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->get('/class/create', [ClassController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->post('/class/store', [ClassController::class, 'store']);
$routes->get('/user', [UserController::class, 'index']);
$routes->get('/class', [ClassController::class, 'index']);
$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->get('/class/(:any)/edit', [ClassController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);
$routes->put('/class/(:any)', [ClassController::class, 'update']);
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);
$routes->delete('/class/(:any)', [ClassController::class, 'destroy']);
$routes->get('/user/(:any)', [UserController::class, 'show']);
$routes->get('/class/(:any)', [ClassController::class, 'show']);