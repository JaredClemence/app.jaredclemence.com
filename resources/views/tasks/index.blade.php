@extends('layouts.app')

@section('slot')
<div class="container">
    <h1>Task Dashboard</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Create Task</a>

    <table class="table-auto border-collapse border border-gray-300 w-full text-sm">
    <thead class="bg-gray-100">
        <tr>
            <th class="border border-gray-300 px-4 py-2 text-left">Client Number</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Task</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Puppy Points</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Severity</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Deadline</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Priority Score</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr class="hover:bg-gray-50">
                <td class="border border-gray-300 px-4 py-2">{{ $task->client_number }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $task->name }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $task->puppy_points }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $task->severity }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $task->deadline->format('Y-m-d H:i') }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ number_format($task->priority_score, 5 ) }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    <a href="{{ route('tasks.edit', $task) }}" class="text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection

