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

        <a href="{{ route('add_category') }}" class="btn btn-primary mb-3">Add Category</a>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">CREATED AT</th>
                    <th scope="col">UPDATED AT</th>
                    <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            @if ($category->image)
                            <img src="{{ asset('storage/category_images/' . $category->image) }}" alt="Category Image" width="100">
                            dd('<img src="' . asset('storage/category_images/' . $category->image) . '" alt="Category Image" width="100">');


                            {{--     src="{{ $item->foto ? asset('uploadFotos/' . $item->foto) : asset('images/nophoto.jpg') }}"   LINK ANGELO PARA AS FOTOS --}}
                            {{-- <img src="{{asset('images/expense.png')}}" alt="Image" class="img-fluid" style="max-width: 150px; max-height: 150px;"> MEU NA HOME --}}


                            @else
                            <img src="{{ asset('images/nophoto.png') }}" alt="Default Image" width="50">
                        @endif
                        </td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a href="{{ route('edit_category', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('delete_category', ['id' => $category->id]) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('endcontent')
@endsection
