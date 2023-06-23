@extends('layouts.main')

@section('title')
    <title>ADD NEW USER</title>
@endsection

@section('content')

    <div class="container">

        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <h1 class="text-center">NEW USER</h1>
        <br>
        <form method="POST" action="{{ route('create_user') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">EMAIL</label>
                <input type="email" class="form-control" name="email" value="" id="exampleInputEmail1"
                    aria-describedby="emailHelp">

                @error('email')
                    <div id="emailHelp" class="form-text">INVALID EMAIL</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">NAME
                </label>
                <input name="name" type="text" value="" class="form-control" id="exampleInputName1"
                    aria-describedby="nameHelp">

                    @error('name')
                    <div id="nameHelp" class="form-text">INSERT A NAME</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
                <input name="password" value="" type="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                <div id="passwordHelp" class="form-text">INSERT PASSWORSD</div>
            @enderror
            </div>

            <button type="submit" class="btn btn-primary">REGISTER</button>
        </form>
    </div>
@endsection
