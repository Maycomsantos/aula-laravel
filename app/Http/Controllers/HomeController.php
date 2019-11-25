<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tarefas;



class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Tarefas = DB::table('tarefas')->simplePaginate(15);
        return view('home', ['tarefas' => $Tarefas]);
    }
}
