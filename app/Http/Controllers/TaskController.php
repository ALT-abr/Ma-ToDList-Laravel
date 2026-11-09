<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // GET /api/tasks
    public function index()
    {
        return response()->json(Task::all());
    }

    // POST /api/tasks
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'sometimes|boolean'
        ]);

        $task = Task::create($data);

        return response()->json($task, 201);
    }

    // GET /api/tasks/1
    public function show(Task $task)
    {
        return response()->json($task);
    }

    // PATCH /api/tasks/1
    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullable|string',
            'completed' => 'sometimes|boolean'
        ]);

        $task->update($data);

        return response()->json($task);
    }

    // DELETE /api/tasks/1
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->noContent();
    }
}