@php
    use App\Models\User;
@endphp

@extends('layouts.main')

@section('title')
    <title>
        Home</title>
@endsection

@section('content')
    <div class="container">
        <h1>Dashboard</h1>

        <h4>Users da App</h4>
        <h4>Olá {{ Auth::user()->name }}

            @if (isset(Auth::user()->user_type) && Auth::user()->user_type == User::userAdmin)
                <div class="alert alert-success">
                    Olá, Sou admin.
                </div>
            @endif
        </h4>


    </div>

{{--     src="{{ $item->foto ? asset('uploadFotos/' . $item->foto) : asset('images/nophoto.jpg') }}"   LINK ANGELO PARA AS FOTOS
 --}}

    {{-- <h1> Vamos testar as variáveis!</h1>
    <h4>{{$aMinhaVariavel}}</h4> --}}
@endsection


@section('endcontent')
    {{-- <h2>sou fim do conteúdo</h2> --}}
@endsection
