<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

//*====================routes input ibk====================*/
$routes->get('/', 'Pages::index');
$routes->get('/ibk', 'SearchIbk::index');
$routes->get('/ibk/detail/(:segment)', 'SearchIbk::detailIbk/$1');
$routes->get('/inputIbk', 'InputIbk::index');
$routes->get('/generate', 'GenerateSurat::printSuratDjp');
$routes->get('/auditLog', 'AuditLog::index');
$routes->get('/kantorPajak', 'ParKantorPajak::index');

//*====================routes input kantor cabang====================*/
// $routes->get('/', 'Home::index');
$routes->get('pages', 'Pages::index');
$routes->get('login', 'Auth::index');
$routes->get('block-list', 'BlockController::blockList');
$routes->get('block-input/(:alphanum)', 'BlockController::blockInput/$1'); //$1 parameter yang masuk ke block input
$routes->get('unblock-list', 'BlockController::unblockList');
$routes->get('unblock-input/(:alphanum)', 'BlockController::unblockInput/$1');
$routes->post('block-upload', 'BlockController::uploadBlockedDocuments');
$routes->post('unblock-upload', 'BlockController::uploadUnblockedDocuments');

$routes->get('block-approve-list', 'ApproveController::blockApproveList');
$routes->match(['get', 'post'], 'block-approve-input/(:alphanum)', 'ApproveController::blockApproveinput/$1');
$routes->get('unblock-approve-list', 'ApproveController::unblockApproveList');
$routes->match(['get', 'post'], 'unblock-approve-input/(:alphanum)', 'ApproveController::unblockApproveinput/$1');

$routes->get('unblock-history', 'HistoryController::unblockHistory');

$routes->match(['post'], 'form-controller', 'FormController::index');

//*====================routes input blokir====================*/
$routes->get('/generate', 'NewBlokir::printSuratDjp');
$routes->get('/baru', 'NewBlokir::halo');

$routes->get('/blokir', 'NewBlokir::index');
$routes->get('/inputBlokir', 'NewBlokir::menutama');

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
