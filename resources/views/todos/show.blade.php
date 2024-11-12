@extends('layout')

@section('content')
    <h1>{{ $todo->title }}</h1>
    <p>{{ $todo->description }}</p>
    <p>Status: {{ $todo->completed ? 'Completed' : 'Pending' }}</p>
    
    <a href="{{ route('todos.edit', $todo) }}">Edit</a>

    <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <a href="{{ route('todos.index') }}">Back to List</a>
@endsection
