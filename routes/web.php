<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('index'); 
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::resource('tasks', TaskController::class);
