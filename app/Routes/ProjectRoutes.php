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
    $routes->get('logout', 'Dashboard::logout');


});
//routes end