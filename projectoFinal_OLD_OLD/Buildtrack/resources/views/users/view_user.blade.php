@extends('layouts.main')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <div class="container">
        <h1>Detalhes do User</h1>
        <h3>{{ $ourUser->name }}</h3>
        <h3>{{ $ourUser->email }}</h3>

    </div>



@endsection


@section('endcontent')
@endsection
