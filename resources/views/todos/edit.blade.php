@extends('layout')

@section('content')
    <h1>Edit Todo</h1>
    <form action="{{ route('todos.update', $todo) }}" method="POST">
        @csrf
        @method('PUT') <!-- This is important to indicate we're updating the resource -->

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ old('title', $todo->title) }}" required>

        <label for="description">Description:</label>
        <textarea name="description" required>{{ old('description', $todo->description) }}</textarea>

        <button type="submit">Update</button>
    </form>
@endsection
