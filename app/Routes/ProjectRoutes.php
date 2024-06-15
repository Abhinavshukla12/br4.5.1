<?php

namespace Config;

$routes = Services::routes();

//routes start
$routes->group('project/', ['namespace' => 'App\Controllers\ProjectControllers'], static function ($routes) {
    
    $routes->get('register', 'Auth::register');
    $routes->post('auth/store', 'Auth::store');
    $routes->get('login', 'Auth::login');
    $routes->post('auth/authenticate', 'Auth::authenticate');
    $routes->get('logout', 'Auth::logout');
    $routes->get('dashboard', 'Dashboard::index', ['filter' => 'authGuard']);
    $routes->get('profile', 'Dashboard::profile', ['filter' => 'authGuard']);
    $routes->get('editProfile', 'Dashboard::editProfile', ['filter' => 'authGuard']);
    $routes->post('updateProfile', 'Dashboard::updateProfile', ['filter' => 'authGuard']);
    $routes->get('logout', 'Dashboard::logout');

    $routes->get('reservation', 'Reservation::index', ['filter' => 'authGuard']);
    $routes->get('reservation/create', 'Reservation::create', ['filter' => 'authGuard']);
    $routes->post('reservation/store', 'Reservation::store', ['filter' => 'authGuard']);
    $routes->get('reservation/edit/(:num)', 'Reservation::edit/$1', ['filter' => 'authGuard']);
    $routes->post('reservation/update/(:num)', 'Reservation::update/$1', ['filter' => 'authGuard']);
    $routes->get('reservation/delete/(:num)', 'Reservation::delete/$1', ['filter' => 'authGuard']);
    $routes->get('reservation/view/(:num)', 'Reservation::view/$1', ['filter' => 'authGuard']);
});
//routes end