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

// CRUD LAPORAN PENJUALAN
$routes->get('laporan_penjualan', 'AdminLaporanPenjualanController::index');
$routes->get('laporan_penjualan', 'Cetak::index');

// CRUD LAPORAN DATA MASUK
$routes->get('laporan_data_masuk', 'AdminLaporanDataMasukController::index');
$routes->get('laporan_data_masuk', 'Cetak::index');

// CRUD DATA MASUK
$routes->get('data_masuk', 'AdminDataMasukController::index');
$routes->get('data_masuk/create', 'AdminDataMasukController::create');
$routes->post('data_masuk/store', 'AdminDataMasukController::store', ['as' => 'data_masuk/store']);
$routes->get('data_masuk/edit/(:num)', 'AdminDataMasukController::edit/$1', ['as' => 'data_masuk/edit']);
$routes->post('data_masuk/update/(:num)', 'AdminDataMasukController::update/$1', ['as' => 'data_masuk/update']);
$routes->get('data_masuk/delete/(:num)', 'AdminDataMasukController::destroy/$1', ['as' => 'data_masuk/delete']);

// CRUD DATA OBAT
$routes->get('data_obat', 'AdminDataObatController::index');
$routes->get('data_obat/create', 'AdminDataObatController::create');
$routes->post('data_obat/store', 'AdminDataObatController::store', ['as' => 'data_obat/store']);
$routes->get('data_obat/show/(:num)', 'AdminDataObatController::show/$1', ['as' => 'data_obat/show']);
$routes->get('data_obat/edit/(:num)', 'AdminDataObatController::edit/$1', ['as' => 'data_obat/edit']);
$routes->post('data_obat/update/(:num)', 'AdminDataObatController::update/$1', ['as' => 'data_obat/update']);
$routes->get('data_obat/delete/(:num)', 'AdminDataObatController::destroy/$1', ['as' => 'data_obat/delete']);

// CRUD USER
$routes->get('user', 'AdminUserController::index');
$routes->get('user/create', 'AdminUserController::create');
$routes->post('user/store', 'AdminUserController::store', ['as' => 'user/store']);
$routes->get('user/show/(:num)', 'AdminUserController::show/$1', ['as' => 'user/show']);
$routes->get('user/edit/(:num)', 'AdminUserController::edit/$1', ['as' => 'user/edit']);
$routes->post('user/update/(:num)', 'AdminUserController::update/$1', ['as' => 'user/update']);
$routes->delete('user/delete/(:num)', 'AdminUserController::destroy/$1', ['as' => 'user/delete']);

// CRUD KASIR
$routes->get('kasir', 'AdminKasirController::index');
$routes->post('kasir/store', 'AdminKasirController::store', ['as' => 'kasir/store']);

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
