@extends('layouts.app')

@section('title', 'Detalle de Tarea')

@section('content')
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Tarea ID: {{ $task->id }}</h1>
        </div>
        <div class="card-body">
            <h2>{{ $task->name }}</h2>
            <p>{{ $task->description }}</p>
            <p class="text-muted">Creado por: {{ $task->user->name }}</p>
            <a href="{{ url("/tasks/{$task->id}/edit") }}" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>
        </div>
    </div>
@endsection
