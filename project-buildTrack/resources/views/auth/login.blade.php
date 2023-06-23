@extends('layouts.main')

@section('title')
    <title>Login</title>
@endsection

@section('content')
    <div class="container">

        <h1 class="text-center">LOGIN</h1>
        <br>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-outline my-4">
                <label class="form-label" for="typeEmailX-2">EMAIL</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    class="form-control " style="border-radius: 1rem;" />

            </div>
            @error('email')
                WRONG EMAIL
            @enderror
            <div class="form-outline mb-4">
                <label class="form-label" for="typePasswordX-2">PASSWORD</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                    class="form-control>
                " style="border-radius: 1rem;" />

            </div>
            @error('email')
                WRONG PASSWORD
            @enderror
                <button class="btn  btn-lg btn-block btnLogin" type="submit">LOGIN</button>
        </form>

    </div>
@endsection
