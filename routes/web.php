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
Route::get('export', function() {
    return view('export');
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('/', 'SiswaCusController@index');
Route::get('/logout', 'AuthController@logout');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'user'], function () {
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/absen', 'SiswaCusController@create');

Route::post('/absen', 'SiswaCusController@store');

Route::get('/exportxls', 'PresensiController@exportXls');
Route::get('/exportpdf', 'PresensiController@exportPdf');
Route::get('/preview', 'PresensiController@preview');