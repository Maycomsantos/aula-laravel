<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tarefas;


class TarefasController extends Controller
{
    public function index() { 

      return Tarefas::all();

    }
}
