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

Route::get('/', 'MainController@index')->name('main');

Auth::routes();

Route::get('/cabinet', 'HomeController@index')->name('cabinet');

Route::group(
	[
		'prefix' => 'cabinet',
		'as' => 'cabinet.',
		'namespace' => 'Cabinet',
		'middleware' => ['auth'],
	],
	function () {
		Route::get('/', 'CabinetController@index')->name('cabinet');
		
		Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
			Route::get('/', 'ProfileController@index')->name('home');
			Route::get('/edit', 'ProfileController@edit')->name('edit');
			Route::put('/update', 'ProfileController@update')->name('update');
		});
	}
);