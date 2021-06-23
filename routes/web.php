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
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/artikel/{artikel}', 'PagesController@artikel');
Route::get('/penawaran', 'PagesController@penawaran');
Route::post('/kirim','PagesController@kirim');

//admin
//login dan logout
Route::get('/login', 'PagesController@login');
Route::post('/postlogin','LogController@postlogin'); 
Route::get('/login_adm','LogController@login')->name('login')->middleware('auth');
Route::get('/logout', 'LogController@logout');

//main page
Route::get('/admin_dashboard', 'AdminController@dashboard')->middleware('auth');
Route::get('/admin_artikel', 'AdminController@artikel')->middleware('auth');
Route::get('/admin_galeri', 'AdminController@galeri')->middleware('auth');
Route::get('/admin_tim', 'AdminController@tim')->middleware('auth');

//edit data
//artikel
Route::get('/admin_artikel/{artikel}/edit','A_ArtikelController@edit_artikel')->middleware('auth');
Route::patch('/admin_artikel/{artikel}/update','A_ArtikelController@update_artikel')->middleware('auth');
//galeri
Route::get('/admin_galeri/{galeri}/edit','A_GaleriController@edit_galeri')->middleware('auth');
Route::patch('/admin_galeri/{galeri}/update','A_GaleriController@update_galeri')->middleware('auth');
//tim
Route::get('/admin_tim/{tim}/edit','A_TimController@edit_tim')->middleware('auth');
Route::patch('/admin_tim/{tim}/update','A_TimController@update_tim')->middleware('auth');


//add data  
//artikel
Route::get('/admin_artikel/tambah_artikel','A_ArtikelController@tambah_artikel')->middleware('auth');
Route::post('/admin_artikel/tambahkan','A_ArtikelController@tambahkan_artikel')->middleware('auth');
//galeri
Route::get('/admin_galeri/tambah_galeri','A_GaleriController@tambah_galeri')->middleware('auth');
Route::post('/admin_galeri/tambahkan','A_GaleriController@tambahkan_galeri')->middleware('auth');
//tim
Route::get('/admin_tim/tambah_tim','A_TimController@tambah_tim')->middleware('auth');
Route::post('/admin_tim/tambahkan','A_TimController@tambahkan_tim')->middleware('auth');

//delete data
//artikel
Route::delete('/admin_artikel/{artikel}/hapus','A_ArtikelController@hapus_artikel')->middleware('auth');
//galeri
Route::delete('/admin_galeri/{galeri}/hapus','A_GaleriController@hapus_galeri')->middleware('auth');
//guru
Route::delete('/admin_tim/{tim}/hapus','A_TimController@hapus_tim')->middleware('auth');