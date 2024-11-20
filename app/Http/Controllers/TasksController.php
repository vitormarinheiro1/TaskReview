<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::query()->orderBy('id')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');

        return view('tasks.index')->with('tasks', $tasks)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());

        return to_route('tasks.index')->with('mensagem.sucesso', "Tarefa '{$task->titulo}' adicionada com sucesso");
    }

    public function destroy(Task $task)
    {

        $task->delete();

        return to_route('tasks.index')->with('mensagem.sucesso', "Tarefa '$task->titulo' removida com sucesso!");
    }

    public function edit(Task $task)
    {
        return view('tasks.edit')->with('task', $task);
    }

    public function update(Task $task, Request $request)
    {
        $task->fill($request->all());
        $task->save();

        return to_route('tasks.index')->with('mensagem.sucesso', "Tarefa '$task->titulo' atualizada com sucesso!");
    }

}
