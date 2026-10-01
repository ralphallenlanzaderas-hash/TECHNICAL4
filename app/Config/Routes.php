<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public Routes
$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::processLogin');
$routes->get('/logout', 'Auth::logout');

// Protected Routes (Requires Authentication Filter)
$routes->group('', ['filter' => 'auth'], static function ($routes) {
    // Customer Accounts Management
    $routes->get('/customers', 'CustomerController::index');
    $routes->get('/customers/new', 'CustomerController::create');
    $routes->post('/customers/store', 'CustomerController::store');
    $routes->get('/customers/edit/(:num)', 'CustomerController::edit/$1');
    $routes->post('/customers/update/(:num)', 'CustomerController::update/$1');
    $routes->get('/customers/delete/(:num)', 'CustomerController::delete/$1');

    // User Accounts Management
    $routes->get('/users', 'UserController::index');
    $routes->get('/users/new', 'UserController::create');
    $routes->post('/users/store', 'UserController::store');
    $routes->get('/users/edit/(:num)', 'UserController::edit/$1');
    $routes->post('/users/update/(:num)', 'UserController::update/$1');
    $routes->get('/users/delete/(:num)', 'UserController::delete/$1');
});