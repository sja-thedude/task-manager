@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Task List</h2>
    <a href="{{ route('tasks.create') }}">Add New Task</a>
    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }} -
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a> |
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                     <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
