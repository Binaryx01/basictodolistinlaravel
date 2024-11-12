@extends('layout')

@section('content')
    <h1>Todo List</h1>
    <a href="{{ route('todos.create') }}">Create New Todo</a>
    <ul>
        @foreach ($todos as $todo)
            <li>
                {{ $todo->title }}
                <a href="{{ route('todos.edit', $todo) }}">Edit</a>
                <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
