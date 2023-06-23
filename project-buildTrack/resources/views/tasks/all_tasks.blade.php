@extends('layouts.main')

@section('title')
    <title>All Tasks</title>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">Tasks</h2>

        <!-- Add Budget Form -->

        @auth

        <form action="{{ route('store_budget') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Budget Name</label>
              <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Create Budget</button>
          </form>
        <a href="{{ route('add_task') }}" class="btn btn-primary mb-3">Add Task</a>
        @endauth


        <!-- Task Table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">NOME</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">UN</th>
                    <th scope="col">€ / UN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allTasks as $task)
                    <tr>
                        <td>{{ $task->category_name }}</td>
                        <td>{{ $task->article }}</td>
                        <td>{{ $task->type }}</td>
                        <td>{{ $task->measure }}</td>
                        <td>{{ $task->cost }} €</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('endcontent')
@endsection
