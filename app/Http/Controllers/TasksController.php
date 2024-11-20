<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::query()->orderBy('id')->get();

        return view('tasks.index')->with('tasks', $tasks);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        Task::create($request->all());

        return to_route('tasks.index');
    }

    public function destroy(Request $request)
    {
        
        Task::destroy($request->task);

        return to_route( 'tasks.index');
    }
}
