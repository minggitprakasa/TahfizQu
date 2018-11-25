<?php

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

Route::get('/', function () {
    return view('LoginAdmin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//adminroute
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/admin/tambahguru', 'admincontroller@tambahguru')->name('admin.tambahguru');
Route::get('/admin', 'admincontroller@dashboard')->name('admin.dashboard');


Route::get('/siswa', function () {
    return view('siswa.dashboard');
});
Route::get('/guru', function () {
    return view('guru.dashboard');
});
Route::get('/loginsiswa', function () {
    return view('login.siswa.loginsiswa');
});