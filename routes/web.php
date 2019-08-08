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

Route::get('/', 'HomeController@index');

Route::get('/', function () {
    return redirect('/home');
});

// Automatically generated for the login and register routes
Auth::routes();

Route::get('/admin', function() {
    return view('admin.index');
})->middleware('admin');

Route::resource('/admin/pages', 'Admin\PagesController', ['except' => ['show']]);

Route::resource('/admin/users', 'Admin\UsersController', ['except' => ['show']]);

