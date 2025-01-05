<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
	    $tasks = Task::all()->sortByDesc('priority_score');
	    return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
	    $validated = $request->validate([
	    	'name'=>'required|string|max:255',
                'client_number'=>'required|string|max:10',
		'description'=>'nullable|string',
		'puppy_points'=>'required|integer|min:1|max:10',
		'severity'=>'required|integer|min:1|max:10',
		'deadline'=>'required|date',
	    ]);

	    Task::create($validated);
	    return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'client_number'=>'required|string|max:10',
            'description' => 'nullable|string',
            'puppy_points' => 'required|integer|min:1|max:10',
            'severity' => 'required|integer|min:1|max:10',
            'deadline' => 'required|date',
        ]);

        $task->update($validated);
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
