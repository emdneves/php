@extends('layouts.main')

@section('title')
    <title>All Users</title>
@endsection

@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <h2 class="text-center">USERS</h2>
        <form method="GET">
            <select class="custom-select" name="user_id" onchange="this.form.submit()">
                <option value="" selected>all contacts</option>
                @foreach ($allUsers as $item)
                    <option @if ($item->id == request()->query('user_id')) selected @endif value="{{ $item->id }}">
                        {{ $item->name }}</option>
                @endforeach
            </select>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">password</th>
                    <th scope="col">email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allUsers as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{ route('show_user', $item->id) }}"><button class="btn btn-info">watch</button></a>
                            <a href="{{ route('delete_user', $item->id) }}"><button
                                    class="btn btn-danger">delete</button></a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>



@endsection

@section('endcontent')
@endsection
