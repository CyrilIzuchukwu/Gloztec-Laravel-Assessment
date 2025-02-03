@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Task</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            @error('title') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Due Date</label>
            <input type="date" name="due_date" class="form-control"  value="{{ old('due_date') }}" required>
            @error('due_date') <span style="display: block" class="error-message">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-success">Create Task</button>
    </form>
</div>
<style>
    .error-message {
        color: red;
        font-size: 12px;
    }
</style>
@endsection
