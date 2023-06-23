@extends('layouts.main')

@section('title')
    <title>All Tasks</title>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">Tasks</h2>

        <!-- Add Task Button -->
        <a href="{{ route('create_budget') }}" class="btn btn-primary mb-3">Create New Budget</a>
        <a href="{{ route('add_task') }}" class="btn btn-primary mb-3">Add Task</a>

        <!-- Filter Form -->
        <form action="{{ route('all_tasks') }}" method="GET">
            <div class="form-group">
                <label for="category">Filter by Category:</label>
                <select class="form-control" id="category" name="category_id">
                    <option value="">All Categories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $selectedCategoryId == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

        <!-- Task Table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CATEGORY</th>
                    <th scope="col">NAME</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">UNIT</th>
                    <th scope="col">€ / UNIT</th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">ACTIONS</th>
                    <th scope="col">ADDED</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($allTasks as $task)
                    <tr>
                        <td>{{ $task->category_name }}</td>
                        <td>{{ $task->article }}</td>
                        <td>{{ $task->type }}</td>
                        <td>{{ $task->measure }}</td>
                        <td>{{ $task->cost }} €</td>
                        <td>
                            <div class="input-group">
                                <form action="{{ route('add_task_to_budget') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="task_id" value="{{ $task->id }}">
                                    <input type="number" class="form-control form-control-sm narrow-textbox" name="quantity[]" placeholder="" min="1">
                                    <button type="submit" class="btn btn-success btn-sm thin-button">Add</button>
                                </form>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <form action="{{ route('delete_task_from_budget', $task->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm thin-button">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No tasks found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('endcontent')
@endsection
