@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Task Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <p class="card-text">{{ $task->description }}</p>
            <p class="card-text"><strong>Due Date:</strong> {{ $task->due_date->format('Y-m-d') }}</p>
            <p class="card-text"><strong>Status:</strong> {{ ucfirst($task->status) }}</p>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
