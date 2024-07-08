<?php

namespace App\Http\Controllers;

use App\Models\TaskModel;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = TaskModel::with('user')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        TaskModel::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tarea creada exitosamente.');
    }

    public function show(TaskModel $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(TaskModel $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, TaskModel $task)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $task->update($request->only(['name', 'description']));

        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada exitosamente.');
    }

    public function destroy(TaskModel $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada exitosamente.');
    }
}
