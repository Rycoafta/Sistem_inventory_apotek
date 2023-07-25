<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'AdminDashboardController::index');

$routes->get('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

$routes->post('/auth/login', 'Auth::doLogin');

// CRUD FPP
$routes->get('fpp', 'AdminFPPController::index');
$routes->get('fpp/create', 'AdminFPPController::create');
$routes->post('fpp/store', 'AdminFPPController::store', ['as' => 'fpp/store']);
$routes->get('fpp/show/(:segment)', 'AdminFPPController::show/$1', ['as' => 'fpp/show']);
$routes->get('fpp/edit/(:segment)', 'AdminFPPController::edit/$1', ['as' => 'fpp/edit']);
$routes->post('fpp/update/(:segment)', 'AdminFPPController::update/$1', ['as' => 'fpp/update']);
$routes->delete('fpp/delete/(:segment)', 'AdminFPPController::destroy/$1', ['as' => 'fpp/delete']);

// CRUD FPB
$routes->get('fpb', 'AdminFPBController::index');
$routes->get('fpb/create', 'AdminFPBController::create');
$routes->post('fpb/store', 'AdminFPBController::store', ['as' => 'fpb/store']);
$routes->get('fpb/show/(:num)', 'AdminFPBController::show/$1', ['as' => 'fpb/show']);
$routes->get('fpb/edit/(:num)', 'AdminFPBController::edit/$1', ['as' => 'fpb/edit']);
$routes->post('fpb/update/(:num)', 'AdminFPBController::update/$1', ['as' => 'fpb/update']);
$routes->delete('fpb/delete/(:num)', 'AdminFPBController::destroy/$1', ['as' => 'fpb/delete']);

// CRUD ALAT
$routes->get('alat', 'AdminAlatController::index');
$routes->get('alat/create', 'AdminAlatController::create');
$routes->post('alat/store', 'AdminAlatController::store', ['as' => 'alat/store']);
$routes->get('alat/show/(:num)', 'AdminAlatController::show/$1', ['as' => 'alat/show']);
$routes->get('alat/edit/(:num)', 'AdminAlatController::edit/$1', ['as' => 'alat/edit']);
$routes->post('alat/update/(:num)', 'AdminAlatController::update/$1', ['as' => 'alat/update']);
$routes->delete('alat/delete/(:num)', 'AdminAlatController::destroy/$1', ['as' => 'alat/delete']);

//CRUD HISTORY
$routes->get('history', 'AdminHistoryController::index');
$routes->get('history/show/(:num)', 'AdminHistoryController::show/$1', ['as' => 'history/show']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
