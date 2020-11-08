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

use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});


Route::resources([
    'payment'   => 'PaymentController',
    'tasks'     => 'TaskController',
    'shop'      => 'ShopController',
    'imports'   => 'ImportsController',
    'aula'      => 'AulaController'
]);

Route::post('import_tasks', 'ImportsController@import_tasks');

Route::group(['prefix' => 'exports'], function () {
    Route::get('tarefas_export', 'TaskController@export');
});


Auth::routes();


// Route::get('/home', HomeController::class);
Route::get('dashboard', [HomeController::class, 'index']); // It is okkk


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

