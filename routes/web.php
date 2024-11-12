<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Redirect the root URL to the todos index page
Route::get('/', function () {
    return redirect()->route('todos.index');
});

// Resource route for TodoController to handle CRUD operations
Route::resource('todos', TodoController::class);
