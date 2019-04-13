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

Route::group(['prefix' => 'panel'], function () {
    Route::view('/', 'backend.dashboard')->name('admin');
    Route::view('users', 'backend.users')->name('admin.users');

    Route::get('upload-files', 'FilesController@index')->name('admin.files.index');
    Route::post('guardar', 'FilesController@store')->name('admin.files.store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
