@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Task Management</h2>
    
    <div class="mb-3">
        <a href="{{ route('tasks.index', ['status' => 'pending']) }}" class="btn btn-outline-primary">Pending</a>
        <a href="{{ route('tasks.index', ['status' => 'completed']) }}" class="btn btn-outline-success">Completed</a>
        <a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary">All</a>
    </div>

    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
    <table class="table mt-3">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Due Date</th>
            <th>Actions</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ ucfirst($task->status) }}</td>
            <td>{{ \Carbon\Carbon::parse($task->due_date)->format('jS M, Y') }}</td>

            <td>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>

                @if ($task->status == 'pending')
                <form action="{{ route('tasks.complete', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-success">Mark as Completed</button>
                </form>
                @endif
            </td>

        </tr>
        @endforeach
    </table>
</div>
@endsection
