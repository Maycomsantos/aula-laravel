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

