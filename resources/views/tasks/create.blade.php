@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Task</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required><br>
        <textarea name="description" placeholder="Description"></textarea><br>
        <button type="submit">Add Task</button>
    </form>
</div>
@endsection
