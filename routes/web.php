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

/*  ADMIN*/
Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function (){
    Route::get('/', 'manageController@index');
    Route::get('/dashboard' , 'ManageController@dashboard')->name('manage.dashboard');

    // Manage User Admin
    Route::resource('/users','UserController');
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
    Route::resource('/posts', 'PostController');
});


Route::get('/home', 'HomeController@index')->name('home');
