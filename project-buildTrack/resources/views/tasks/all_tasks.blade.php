@extends('layouts.main')

@section('title')
    <title>ALL TASKS</title>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">Tasks</h2>

        <!-- Add Task Button -->
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
                    <th scope="col">#</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">NOME</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">UN</th>
                    <th scope="col">PREÇO POR UN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allTasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->category_name }}</td>
                        <td>{{ $task->article }}</td>
                        <td>{{ $task->measure }}</td>
                        <td>{{ $task->type }}</td>
                        <td>{{ $task->cost }} €</td>
                    </tr>
                @endforeach
{{-- @php dd($allTasks); @endphp --}}
            </tbody>
        </table>
    </div>
@endsection

@section('endcontent')
@endsection
