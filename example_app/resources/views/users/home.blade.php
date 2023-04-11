@extends('layouts.main')

@section('title')
    <title>MAIN LAYOUT</title>
@endsection

@section('content')
    <h1>HOME PAGE</h1>
    <ul>
        <li> <a href="{{ Route('show_all_users') }}">SHOW ALL USERS</a></li>
        <li> <a href="{{ Route('add_new-user') }}">ADD NEW USER</a></li>
    </ul>
@endsection


@section('footer')
    <footer>
        footer
    </footer>
@endsection
