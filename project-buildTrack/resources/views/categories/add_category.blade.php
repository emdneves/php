
@extends('layouts.main')

@section('title')
    <title>ADD CATEGORY</title>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">Add Category</h2>

        <form action="{{ route('create_category') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
            </div>

            <div class="form-group">
                <label for="image">Category Image:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
@endsection

@section('endcontent')
@endsection
