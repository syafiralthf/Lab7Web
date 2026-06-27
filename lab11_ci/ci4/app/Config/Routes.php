<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Page::index');
$routes->get('/page', 'Page::index');

$routes->get('/page/about', 'Page::about');
$routes->get('/page/contact', 'Page::contact');

$routes->get('/page/artikel', 'Page::artikel');
$routes->get('/page/artikel/(:any)', 'Page::detail/$1');

$routes->post('/kirim-pesan', 'Page::kirimPesan');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::prosesLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/admin', 'Auth::dashboard');

$routes->get('/admin/tambah', 'Auth::tambah');
$routes->post('/admin/simpan', 'Auth::simpan');
$routes->get('/admin/edit/(:num)', 'Auth::editArtikel/$1');
$routes->post('/admin/update', 'Auth::updateArtikel');
$routes->get('/admin/hapus/(:num)', 'Auth::hapus/$1');

$routes->get('/admin/pesan', 'Auth::pesan');

// REST API
$routes->resource('post');