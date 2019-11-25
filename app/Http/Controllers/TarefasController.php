<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Facades\DB;
use Validator;
use App\Tarefas;

class TarefasController extends Controller
{
 
    public function index()
    {
        $Tarefas = DB::table('tarefas')->simplePaginate(15);
        return view('/tarefas', ['tarefas' => $Tarefas]);
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'nome' => 'required',
            'data' => 'required',
            'email' => 'required',
        ]);

        $Tarefas = new Tarefas;
        $Tarefas->nome = $request->input('nome');
        $Tarefas->data = $request->input('data');
        $Tarefas->email = $request->input('email');
        $Tarefas->save();
        return redirect('home');
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
