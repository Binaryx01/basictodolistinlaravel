<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Display all todos
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    // Show the form to create a new todo
    public function create()
    {
        return view('todos.create');
    }

    // Store a new todo
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Todo::create($request->all());
        return redirect()->route('todos.index');
    }

    // Show a specific todo
    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    // Show the form to edit a todo
    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    // Update the todo
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $todo->update($request->all());
        return redirect()->route('todos.index');
    }

    // Delete the todo
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
