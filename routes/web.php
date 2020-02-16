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

Route::get('/', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function () {
	Route::get('planter', 'DashboardController@index')->name('dashboard');
	Route::get('planter/{id}', 'ModuleController@index')->name('module');
	Route::get('show/{id}', 'ShowController@index')->name('show');
	Route::get('show/{showId}/episode/{episodeNo}', 'ShowController@episode')->name('episode');
});
Auth::routes();