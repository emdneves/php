@extends('layouts.main')

@section('title')
    <title>Adicionar Users</title>
@endsection

@section('content')
    <h1>Adicionar Utilizador</h1>

    <div class="container">
        <form method="POST" action="{{ route('create_user') }}">
            @csrf

            <div class="mb-3">
                <label for="exampleInputFirstName" class="form-label">First Name</label>
                <input name="first_name" type="text" value="{{ old('first_name') }}" class="form-control" id="exampleInputFirstName">
            </div>

            <div class="mb-3">
                <label for="exampleInputLastName" class="form-label">Last Name</label>
                <input name="last_name" type="text" value="{{ old('last_name') }}" class="form-control" id="exampleInputLastName">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input name="email" type="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword">
            </div>

            <div class="mb-3">
                <label for="exampleInputConfirmPassword" class="form-label">Confirm Password</label>
                <input name="password_confirmation" type="password" class="form-control" id="exampleInputConfirmPassword">
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
    <a href="{{ route('home') }}">Voltar</a>
@endsection
