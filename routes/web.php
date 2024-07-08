<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::resource('tasks', TaskController::class)->names([
        'index' => 'tasks.index',
        'create' => 'tasks.create',
        'store' => 'tasks.store',
        'show' => 'tasks.show',
        'edit' => 'tasks.edit',
        'update' => 'tasks.update',
        'destroy' => 'tasks.destroy',
    ]);
});
