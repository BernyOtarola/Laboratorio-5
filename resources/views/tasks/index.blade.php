@extends('layouts.app')

@section('title', 'Lista de Tareas')

@section('content')
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Lista de Tareas</h1>
        </div>
        <div class="card-body">
            <a href="{{ url('/tasks/create') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Crear Tarea</a>
            <ul class="list-group">
                @foreach ($tasks as $task)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <a href="{{ url("/tasks/{$task->id}") }}" class="font-weight-bold">{{ $task->name }}</a>
                            <p class="mb-0 text-muted">Por: {{ $task->user->name }}</p>
                        </div>
                        <div>
                            <form action="{{ url("/tasks/{$task->id}") }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
