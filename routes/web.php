<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'MenuController@index');
//menu frontend
Route::get('/home', 'MenuController@index');
Route::get('/produk/{type}', 'MenuController@produk');
Route::get('/about', 'MenuController@about');
Route::get('/contact-us', 'MenuController@contact');
Route::get('/privacy-policy', 'MenuController@privacypolicy');
Route::get('/faq', 'MenuController@faq');
Route::get('/service-center', 'MenuController@servicecenter');

//halaman penggunan
// order, profil, login, logout, checkout, detail, pembayaran, batal, retur, checkout

//menu backend
Route::get('/administrator', 'AdminController@home');
Route::get('/administrator/login', 'AdminController@login');
Route::get('/administrator/logout', 'AdminController@logout');
Route::get('/administrator/profil', 'AdminController@profil');
Route::get('/administrator/absen', 'AdminController@absen');

//backend pesanan
Route::get('/administrator/pesanan', 'PesananController@index');
Route::get('/administrator/pesanan/create', 'PesananController@create');
Route::post('/administrator/pesanan/save','PesananController@save');
Route::get('/administrator/pesanan/detail/{id}', 'PesananController@detail');
Route::get('/administrator/pesanan/edit/{id}', 'PesananController@edit');
Route::post('/administrator/pesanan/update','PesananController@update');
Route::get('/administrator/pesanan/delete/{id}', 'PesananController@delete');

Route::get('/administrator/faktur', 'FakturController@index');
Route::get('/administrator/faktur/create', 'FakturController@create');
Route::post('/administrator/faktur/save','FakturController@save');
Route::get('/administrator/faktur/detail/{id}', 'FakturController@detail');
Route::get('/administrator/faktur/edit/{id}', 'FakturController@edit');
Route::post('/administrator/faktur/update','FakturController@update');
Route::get('/administrator/faktur/delete/{id}', 'FakturController@delete');

Route::get('/administrator/surat-jalan', 'SuratJalanController@index');
Route::get('/administrator/surat-jalan/create', 'SuratJalanController@create');
Route::post('/administrator/surat-jalan/save','SuratJalanController@save');
Route::get('/administrator/surat-jalan/detail/{id}', 'SuratJalanController@detail');
Route::get('/administrator/surat-jalan/edit/{id}', 'SuratJalanController@edit');
Route::post('/administrator/surat-jalan/update','SuratJalanController@update');
Route::get('/administrator/surat-jalan/delete/{id}', 'SuratJalanController@delete');

Route::get('/administrator/kwitansi', 'KwitansiController@index');
Route::get('/administrator/kwitansi/create', 'KwitansiController@create');
Route::post('/administrator/kwitansi/save','KwitansiController@save');
Route::get('/administrator/kwitansi/detail/{id}', 'KwitansiController@detail');
Route::get('/administrator/kwitansi/edit/{id}', 'KwitansiController@edit');
Route::post('/administrator/kwitansi/update','KwitansiController@update');
Route::get('/administrator/kwitansi/delete/{id}', 'KwitansiController@delete');

Route::get('/administrator/laporan-keuangan', 'LaporanKeuanganController@index');
Route::get('/administrator/laporan-keuangan/create', 'LaporanKeuanganController@create');
Route::post('/administrator/laporan-keuangan/save','LaporanKeuanganController@save');
Route::get('/administrator/laporan-keuangan/detail/{id}', 'LaporanKeuanganController@detail');
Route::get('/administrator/laporan-keuangan/edit/{id}', 'LaporanKeuanganController@edit');
Route::post('/administrator/laporan-keuangan/update','LaporanKeuanganController@update');
Route::get('/administrator/laporan-keuangan/delete/{id}', 'LaporanKeuanganController@delete');

Route::get('/administrator/laporan-barang', 'LaporanBarangController@index');
Route::get('/administrator/laporan-barang/create', 'LaporanBarangController@create');
Route::post('/administrator/laporan-barang/save','LaporanBarangController@save');
Route::get('/administrator/laporan-barang/detail/{id}', 'LaporanBarangController@detail');
Route::get('/administrator/laporan-barang/edit/{id}', 'LaporanBarangController@edit');
Route::post('/administrator/laporan-barang/update','LaporanBarangController@update');
Route::get('/administrator/laporan-barang/delete/{id}', 'LaporanBarangController@delete');

Route::get('/administrator/gaji', 'GajiController@index');
Route::get('/administrator/gaji/create', 'GajiController@create');
Route::post('/administrator/gaji/save','GajiController@save');
Route::get('/administrator/gaji/detail/{id}', 'GajiController@detail');
Route::get('/administrator/gaji/edit/{id}', 'GajiController@edit');
Route::post('/administrator/gaji/update','GajiController@update');
Route::get('/administrator/gaji/delete/{id}', 'GajiController@delete');

// Route::get('/', 'Controller@index');
// Route::get('//create', 'Controller@create');
// Route::post('//save','Controller@save');
// Route::get('//detail/{id}', 'Controller@detail');
// Route::get('//edit/{id}', 'Controller@edit');
// Route::post('//update','Controller@update');
// Route::get('//delete/{id}', 'Controller@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
