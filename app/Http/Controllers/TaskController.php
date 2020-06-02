<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use App\User;
use App\Exports\TarefasExport;
use Maatwebsite\Excel\Facades\Excel;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::search()
            ->orderBy('id')
            ->paginate();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.form', [
            'users' => User::all(),
        ]);
    }

    public function store(TaskRequest $request)
    {
        Task::create($request->all());

        return redirect('tasks')
            ->withSuccess('Tarefa cadastrada com sucesso');
    }

    public function show(Task $task)
    {
        return view('tasks.show' , compact('tasks'));
    }

    public function edit(Task $task)
    {
        return view('tasks.form' , [
            'tasks' =>  $task,
            'users' =>  User::all(),
        ]);
    }

    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->all());

        return view('tasks')

            ->withSuccess('Tarefa atualizada com sucesso');
    }

    public function destroy(Task $task , TaskRequest $request)
    {
        $task->destroy($request->all());

        return view('tasks')
            ->withSuccess('Tarefa deletada com sucesso');
    }
    public function export()
    {
        return Excel::download(new TarefasExport, 'tarefas.xlsx');
    }


   }
