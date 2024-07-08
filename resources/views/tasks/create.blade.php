@extends('layouts.app')

@section('title', 'Crear Tarea')

@section('content')
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Crear una Tarea</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('/tasks') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Crear Tarea</button>
            </form>
        </div>
    </div>
@endsection
