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

Route::get('/', 'RedirectController@index');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/status', 'HomeController@store')->name('home.store');
    Route::get('/status', 'HomeController@status')->name('home.status');
    Route::post('/storePeribadi', 'HomeController@storePeribadi')->name('home.storePeribadi');
    Route::post('/storePerniagaan', 'HomeController@storePerniagaan')->name('home.storePerniagaan');
    Route::post('/storePinjaman', 'HomeController@storePinjaman')->name('home.storePinjaman');
    Route::delete('/deleteGambar/{id}', 'HomeController@deleteGambar')->name('home.deleteGambar');
    Route::delete('/deleteKP/{id}', 'HomeController@deleteKP')->name('home.deleteKP');
    Route::delete('/deleteSSM/{id}', 'HomeController@deleteSSM')->name('home.deleteSSM');
    Route::delete('/deleteBank/{id}', 'HomeController@deleteBank')->name('home.deleteBank');
    Route::delete('/deleteBil/{id}', 'HomeController@deleteBil')->name('home.deleteBil');
    Route::delete('/deleteBorang/{id}', 'HomeController@deleteBorang')->name('home.deleteBorang');
    Route::get('ajaxdata/getCawangan', 'HomeController@getCawangan')->name('home.getCawangan');
});
