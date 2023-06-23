
@extends('layouts.main')

@section('title')
    <title>ALL CATEGORIES</title>
@endsection

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <h2 class="text-center">CATEGORIES</h2>



        @auth
        @if (auth()->user()->user_type == 1)
            <ul class="nav-item">
                <a href="{{ route('add_category') }}" class="btn btn-primary mb-3">ADD CATEGORY</a>
            </ul>
        @endif
    @endauth


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">CREATED AT</th>
                    <th scope="col">UPDATED AT</th>
                    @auth
                    @if (auth()->user()->user_type == 1)
                    <th scope="col">ACTIONS</th>
                    @endif
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <img width="30px" height="30px" src="{{ $category->image ? asset('storage/images/' . $category->image) : asset('images/nophoto.png') }}" alt="{{ $category->image ? 'Category Image' : 'Default Image' }}">
                        </td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>


                        @auth
                        @if (auth()->user()->user_type == 1)
                        <td>
                            <a href="{{ route('edit_category', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('delete_category', ['id' => $category->id]) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        @endif
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('endcontent')
@endsection
