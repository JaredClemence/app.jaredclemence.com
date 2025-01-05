@extends('layouts.app')

@section('slot')
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-6">Create Task</h1>
    
    <form method="POST" action="{{ route('tasks.store') }}" class="space-y-6 bg-white p-6 rounded-lg shadow-md">
        @csrf
        
        <!-- Client Number -->
        <div>
            <label for="client_number" class="block text-sm font-medium text-gray-700">Client Number</label>
            <input type="text" name="client_number" id="client_number" 
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                required>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Task Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Task Name</label>
            <input type="text" name="name" id="name" 
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                required>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Puppy Points -->
        <div>
            <label for="puppy_points" class="block text-sm font-medium text-gray-700">Puppy Points</label>
            <input type="number" name="puppy_points" id="puppy_points" min="1" max="10" 
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                required>
            @error('puppy_points')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Severity -->
        <div>
            <label for="severity" class="block text-sm font-medium text-gray-700">Severity</label>
            <input type="number" name="severity" id="severity" min="1" max="10" 
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                required>
            @error('severity')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Deadline -->
        <div>
            <label for="deadline" class="block text-sm font-medium text-gray-700">Deadline</label>
            <input type="datetime-local" name="deadline" id="deadline" 
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                required>
            @error('deadline')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" 
                class="bg-indigo-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Save
            </button>
        </div>
    </form>
</div>
@endsection

