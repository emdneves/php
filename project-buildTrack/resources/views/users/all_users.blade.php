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
        git

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">password</th>
                    <th scope="col">email</th>
                    <th scope="col">type</th>
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
                            @if ($item->user_type == 0)
                                user
                            @elseif ($item->user_type == 1)
                                admin
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit_user', $item->id) }}"><button class="btn btn-info">CHANGE</button></a>
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
