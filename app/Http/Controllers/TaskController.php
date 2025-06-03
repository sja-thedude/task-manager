<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create() {
        return view('tasks.create');
    }

   public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'title' => 'required|string|max:255',
    ]);

    // Create and save the task
    Task::create([
        'title' => $request->title,
    ]);

    // Redirect to tasks list with success message
    return redirect()->route('tasks.index')->with('success', 'Task added successfully.');
}

    public function edit($id) {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id) {
        // Update logic here
    }

    public function destroy($id) {
    $task = Task::findOrFail($id); // Find the task or fail if not found
    $task->delete(); // Delete the task from the database

    return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
}
}
