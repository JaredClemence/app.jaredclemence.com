@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Task Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="puppy_points" class="form-label">Puppy Points</label>
            <input type="number" name="puppy_points" class="form-control" min="1" max="10" required>
        </div>
        <div class="mb-3">
            <label for="severity" class="form-label">Severity</label>
            <input type="number" name="severity" class="form-control" min="1" max="10" required>
        </div>
        <div class="mb-3">
            <label for="deadline" class="form-label">Deadline</label>
            <input type="datetime-local" name="deadline" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection

