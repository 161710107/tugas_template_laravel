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
    return view('welcome');
});
Route::get('welcomemi', 'Tugas_Controller@test1');
Route::get('galeri', 'Tugas_Controller@test2');
Route::get('Berita', 'Tugas_Controller@test3');
Route::get('Data', 'Tugas_Controller@test4');
Route::get('Hub', 'Tugas_Controller@test5');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
