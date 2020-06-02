<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TarefasImport;

class ImportsController extends Controller
{
    public function index()
    {
        return view('imports.index');
    }

    public function import_tasks()
    {
        Excel::import(new TarefasImport,request()->file('file'));

        return redirect('imports');
    }
}
