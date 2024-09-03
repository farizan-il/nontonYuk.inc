<?php

namespace App\Http\Controllers;

use App\Models\TaskApi;
use Illuminate\Http\Request;

class TaskApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(TaskApi::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tasks' => 'required',
            'tasks.*.title' => 'required',
            'tasks.*.description' => 'required'
        ]);

        $addTask = TaskApi::insert($request->input('tasks'));
        return response()->json(['message' => 'Tasks berhasil ditambahkan'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskApi $taskApi)
    {
        return response()->json($taskApi, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskApi $taskApi)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $taskApi->update($request->all());
        return response()->json($taskApi, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskApi $taskApi)
    {
        $taskApi->delete();
    }
}
