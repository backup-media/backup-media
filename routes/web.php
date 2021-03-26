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

Route::get('/', 'HomeController@index')->name('backend.dashboard');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('backend.dashboard');

//server

Route::get('/servers','ServerController@index');
Route::get('/add-server','ServerController@create');
Route::get('/save-server','ServerController@store');
Route::get('/edit-server/{id}','ServerController@edit');
Route::post('/update-server/{id}','ServerController@update');

//client

Route::get('/clients','ClientController@index');
Route::get('/add-client','ClientController@create');
Route::get('/save-client','ClientController@store');
Route::get('/edit-client/{id}','ClientController@edit');
Route::post('/update-client/{id}','ClientController@update');

//account
Route::get('/accounts','AccountController@index');
Route::get('/add-account','AccountController@create');
Route::get('/save-account','AccountController@store');
Route::get('/edit-account/{id}','AccountController@edit');
Route::post('/update-account/{id}','AccountController@update');

//hosting
Route::get('/hostings','HostingController@index');
Route::get('/add-hosting','HostingController@create');
Route::get('/save-hosting','HostingController@store');
Route::get('/edit-hosting/{id}','HostingController@edit');
Route::post('/update-hosting/{id}','HostingController@update');

//domain
Route::get('/domains','DomainController@index');
Route::get('/add-domain','DomainController@create');
Route::get('/save-domain','DomainController@store');
Route::get('/edit-domain/{id}','DomainController@edit');
Route::post('/update-domain/{id}','DomainController@update');

//projects
Route::get('/projects','ProjectController@index');
Route::get('/add-project','ProjectController@create');
Route::get('/save-project','ProjectController@store');
Route::get('/edit-project/{id}','ProjectController@edit');
Route::post('/update-project/{id}','ProjectController@update');

//users
Route::get('/users','UserController@index');
Route::get('/add-user','UserController@create');
Route::get('/save-user','UserController@store');

//providers
Route::get('/providers','ProviderController@index');
Route::get('/add-provider','ProviderController@create');
Route::get('/save-provider','ProviderController@store');
Route::get('/edit-provider/{id}','ProviderController@edit');
Route::post('/update-provider/{id}','ProviderController@update');

//profile
Route::get('/profile','UserController@show');
Route::get('/user-profile','UserController@profile');
Route::post('/edit-profile','UserController@update');
Route::get('/password','UserController@password');
Route::post('/change-password','UserController@changepassword');

//logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');