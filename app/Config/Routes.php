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

// untuk menampilkan halaman depan 

$routes->get('/', 'Home::index');

// untuk menampilkan menu jurusan
$routes->get('/jurusan', 'Home::menuJurusan');

// untuk menampilkan menu fasiltas
$routes->get('/fasilitas', 'Home::menuFasilitas');

// untuk menampilkan menu fasiltas
$routes->get('/daftar', 'Pendaftaran::index');

// untuk menampilkan menu fasiltas
$routes->post('/simpan-pendaftaran', 'Pendaftaran::simpan');


// untuk menampilkan form login
$routes->get('/login', 'Loginpetugas::index');
$routes->post('/login', 'Loginpetugas::index');

######################### HALAMAN ADMIN #####################
// untuk menampilkan halaman dashbord

$routes->get('/dashboard', 'Dashboardpetugas::index');
$routes->get('/tampil-fasilitas', 'Fasilitas::index');

// untuk form fasilitas
$routes->get('/form-fasilitas', 'Fasilitas::tambah');

// untuk simpan fasilitas
$routes->post('/form-fasilitas', 'Fasilitas::tambah');

// untuk edit fasilitas
$routes->get('/edit-fasilitas/(:num)', 'Fasilitas::edit/$1');

// untuk update fasilitas
$routes->get('/edit-fasilitas', 'Fasilitas::edit');

// untuk hapus fasilitas
$routes->get('/hapus-fasilitas/(:num)', 'Fasilitas::hapus/$1');


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
