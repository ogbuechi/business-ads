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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('bt-admin', 'AdminController@index')->name('admin.home');
Route::get('bt-admin/media', 'AdminController@media')->name('admin.media');

Route::group(
[
    'prefix' => 'sliders',
], function () {

    Route::get('/', 'SlidersController@index')
         ->name('sliders.slider.index');

    Route::get('/create','SlidersController@create')
         ->name('sliders.slider.create');

    Route::get('/show/{slider}','SlidersController@show')
         ->name('sliders.slider.show')
         ->where('id', '[0-9]+');

    Route::get('/{slider}/edit','SlidersController@edit')
         ->name('sliders.slider.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'SlidersController@store')
         ->name('sliders.slider.store');
               
    Route::put('slider/{slider}', 'SlidersController@update')
         ->name('sliders.slider.update')
         ->where('id', '[0-9]+');

    Route::delete('/slider/{slider}','SlidersController@destroy')
         ->name('sliders.slider.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'settings',
], function () {

    Route::get('/', 'SettingsController@index')
         ->name('settings.setting.index');

    Route::get('/create','SettingsController@create')
         ->name('settings.setting.create');

    Route::get('/show/{setting}','SettingsController@show')
         ->name('settings.setting.show')
         ->where('id', '[0-9]+');

    Route::get('/{setting}/edit','SettingsController@edit')
         ->name('settings.setting.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'SettingsController@store')
         ->name('settings.setting.store');
               
    Route::put('setting/{setting}', 'SettingsController@update')
         ->name('settings.setting.update')
         ->where('id', '[0-9]+');

    Route::delete('/setting/{setting}','SettingsController@destroy')
         ->name('settings.setting.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'roles',
], function () {

    Route::get('/', 'RolesController@index')
         ->name('roles.role.index');

    Route::get('/create','RolesController@create')
         ->name('roles.role.create');

    Route::get('/show/{role}','RolesController@show')
         ->name('roles.role.show')
         ->where('id', '[0-9]+');

    Route::get('/{role}/edit','RolesController@edit')
         ->name('roles.role.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'RolesController@store')
         ->name('roles.role.store');
               
    Route::put('role/{role}', 'RolesController@update')
         ->name('roles.role.update')
         ->where('id', '[0-9]+');

    Route::delete('/role/{role}','RolesController@destroy')
         ->name('roles.role.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'users',
], function () {

    Route::get('/', 'UsersController@index')
         ->name('users.user.index');

    Route::get('/create','UsersController@create')
         ->name('users.user.create');

    Route::get('/show/{user}','UsersController@show')
         ->name('users.user.show')
         ->where('id', '[0-9]+');

    Route::get('/{user}/edit','UsersController@edit')
         ->name('users.user.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'UsersController@store')
         ->name('users.user.store');
               
    Route::put('user/{user}', 'UsersController@update')
         ->name('users.user.update')
         ->where('id', '[0-9]+');

    Route::delete('/user/{user}','UsersController@destroy')
         ->name('users.user.destroy')
         ->where('id', '[0-9]+');

});
