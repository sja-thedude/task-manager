@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Task</h2>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}" required><br>
        <textarea name="description">{{ $task->description }}</textarea><br>
        <button type="submit">Update</button>
    </form>
</div>
@endsection
