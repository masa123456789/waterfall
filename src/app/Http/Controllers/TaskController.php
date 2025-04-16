<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request) {
        Task::create($request->all());
        return redirect('/tasks');
    }

    public function update(Request $request, $id) {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return redirect('/tasks');
    }

    public function destroy($id) {
        Task::destroy($id);
        return redirect('/tasks');
    }
}
