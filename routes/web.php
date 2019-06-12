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

Route::group(
	[
		'prefix' => 'cabinet',
		'as' => 'cabinet.',
		'namespace' => 'Cabinet',
		'middleware' => ['auth'],
	],
	function () {
		Route::get('/', 'CabinetController@index')->name('cabinet');
	}
);

Route::group(
	[
		'prefix' => 'admin',
		'as' => 'admin.',
		'namespace' => 'Admin',
		'middleware' => ['auth', 'can:admin-panel'],
	],
	function () {
		Route::get('/', 'HomeController@index')->name('home');
		Route::resource('users', 'UsersController');
		Route::resource('regions', 'RegionController');
		
		Route::group(['prefix' => 'categories', 'as' => 'categories.', 'namespace' => 'Categories'], function () {
			Route::group(['prefix' => 'categories/{category}', 'as' => 'categories.'], function () {
				Route::post('/first', 'CategoryController@first')->name('first');
				Route::post('/up', 'CategoryController@up')->name('up');
				Route::post('/down', 'CategoryController@down')->name('down');
				Route::post('/last', 'CategoryController@last')->name('last');
				Route::resource('attributes', 'AttributeController')->except('index');
			});
		});
	}
);

Route::group(
	[
		'as' => 'category.',
	],
	function () {
		Route::get('news/{slug}', 'CategoryController@index')->name('index');
	}
);