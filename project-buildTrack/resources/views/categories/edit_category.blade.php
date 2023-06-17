@extends('layouts.main')

@section('title')
    <title>Edit Category</title>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center">Edit Category</h2>

        <form action="{{ route('update_category', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
@endsection

@section('endcontent')
@endsection
