<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


$routes->get('/', 'Auth::index');
$routes->get('/dashboard', 'Home::index',['filter' => 'auth']);
$routes->get('/bnpencemaran', 'Home::bnpencemaran',['filter' => 'auth']);
$routes->get('/statusair', 'Home::statusair',['filter' => 'auth']);
$routes->get('/indexair', 'Home::indexair',['filter' => 'auth']);
$routes->get('/login', 'Home::auth',['filter' => 'auth']);
$routes->get('/BODEksisting', 'Home::BODEksisting',['filter' => 'auth']);
$routes->get('/BODPotensial', 'Home::BODPotensial',['filter' => 'auth']);
$routes->get('/BODEksisting', 'BODEksisting::index',['filter' => 'auth']);
$routes->get('/BODEksisting/create', 'BODEksisting::create',['filter' => 'auth']);
$routes->get('/TSSAktual/indexTSS', 'TSSAktual::indexTSS',['filter' => 'auth']);
$routes->get('/TSSAktual/createTSS', 'TSSAktual::createTSS',['filter' => 'auth']);
$routes->get('/indexTSS', 'TSScrud::indexTSS',['filter' => 'auth']);

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
