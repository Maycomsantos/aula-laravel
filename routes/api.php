<?php

use Illuminate\Http\Request;

Route::namespace('API')->name('api.')->group(function() { 
  
     Route::get('/tarefas' , 'TarefasController@index')->name('/tarefas');

});