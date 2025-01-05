@extends('layouts.app')

@section('slot')
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-6">Edit Task</h1>
    
    <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-6 bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')
        
        <!-- Client Number -->
        <div>
            <label for="client_number" class="block text-sm font-medium text-gray-700">Client Number</label>
            <input type="text" name="client_number" id="client_number" value="{{ old('client_number', $task->client_number) }}"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <!-- Task Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Task Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $task->name) }}"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <!-- Puppy Points -->
        <div>
            <label for="puppy_points" class="block text-sm font-medium text-gray-700">Puppy Points</label>
            <input type="number" name="puppy_points" id="puppy_points" value="{{ old('puppy_points', $task->puppy_points) }}"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <!-- Severity -->
        <div>
            <label for="severity" class="block text-sm font-medium text-gray-700">Severity</label>
            <input type="number" name="severity" id="severity" value="{{ old('severity', $task->severity) }}"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <!-- Deadline -->
        <div>
            <label for="deadline" class="block text-sm font-medium text-gray-700">Deadline</label>
            <input type="datetime-local" name="deadline" id="deadline" value="{{ old('deadline', $task->deadline->format('Y-m-d\TH:i')) }}"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <!-- Actions -->
        <div class="flex justify-end space-x-4">
            <a href="{{ route('tasks.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md shadow-sm hover:bg-gray-300">
                Cancel
            </a>
            <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-600">
                Update Task
            </button>
        </div>
    </form>
</div>
@endsection

