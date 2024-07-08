@extends('layouts.app')

@section('title', 'Editar Tarea')

@section('content')
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Editar Tarea ID: {{ $task->id }}</h1>
        </div>
        <div class="card-body">
            <form action="{{ url("/tasks/{$task->id}") }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $task->name) }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $task->description) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
